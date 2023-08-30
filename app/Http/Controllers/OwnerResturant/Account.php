<?php

namespace App\Http\Controllers\OwnerResturant;

use App\Http\Controllers\Controller;
use App\Models\Resturant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Account extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $currentuser=User::where('id',$id)->first();
        $resturant=Resturant::Where('user_id',$currentuser->id)->first();
        return view('DashboardOwnerResturant.account.index',compact('resturant','currentuser'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user=User::findOrFail($id);

    $data=['name'=>$request->name,
           'email'=>$request->email ,
           'password'=>Hash::make($request->password)];
          
           $user->update($data);
      
           return redirect('/owner/account/'.$id.'/edit')->with('success','Resturant Owner Updated Successfully');
    }
   
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
