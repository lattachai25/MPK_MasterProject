<?php

namespace App\Http\Controllers;

use App\Selectyoubikeshow;
use Illuminate\Http\Request;

class SelectyoubikeshowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Select_show');
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
     * @param  \App\Selectyoubikeshow  $selectyoubikeshow
     * @return \Illuminate\Http\Response
     */
    public function show(Selectyoubikeshow $selectyoubikeshow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Selectyoubikeshow  $selectyoubikeshow
     * @return \Illuminate\Http\Response
     */
    public function edit(Selectyoubikeshow $selectyoubikeshow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Selectyoubikeshow  $selectyoubikeshow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Selectyoubikeshow $selectyoubikeshow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Selectyoubikeshow  $selectyoubikeshow
     * @return \Illuminate\Http\Response
     */
    public function destroy(Selectyoubikeshow $selectyoubikeshow)
    {
        //
    }
}
