<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Models\AboutUsSetting;
use Illuminate\Http\Request;
use Exception;

class AboutUsSettingController extends Controller
{
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactUsSetting  $contactUsSetting
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $all_aboutUsSetting=AboutUsSetting::first();
        return view('Dashboard.aboutUsSetting.edit',compact('all_aboutUsSetting'));
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
                    $AboutUsSetting = AboutUsSetting::find($id);
                    $AboutUsSetting->description=$request->description;
                    if($request->hasfile('image')) 
                    {
                         $image = $request->file('image');
                          $image_name = $image->getClientOriginalName();
                          $image->move(public_path('/image'),$image_name);
                          $image_path = "/image/" . $image_name;
                          $AboutUsSetting['image']=$image_path;
                    }
                    if($request->hasfile('logo')) 
                    {
                         $logo = $request->file('logo');
                          $logo_name = $logo->getClientOriginalName();
                          $logo->move(public_path('/image'),$logo_name);
                          $logo_path = "/image/" . $logo_name;
                          $AboutUsSetting['logo']=$logo_path;
                    }
                    if($request->hasfile('video')) 
                    {
                         $video = $request->file('video');
                          $video_name = $video->getClientOriginalName();
                          $video->move(public_path('/video'),$video_name);
                          $video_path = "/video/" . $video_name;
                          $AboutUsSetting['video']=$video_path;
                    }
                    $AboutUsSetting->save();
                    return redirect()->back()->with('success','Contact Us Setting Updated Successfully');
                }
                catch(Exception $e){
                    return redirect()->back()->with('error',$e->getMessage());
                }
    }

    
}
