<?php

namespace App\Http\Controllers\OwnerResturant;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Resturant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class ReservationController extends Controller
{
    public function index(){
        $user=Auth::guard('owner')->user()->id;
        $resturant=Resturant::where('user_id',$user)->first();
        $reservation=Reservation::where('resturant_id',$resturant->id)->get();
       return(view('DashboardOwnerResturant.reservation.index',compact('reservation','resturant')));

    }
    public function destroy(Reservation $Reservation){
    dd($Reservation);
            $Reservation->delete();
            return redirect('/Reservation')->with('success', 'reservation Delete Successfully');
    
    }
}
