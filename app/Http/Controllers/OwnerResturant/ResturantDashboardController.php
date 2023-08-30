<?php

namespace App\Http\Controllers\OwnerResturant;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Resturant;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Http\Request;

class ResturantDashboardController extends Controller
{
 
    public function index()
    {
        $user=Auth::guard('owner')->user()->id;
        $resid=Auth::guard('owner')->user()->resturant->id;
        $orders=Order::where('resturant_id',$resid)->get();
        $compleateorders=Order::where('statue','ClOSED')->get();
       
 
        return view('DashboardOwnerResturant.home',compact('user','orders','compleateorders'));
    }
  

  
   

    
    public function loginowner()
    {
       
       
        return view('DashboardOwnerResturant.auth.login');
    }

    public function loginOwnerResturant(Request $request)
    {
      
        $credentials = $request->only('email', 'password');
        if (Auth::guard('owner')->attempt($credentials)) {
            return redirect('/owner')
                        ->withSuccess('You have Successfully loggedin');
        }else{
            return redirect()->route('owner.login')->withError("You don't have owner access.");
        }
    }
    public function logoutOwner(Request $request)
    {
            Auth::guard('owner')->logout();
            return redirect('/owner/login');
    }

}
