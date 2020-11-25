<?php

namespace App\Http\Controllers;

use App\Bickforsellshow;
use Illuminate\Http\Request;

class BickforsellshowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Bikeforsell_show');
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
     * @param  \App\Bickforsellshow  $bickforsellshow
     * @return \Illuminate\Http\Response
     */
    public function show(Bickforsellshow $bickforsellshow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bickforsellshow  $bickforsellshow
     * @return \Illuminate\Http\Response
     */
    public function edit(Bickforsellshow $bickforsellshow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bickforsellshow  $bickforsellshow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bickforsellshow $bickforsellshow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bickforsellshow  $bickforsellshow
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bickforsellshow $bickforsellshow)
    {
        //
    }
}
