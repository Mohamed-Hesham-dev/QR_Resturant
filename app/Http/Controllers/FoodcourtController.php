<?php

namespace App\Http\Controllers;

use App\Models\Foodcourt;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FoodcourtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allfoodcourt=Foodcourt::where('user_id',Auth::guard('admin')->user()->id)->get();
       
        return view('Dashboard.foodcourts.index',compact('allfoodcourt'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.foodcourts.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $data=[
                'is_active'=>$request->boolean('is_active'),
                'foodcourt_name'=>$request->resturant_name,
                'user_id'=>Auth::guard('admin')->user()->id
                ];
        if($request->hasfile('foodcourt_logo')) 
      {
           $image = $request->file('foodcourt_logo');
            $image_name = $image->getClientOriginalName();
            $image->move(public_path('/image'),$image_name);
            $image_path = "/image/" . $image_name;
            $data['foodcourt_logo']=$image_path;
      }
            $data=Foodcourt::create($data);
            
            return redirect('admin/foodcourt')->with('success','foodcourt Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Foodcourt $foodcourt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Foodcourt $foodcourt)
    {
 
        return view('Dashboard.foodcourts.edit',compact('foodcourt'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Foodcourt $foodcourt)
    {
        $data=[
            'is_active'=>$request->boolean('is_active'),
            'foodcourt_name'=>$request->resturant_name,
            'user_id'=>Auth::guard('admin')->user()->id
            ];
        if($request->hasfile('foodcourt_logo'))  {
           $image = $request->file('foodcourt_logo');
            $image_name = $image->getClientOriginalName();
            $image->move(public_path('/image'),$image_name);
            $image_path = "/image/" . $image_name;
            $data['foodcourt_logo']=$image_path;
      }
        $foodcourt->update($data);
      
        return redirect('admin/foodcourt')->with('success','foodcourt Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Foodcourt $foodcourt)
    {
        $foodcourt->delete();
        return redirect('/admin/resturant')->with('success','foodcourt Delete Successfully');
    }
}
