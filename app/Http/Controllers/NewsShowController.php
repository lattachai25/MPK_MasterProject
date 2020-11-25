<?php

namespace App\Http\Controllers;

use App\News_show;
use Illuminate\Http\Request;

class NewsShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('News_show');
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
     * @param  \App\News_show  $news_show
     * @return \Illuminate\Http\Response
     */
    public function show(News_show $news_show)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News_show  $news_show
     * @return \Illuminate\Http\Response
     */
    public function edit(News_show $news_show)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News_show  $news_show
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News_show $news_show)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News_show  $news_show
     * @return \Illuminate\Http\Response
     */
    public function destroy(News_show $news_show)
    {
        //
    }
}
