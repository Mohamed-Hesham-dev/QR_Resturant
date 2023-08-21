<?php

namespace App\Http\Controllers\OwnerResturant;

use App\Http\Controllers\Controller;
use App\Models\feedback;
use App\Models\Resturant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
 
        $resturant=Resturant::where('user_id',Auth::guard('owner')->user()->id)->first();
 
        $allfeedback=feedback::where('resturant_id',$resturant->id)->get();
        return view('DashboardOwnerResturant.feedback.index',compact('allfeedback','resturant'));
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(feedback $feedback)
    {
        $feedback->delete();
        return redirect('/owner/feedback')->with('success', 'feedback Delete Successfully');

    }
}
