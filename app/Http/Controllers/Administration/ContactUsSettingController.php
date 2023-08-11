<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Models\ContactUsSetting;
use Illuminate\Http\Request;
use Exception;

class ContactUsSettingController extends Controller
{
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactUsSetting  $contactUsSetting
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $all_contactUsSetting=ContactUsSetting::first();
        return view('Dashboard.contactUsSetting.edit',compact('all_contactUsSetting'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactUsSetting  $contactUsSetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            try
               {
                    $contactUsSetting = ContactUsSetting::find($id);
                    $contactUsSetting->mobile=$request->mobile;
                    $contactUsSetting->facebook=$request->facebook;
                    $contactUsSetting->instagram=$request->instagram;
                    $contactUsSetting->youtube=$request->youtube;
                    $contactUsSetting->save();
                    return redirect()->back()->with('success','Contact Us Setting Updated Successfully');
                }
                catch(Exception $e){
                    return redirect()->back()->with('error',$e->getMessage());
                }
    }

    
}
