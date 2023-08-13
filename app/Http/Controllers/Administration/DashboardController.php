<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
       $users=User::get() ;
    
        //$usersCount = count(User::all());
        return view('Dashboard.home',compact('users'));
    }
    public function loginAdmin()
    {
        $userType="admin";
       
        return view('Dashboard.auth.login',compact('userType'));
    }

    public function login(Request $request)
    {
      
        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect('/admin')
                        ->withSuccess('You have Successfully loggedin');
        }else{
            return redirect()->route('admin.login')->withError("You don't have admin access.");
        }
    }
    public function logout(Request $request)
    {
            Auth::guard('admin')->logout();
            return redirect('/admin/login');
    }


    public function loginowner()
    {
       
        $userType="owner";
        return view('Dashboard.auth.login',compact('userType'));
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
