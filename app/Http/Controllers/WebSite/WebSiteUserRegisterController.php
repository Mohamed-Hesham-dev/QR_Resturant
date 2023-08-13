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
use Illuminate\Validation\Rules;

use function PHPUnit\Framework\isEmpty;

class WebSiteUserRegisterController extends Controller
{
   
    public function index()
    {

    
        $contact=ContactUsSetting::first();
        
          
          
        return view('Front.auth.register',compact('contact'));
    }
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
      
        return redirect()->route('login_user.index');
    }

    
   
}
