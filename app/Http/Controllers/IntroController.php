<?php

namespace App\Http\Controllers;

use App\intro;
use Illuminate\Http\Request;

class IntroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $intros = intro::all();
        return $intros;
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
     * @param  \App\intro  $intro
     * @return \Illuminate\Http\Response
     */
    public function show(intro $intro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\intro  $intro
     * @return \Illuminate\Http\Response
     */
    public function edit(intro $intro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\intro  $intro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, intro $intro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\intro  $intro
     * @return \Illuminate\Http\Response
     */
    public function destroy(intro $intro)
    {
        //
    }
}
