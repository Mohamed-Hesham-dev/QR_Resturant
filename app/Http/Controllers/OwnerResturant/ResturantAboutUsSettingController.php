<?php

namespace App\Http\Controllers\OwnerResturant;

use App\Http\Controllers\Controller;
use App\Models\AboutUsSetting;
use App\Models\Resturant;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Auth;

class ResturantAboutUsSettingController extends Controller
{
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactUsSetting  $contactUsSetting
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $all_aboutUsSetting = Resturant::where('user_id',Auth::guard('owner')->user()->id)->first();
        $user=Auth::guard('owner')->user()->id;

        $resturantname=Resturant::where('user_id',$user)->first();
        return view('DashboardOwnerResturant.aboutUsSetting.edit',compact('resturantname','all_aboutUsSetting'));
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
                    $AboutUsSetting = Resturant::find($id);
           
                    $AboutUsSetting->description=$request->description;
                    $AboutUsSetting->resturant_name=$request->resturant_name;
                    if($request->hasfile('resturant_logo')) 
                    {
                         $image = $request->file('resturant_logo');
                          $image_name = $image->getClientOriginalName();
                          $image->move(public_path('/image'),$image_name);
                          $image_path = "/image/" . $image_name;
                          $AboutUsSetting['resturant_logo']=$image_path;
                    }
                    if($request->hasfile('resturant_cover')) 
                    {
                         $image = $request->file('resturant_cover');
                          $image_name = $image->getClientOriginalName();
                          $image->move(public_path('/image'),$image_name);
                          $image_path = "/image/" . $image_name;
                          $AboutUsSetting['resturant_cover']=$image_path;
                    }
                   
                    $AboutUsSetting->save();

                    if ($request->hasFile('images')) {
                        foreach ($AboutUsSetting->getMedia('images') as $media) {
                            $media->delete(); // This deletes the media file from storage
                        }
                     $AboutUsSetting->clearMediaCollection('images');
                            $fileAdders = $AboutUsSetting->addMultipleMediaFromRequest(['images'])
                                ->each(function ($fileAdder) {
                                    $fileAdder->toMediaCollection('images');
                               });
            
                     }

                    return redirect()->back()->with('success','About Us Setting Updated Successfully');
                }
                catch(Exception $e){
                    return redirect()->back()->with('error',$e->getMessage());
                }
    }

    
}
