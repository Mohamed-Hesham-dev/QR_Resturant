<?php

namespace App\Http\Controllers\WebSite;
use App\Http\Controllers\Controller;
use App\Models\AboutUsSetting;
use App\Models\ContactUsSetting;
use App\Models\Foodcourt;
use App\Models\Meta;
use App\Models\Package;
use App\Models\Post;
use App\Models\Resturant;
use App\Models\ResturantBooking;
use App\Models\ResturantContactUsSetting;
use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //about us
        //packages
        $packages=Package::where('is_active',1)->get();


        //resturant 
        $resturant=Resturant::where('end_date','>=',Carbon::now())->orWhere('end_date',null)->get();
        $allfoodcourts=Foodcourt::where('is_active',1)->get();
        $contactUs=ResturantContactUsSetting::get();

        $contact=ContactUsSetting::first();
 
        return view('Front.home',compact('packages','resturant','contact','contactUs','allfoodcourts'));

    }
    public function clientform(Request $request){
    $data=[
        'packageid'=>$request->packageid,
        'name'=>$request->Name,
        'phone'=>$request->Phone,
        'resturantname'=>$request->resturant,
        'Message'=>$request->Message,
    ];
    ResturantBooking::create($data);
    return redirect('/')->with('success', 'Your Request Successfully Send wait call from us');


}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
    }
}
