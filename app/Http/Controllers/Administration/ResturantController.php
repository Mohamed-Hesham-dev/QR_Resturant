<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Models\Foodcourt;
use App\Models\Package;
use App\Models\Resturant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ResturantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_owner = Resturant::get();

        return view('Dashboard.ResturantOwner.index', compact('all_owner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $all_packages = Package::where('is_active', 1)->get();
        $foodcourts = Foodcourt::where('is_active', 1)->get();
        return view('Dashboard.ResturantOwner.create', compact('all_packages', 'foodcourts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'resturant_name'=>'required',
            'resturant_logo'=>'required',
            'description'=>'required',

        ]);
           $userdata=[
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'type'=>"owner_resturant",
        ];
        $owner_date=User::create($userdata);
            $data=[
                'is_active'=>$request->boolean('is_active'),
                'user_id'=>$owner_date->id,
                'package'=>$request->package,
                'resturant_name'=>$request->resturant_name,
                'foodcourt_id'=>$request->foodcourt_id,
                'description'=>$request->description
                ];
                if($request->hasfile('resturant_logo')) 
      {
           $image = $request->file('resturant_logo');
            $image_name = $image->getClientOriginalName();
            $image->move(public_path('/image'), $image_name);
            $image_path = "/image/" . $image_name;
            $data['resturant_logo']=$image_path;
      }
     
            $data=Resturant::create($data);
            
            return redirect('/admin/resturant')->with('success','Resturant Owner Created Successfully');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Resturant $resturant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resturant $resturant)
    {
        $foodcourts = Foodcourt::where('is_active', 1)->get();
        $all_packages = Package::where('is_active', 1)->get();
        return view('Dashboard.ResturantOwner.edit', compact('resturant', 'all_packages', 'foodcourts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resturant $resturant)
    {
        $request->validate([
            'name'=>'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'resturant_name'=>'required',
            'resturant_logo'=>'required',
            'description'=>'required',

        ]);
        $user=User::findOrFail($resturant->user->id);
        
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        // Update the password if provided
        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        $user->save();
        $data = [
            'is_active' => $request->boolean('is_active'),
            'package' => $request->package,
            'foodcourt_id' => $request->foodcourt_id,
            'resturant_name' => $request->resturant_name,
            'description' => $request->description
        ];
        if ($request->hasfile('resturant_logo')) {
            $image = $request->file('resturant_logo');
            $image_name = $image->getClientOriginalName();
            $image->move(public_path('/image'), $image_name);
            $image_path = "/image/" . $image_name;
            $data['resturant_logo'] = $image_path;
        }
        $resturant->update($data);

        return redirect('/admin/resturant')->with('success', 'Resturant Owner Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resturant $resturant)
    {
        $resturant->user->delete();
        return redirect('/admin/resturant')->with('success', 'Resturant Owner Delete Successfully');
    }

    public function generate($id)
    {
        $resturant = Resturant::where('id', $id)->first();

        $urlWithParams = route('resturant',[$resturant->resturant_name,
           $resturant->id
        ]);

        $qrcode = QrCode::format('png')->size(300)->generate($urlWithParams);
        $response = response($qrcode)->header('Content-Type', 'image/png');
        $response->header('Content-Disposition', "attachment; filename=\"$resturant->resturant_name.png\"");
        return $response;
    }
}
