<?php

namespace App\Http\Controllers\OwnerResturant;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Resturant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LiveordersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resturant=Resturant::Where('user_id',Auth::guard('owner')->user()->id)->first();
 
        $orders=Order::where('resturant_id',$resturant->id)->get();
        $orders_ACCEPTED=Order::where('resturant_id',$resturant->id)->where('statue','ACCEPTED')->get();
 
    return view('DashboardOwnerResturant.liveorder.index',compact('orders','resturant','orders_ACCEPTED'));
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
         dd('omar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
