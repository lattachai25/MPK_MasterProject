<?php

namespace App\Http\Controllers;

use App\Select_your_bike;
use Illuminate\Http\Request;

class SelectYourBikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Select_your_bike');
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
     * @param  \App\Select_your_bike  $select_your_bike
     * @return \Illuminate\Http\Response
     */
    public function show(Select_your_bike $select_your_bike)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Select_your_bike  $select_your_bike
     * @return \Illuminate\Http\Response
     */
    public function edit(Select_your_bike $select_your_bike)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Select_your_bike  $select_your_bike
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Select_your_bike $select_your_bike)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Select_your_bike  $select_your_bike
     * @return \Illuminate\Http\Response
     */
    public function destroy(Select_your_bike $select_your_bike)
    {
        //
    }
}
