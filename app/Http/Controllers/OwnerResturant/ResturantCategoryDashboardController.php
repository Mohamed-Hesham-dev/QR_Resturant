<?php

namespace App\Http\Controllers\OwnerResturant;

use App\Http\Controllers\Controller;
use App\Models\Resturant;
use App\Models\ResturantCategoryDashboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResturantCategoryDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user=Auth::guard('owner')->user()->id;

        $resturantname=Resturant::where('user_id',$user)->first();
        $all_categories = ResturantCategoryDashboard::where(['user_id'=>$user,'resturant_id'=>$resturantname->id])->get();
        return view('DashboardOwnerResturant.menu.category.index', compact('all_categories','resturantname'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user=Auth::guard('owner')->user()->id;

        $resturantname=Resturant::where('user_id',$user)->first();
        return view('DashboardOwnerResturant.menu.category.create',compact('resturantname'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
        ]);
      
        $data = [
            'category_name' => $request->category_name,
            'user_id'=>Auth::guard('owner')->user()->id,
            'resturant_id'=>Auth::guard('owner')->user()->resturant->id
        ];
        $data = ResturantCategoryDashboard::create($data);

        return redirect('/owner/resturantCategoryDashboard')->with('success', 'Category Created Successfully');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(ResturantCategoryDashboard $resturantCategoryDashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ResturantCategoryDashboard $resturantCategoryDashboard)
    {
        return view('DashboardOwnerResturant.menu.category.edit', compact('resturantCategoryDashboard'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ResturantCategoryDashboard $resturantCategoryDashboard)
    {
        $request->validate([
            'category_name' => 'required',
        ]);
        $data = [
            'category_name' => $request->category_name,
            'user_id'=>Auth::guard('owner')->user()->id,
            'resturant_id'=>Auth::guard('owner')->user()->resturant->id
        ];
        $resturantCategoryDashboard->update($data);


        return redirect('/owner/resturantCategoryDashboard')->with('success', 'Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ResturantCategoryDashboard $resturantCategoryDashboard)
    {
        $resturantCategoryDashboard->delete();
        return redirect('/owner/resturantCategoryDashboard')->with('success', 'Category Delete Successfully');
    }
}
