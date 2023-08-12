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
       
       
        return view('Dashboard.auth.login');
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

}
