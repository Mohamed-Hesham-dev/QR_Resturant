<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Models\Resturant;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users=User::get();
        $resturant=Resturant::get();
        
    return view('Dashboard.users',compact('users','resturant'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }
    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {

        
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {

    }
        // Update the password if provided
    
    /**
     * Remove the specified resource from storage.
     */
    public function deleteuser( $id)
    {
        User::where('id',$id)->delete();
        return redirect('/admin/user')->with('success','User Delete Successfully');
    }
}

