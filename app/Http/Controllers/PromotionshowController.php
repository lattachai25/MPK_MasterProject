<?php

namespace App\Http\Controllers;

use App\Promotionshow;
use Illuminate\Http\Request;

class PromotionshowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Promotion_show');
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
     * @param  \App\Promotionshow  $promotionshow
     * @return \Illuminate\Http\Response
     */
    public function show(Promotionshow $promotionshow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Promotionshow  $promotionshow
     * @return \Illuminate\Http\Response
     */
    public function edit(Promotionshow $promotionshow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Promotionshow  $promotionshow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Promotionshow $promotionshow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Promotionshow  $promotionshow
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promotionshow $promotionshow)
    {
        //
    }
}
