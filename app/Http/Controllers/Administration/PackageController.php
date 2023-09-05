<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_packages = Package::get();
        return view('Dashboard.Package.index',compact('all_packages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.Package.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'price'=>'required',
            'description'=>'required',
        ]);
        $data=[
            'is_active'=>$request->boolean('is_active'),
            'title'=>$request->title,
            'price'=>$request->price,
            'description'=>$request->description,
            ];
        $data=Package::create($data);
        
        return redirect('/admin/package')->with('success','Package Created Successfully');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Package $package)
    {
        return view('Dashboard.Package.edit',compact('package'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Package $package)
    {
        $request->validate([
            'title'=>'required',
            'price'=>'required',
            'description'=>'required',
        ]);
        $data=[
            'is_active'=>$request->boolean('is_active'),
            'title'=>$request->title,
            'price'=>$request->price,
            'description'=>$request->description,
            ];
       
        $package->update($data);
      
        return redirect('/admin/package')->with('success','Package Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Package $package)
    {
        $package->delete();
        return redirect('/admin/package')->with('success','Package Delete Successfully');
    }
}
