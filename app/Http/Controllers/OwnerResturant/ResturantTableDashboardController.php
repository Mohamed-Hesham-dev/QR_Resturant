<?php

namespace App\Http\Controllers\OwnerResturant;

use App\Http\Controllers\Controller;
use App\Models\Resturant;
use App\Models\ResturantTableDashboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class ResturantTableDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::guard('owner')->user()->id;
        $resturantname = Resturant::where('user_id', $user)->first();

        $all_tables = ResturantTableDashboard::where('user_id', $user)->get();
        return view('DashboardOwnerResturant.table.index', compact('all_tables', 'resturantname'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::guard('owner')->user()->id;
        $resturantname = Resturant::where('user_id', $user)->first();

        return view('DashboardOwnerResturant.table.create', compact('resturantname'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
                'title' => 'required',
                'num_table' => 'required',
                'num_chairs' => 'required',
        ]);
       $data = [
            'is_active' => $request->boolean('is_active'),
            'title' => $request->title,
            'area' => $request->area,
            'num_table' => $request->num_table,
            'num_chairs' => $request->num_chairs,
            'user_id' => Auth::guard('owner')->user()->id,
            'resturant_id' => Auth::guard('owner')->user()->resturant->id,
        ];
        $data = ResturantTableDashboard::create($data);

        return redirect('/owner/resturantTableDashboard')->with('success', 'Table Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(ResturantTableDashboard $resturantTableDashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ResturantTableDashboard $resturantTableDashboard)
    {
        return view('DashboardOwnerResturant.table.edit', compact('resturantTableDashboard'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ResturantTableDashboard $resturantTableDashboard)
    {
        $request->validate([
            'title' => 'required',
  
            'num_table' => 'required',
            'num_chairs' => 'required',
    ]);
        $data = [
            'is_active' => $request->boolean('is_active'),
            'title' => $request->title,
            'area' => $request->area,
            'num_table' => $request->num_table,
            'num_chairs' => $request->num_chairs,
            'user_id' => Auth::guard('owner')->user()->id,
            'resturant_id' => Auth::guard('owner')->user()->resturant->id
        ];
        $resturantTableDashboard->update($data);


        return redirect('/owner/resturantTableDashboard')->with('success', 'Table Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ResturantTableDashboard $resturantTableDashboard)
    {
        $resturantTableDashboard->delete();
        return redirect('/owner/resturantTableDashboard')->with('success', 'Table Delete Successfully');
    }

    public function generate($id)
    {
        $table = ResturantTableDashboard::where('id', $id)->first();
        $resturant = Resturant::where('id',  $table->resturant_id)->first();
        $urlWithParams = route('scanQRCode', [
            'table_number' => $table->num_table,
            'restaurant_id' => $resturant->id,
        ]);
    
        $qrcode = QrCode::format('png')->size(300)->generate($urlWithParams);
        $response = response($qrcode)->header('Content-Type', 'image/png');
        $response->header('Content-Disposition', "attachment; filename=\"$table->title.png\"");
        return $response;
    }
}
