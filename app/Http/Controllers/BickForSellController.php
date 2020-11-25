<?php

namespace App\Http\Controllers;

use App\Bick_for_sell;
use Illuminate\Http\Request;

class BickForSellController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Bike_for_sell');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bick_for_sell  $bick_for_sell
     * @return \Illuminate\Http\Response
     */
    public function show(Bick_for_sell $bick_for_sell)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bick_for_sell  $bick_for_sell
     * @return \Illuminate\Http\Response
     */
    public function edit(Bick_for_sell $bick_for_sell)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bick_for_sell  $bick_for_sell
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bick_for_sell $bick_for_sell)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bick_for_sell  $bick_for_sell
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bick_for_sell $bick_for_sell)
    {
        //
    }
}
