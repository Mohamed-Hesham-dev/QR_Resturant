<?php

namespace App\Http\Controllers\OwnerResturant;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Http\Request;

class ResturantDashboardController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
       
        //$usersCount = count(User::all());
        return view('DashboardOwnerResturant.home');
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