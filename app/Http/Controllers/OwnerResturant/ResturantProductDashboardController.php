<?php

namespace App\Http\Controllers\OwnerResturant;

use App\Http\Controllers\Controller;
use App\Models\Resturant;
use App\Models\ResturantCategoryDashboard;
use App\Models\ResturantOptionDashboard;
use App\Models\ResturantProductDashboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResturantProductDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = ResturantProductDashboard::where('resturant_id',Auth::guard('owner')->user()->resturant->id)->get();
        $user=Auth::guard('owner')->user()->id;

        $resturantname=Resturant::where('user_id',$user)->first();
        return view('DashboardOwnerResturant.menu.product.index',compact('products','resturantname'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $options = ResturantOptionDashboard::with('values')->where('resturant_id',Auth::guard('owner')->user()->resturant->id)->get();
        $categories = ResturantCategoryDashboard::get();
        $user=Auth::guard('owner')->user()->id;

        $resturantname=Resturant::where('user_id',$user)->first();
        return view('DashboardOwnerResturant.menu.product.create',compact('options','categories','resturantname'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=[
            "name"=>$request->name,
            "category_id"=>$request->category_id,
            "description"=>$request->description,
            'resturant_id'=>Auth::guard('owner')->user()->resturant->id,
            ];
        if($request->hasfile('logo')) 
      {
           $image = $request->file('logo');
            $image_name = $image->getClientOriginalName();
            $image->move(public_path('/image'),$image_name);
            $image_path = "/image/" . $image_name;
            $data['logo']=$image_path;
      }
      
        $product = ResturantProductDashboard::create($data);
        if ($request->hasFile('images')) {
            $fileAdders = $product->addMultipleMediaFromRequest(['images'])
                ->each(function ($fileAdder) {
                    $fileAdder->toMediaCollection('images');
                });
        }
        $product->options()->sync($this->customSync($request->all(),$product->id));
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(ResturantProductDashboard $resturantProductDashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ResturantProductDashboard $resturantProductDashboard)
    {
        $options = ResturantOptionDashboard::with('values')->where('resturant_id',Auth::guard('owner')->user()->resturant->id)->get();
        $categories = ResturantCategoryDashboard::get();

        return view('DashboardOwnerResturant.menu.product.edit',compact('resturantProductDashboard','options','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ResturantProductDashboard $resturantProductDashboard)
    {
        $data=[
            "name"=>$request->name,
            "category_id"=>$request->category_id,
            "description"=>$request->description,
            'resturant_id'=>Auth::guard('owner')->user()->resturant->id,
            ];
        if($request->hasfile('logo')) 
        {
             $image = $request->file('logo');
              $image_name = $image->getClientOriginalName();
              $image->move(public_path('/image'),$image_name);
              $image_path = "/image/" . $image_name;
              $data['logo']=$image_path;
        }
        $resturantProductDashboard->update($data);
        if ($request->hasFile('images')) {
            foreach ($resturantProductDashboard->getMedia('images') as $media) {
                $media->delete(); // This deletes the media file from storage
            }
         $resturantProductDashboard->clearMediaCollection('images');
                $fileAdders = $resturantProductDashboard->addMultipleMediaFromRequest(['images'])
                    ->each(function ($fileAdder) {
                        $fileAdder->toMediaCollection('images');
                   });

         }
        $resturantProductDashboard->options()->sync($this->customSync($request->all(),$resturantProductDashboard->id));

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ResturantProductDashboard $resturantProductDashboard)
    {
        $resturantProductDashboard->delete();
        return redirect()->route('products.index');
    }

    private function customSync($data,$product_id)
    {
        $newData = [];
      // dd($data['options']);
      foreach ($data['options'] as $key => $item) {
        $index = $key; // Use the current $key as an index
        $newData[$index] = [
            'option_id' => $item,
            'value_id' => $data['values'][$key],
            'price' => $data['prices'][$key],
            'product_id' => $product_id,
        ];
    }
       // dd($newData);
        return $newData;
    }
}
