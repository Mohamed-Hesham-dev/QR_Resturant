<?php

namespace App\Http\Controllers\OwnerResturant;

use App\Http\Controllers\Controller;
use App\Models\ResturantCategoryDashboard;
use Illuminate\Http\Request;

class ResturantCategoryDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_categories = ResturantCategoryDashboard::get();
        return view('DashboardOwnerResturant.menu.category.index', compact('all_categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('DashboardOwnerResturant.menu.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
        $data = [
            'category_name' => $request->category_name,
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
        $data = [
            'category_name' => $request->category_name,
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