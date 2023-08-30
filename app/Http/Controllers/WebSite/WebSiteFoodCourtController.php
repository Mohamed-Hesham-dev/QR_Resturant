<?php

namespace App\Http\Controllers\WebSite;

use App\Http\Controllers\Controller;
use App\Models\ContactUsSetting;
use App\Models\Foodcourt;
use App\Models\Resturant;
use App\Models\ResturantContactUsSetting;
use Illuminate\Http\Request;

class WebSiteFoodCourtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $foodcourtdata=Foodcourt::where('id',$request->id)->first();
        $contactUs=ResturantContactUsSetting::get();
        $contact=ContactUsSetting::first();
        $allfoodcourtres=Resturant::where('foodcourt_id',$request->id)->get();
     return view('Front.resturants',compact('allfoodcourtres','contact','contactUs','foodcourtdata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
