<?php

namespace App\Http\Controllers\OwnerResturant;

use App\Http\Controllers\Controller;
use App\Models\Resturant;
use App\Models\ResturantContactUsSetting;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResturantContactUsSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(ResturantContactUsSetting $resturantContactUsSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $all_contactUsSetting=ResturantContactUsSetting::where('user_id', Auth::guard('owner')->user()->id)->first();
        $user=Auth::guard('owner')->user()->id;
    
        $resturantname=Resturant::where('user_id',$user)->first();
        return view('DashboardOwnerResturant.contactUsSetting.edit',compact('all_contactUsSetting','resturantname'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
     
        try
        {
             $contactUsSetting = ResturantContactUsSetting::find($id);
             $contactUsSetting->mobile=$request->mobile;
             $contactUsSetting->facebook=$request->facebook;
             $contactUsSetting->instagram=$request->instagram;
             $contactUsSetting->youtube=$request->youtube;
             $contactUsSetting->location=$request->location;
             $contactUsSetting->resturant_id= Auth::guard('owner')->user()->resturant->id;
             $contactUsSetting->save();
             return redirect()->back()->with('success','Contact Us Setting Updated Successfully');
         }
         catch(Exception $e){
             return redirect()->back()->with('error',$e->getMessage());
         }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ResturantContactUsSetting $resturantContactUsSetting)
    {
        //
    }
}
