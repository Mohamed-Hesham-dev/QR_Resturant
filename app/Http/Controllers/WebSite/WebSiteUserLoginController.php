<?php
namespace App\Http\Controllers\WebSite;
use App\Http\Controllers\Controller;
use App\Models\AboutUsSetting;
use App\Models\ContactUsSetting;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\hash;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class WebSiteUserLoginController extends Controller
{
    public function index(){
 
    
    $contact=ContactUsSetting::first();
    
      
        return view('Front.auth.login',compact( 'contact'));
    }

    public function loginUser(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if ((Auth::attempt($credentials)) && (Auth::user()->type=='user')) {
         
            return redirect('/')
                        ->withSuccess('You have Successfully loggedin');
        }else{
            return redirect()->route('login_user.index')->with('error','Oppes! You have entered invalid credentials');
        }
     
    }
   public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }
}
