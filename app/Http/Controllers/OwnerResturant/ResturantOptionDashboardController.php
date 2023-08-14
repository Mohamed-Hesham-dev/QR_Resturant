<?php

namespace App\Http\Controllers\OwnerResturant;

use App\Http\Controllers\Controller;
use App\Models\ResturantOptionDashboard;
use App\Models\ResturantValueDashboard;
use Illuminate\Http\Request;

class ResturantOptionDashboardController extends Controller
{
    public function index()
    {
        $all_poptions = ResturantOptionDashboard::get();
        return view('DashboardOwnerResturant.menu.option.index', compact('all_poptions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('DashboardOwnerResturant.menu.option.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
        $data = [
            'option_name' => $request->option_name,
        ];
        $filterData = collect($data)
        ->filter(function ($item) {
            if (!is_array($item)) {
                return $item;
            }
        })
        ->toArray();
        $data = ResturantOptionDashboard::create($filterData);
          if ($request->values) {
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
