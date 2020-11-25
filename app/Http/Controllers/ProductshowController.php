<?php

namespace App\Http\Controllers;

use App\Productshow;
use Illuminate\Http\Request;

class ProductshowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Product_show');
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
     * @param  \App\Productshow  $productshow
     * @return \Illuminate\Http\Response
     */
    public function show(Productshow $productshow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Productshow  $productshow
     * @return \Illuminate\Http\Response
     */
    public function edit(Productshow $productshow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Productshow  $productshow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productshow $productshow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Productshow  $productshow
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productshow $productshow)
    {
        //
    }
}
