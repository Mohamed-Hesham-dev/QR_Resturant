<?php

 
namespace App\Http\Controllers\WebSite;
use App\Http\Controllers\Controller;
use App\Models\AboutUsSetting;
use App\Models\ContactUsSetting;
use App\Models\Reservation;
use App\Models\Resturant;
use App\Models\ResturantCategoryDashboard;
use App\Models\ResturantContactUsSetting;
use App\Models\ResturantProductDashboard;
use App\Models\ResturantTableDashboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\Guard;
 

class WebSiteResturantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)

    {
     
        $resturant=Resturant::where('id',$id)->first();
       $tables=ResturantTableDashboard::where('resturant_id',$id)->get();
      
        $contactUs=ResturantContactUsSetting::where('resturant_id',$id)->first();
        $allproducts=ResturantProductDashboard::where('resturant_id',$resturant->id)->paginate(50 );
        $categories=ResturantCategoryDashboard::where('resturant_id',$resturant->id)->get();

        return view('Front.resturant',compact('resturant','contactUs','allproducts','categories','tables') );
  
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
    public function reservation(Request $request){
       $data=[ 
        'name'=>Auth::user()->name,
        'email'=>Auth::user()->email,
        'resturant_id'=>$request->resturant_id,
        'phone'=>$request->phone,
        'date'=>$request->date,
        'time'=>$request->time,
        'seats'=>$request->seats,
        'request'=>$request->message
       ];
       
       $data=Reservation::create($data);
    return redirect('/resturant/1' )->with('success','Reservation Created Successfully');
        
    }
 
}
