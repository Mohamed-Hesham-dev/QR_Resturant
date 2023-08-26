<?php

namespace App\Http\Controllers\OwnerResturant;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Resturant;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd("index");
      
        $resturant=Resturant::Where('user_id',Auth::guard('owner')->user()->id)->first();
 
        $order=Order::where('resturant_id',$resturant->id)->get();
 
        return view('DashboardOwnerResturant.orders.index',compact('order'));
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
    public function show(Order $Order )
    {
        dd('show function');
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $Order,Request $request)
    {
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Order $Order)
    {
        $val=$request->ststue;
        Order::findOrFail($Order->id)->update([
            'statue'=> $val
        ]);

        return redirect(route('orders.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $Order)
    {
        //
    }
}
