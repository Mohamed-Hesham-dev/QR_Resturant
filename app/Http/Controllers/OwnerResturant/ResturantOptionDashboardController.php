<?php

namespace App\Http\Controllers\OwnerResturant;

use App\Http\Controllers\Controller;
use App\Models\Resturant;
use App\Models\ResturantOptionDashboard;
use App\Models\ResturantValueDashboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResturantOptionDashboardController extends Controller
{
    public function index()
    {
        $user=Auth::guard('owner')->user()->id;

        $resturantname=Resturant::where('user_id',$user)->first();
        $all_poptions = ResturantOptionDashboard::where('resturant_id',Auth::guard('owner')->user()->resturant->id)->get();
        return view('DashboardOwnerResturant.menu.option.index', compact('all_poptions','resturantname'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user=Auth::guard('owner')->user()->id;

        $resturantname=Resturant::where('user_id',$user)->first();
        return view('DashboardOwnerResturant.menu.option.create',compact('resturantname'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
        $data = [
            'option_name' => $request->option_name,
            'resturant_id'=>Auth::guard('owner')->user()->resturant->id,
        ];
        $filterData = collect($data)
        ->filter(function ($item) {
            if (!is_array($item)) {
                return $item;
            }
        })
        ->toArray();
        $data = ResturantOptionDashboard::create($filterData);
          if ($request->value) {
            $data->values()->createMany($request->value);
        }

        return redirect('/owner/resturantOptionDashboard')->with('success', 'Category Created Successfully');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(ResturantOptionDashboard $resturantOptionDashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ResturantOptionDashboard $resturantOptionDashboard)
    {
        return view('DashboardOwnerResturant.menu.option.edit', compact('resturantOptionDashboard'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ResturantOptionDashboard $resturantOptionDashboard)
    {
        $data = [
            'option_name' => $request->option_name,
            'resturant_id'=>Auth::guard('owner')->user()->resturant->id,
        ];
        $filterData = collect($data)
      ->filter(function ($item) {
          if (!is_array($item)) {
              return $item;
          }
      })
      ->toArray();
        $resturantOptionDashboard->update($filterData);

        if ($request->value) {
       
            ResturantValueDashboard::where('option_id',$resturantOptionDashboard->id)->delete();
            $resturantOptionDashboard->values()->createMany($request->value);
        }
        return redirect('/owner/resturantOptionDashboard')->with('success', 'Option Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ResturantOptionDashboard $resturantOptionDashboard)
    {
        $resturantOptionDashboard->values()->delete();
        $resturantOptionDashboard->forceDelete();
        return redirect('/owner/resturantOptionDashboard')->with('success', 'Option Delete Successfully');
    }

}
