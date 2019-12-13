<?php

namespace App\Http\Controllers;

use App\intro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


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
        // $intros = intro::latest()->get();
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
        $validator = Validator::make($request->all(), [
            'heading' => 'required',
            'intro' => 'required',
            'icon' => 'required'
        ]);
        if ($validator->fails()) {
            return $validator->messages()->first();
        }

        $intro = new intro();
        $intro->heading = request('heading');
        $intro->intro = request('intro');
        $intro->icon = request('icon');
        $intro->save();
        return redirect('/');

        // Alternative
        // intro::create($validator->validate());
        // return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\intro  $intro
     * @return \Illuminate\Http\Response
     */
    public function show(intro $intro)
    {
        // parameter intro $intro do the following line => Dont have to write line but keep it for clearly explain
        $intro = intro::findOrFail($intro);
        return $intro;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\intro  $intro
     * @return \Illuminate\Http\Response
     */
    public function edit(intro $intro)
    {
        $intro = intro::findOrFail($intro);
        return $intro;
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
        $validator = Validator::make($request->all(), [
            'heading' => 'required',
            'intro' => 'required',
            'icon' => 'required'
        ]);
        if ($validator->fails()) {
            return $validator->messages()->first();
        }

        // $intro = intro::findOrFail($intro)->first();
        // $intro->heading = request('heading');
        // $intro->intro = request('intro');
        // $intro->icon = request('icon');
        // $intro->save();
        // return redirect('/');

        // Alternative
        $intro->update($validator->validate());
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\intro  $intro
     * @return \Illuminate\Http\Response
     */
    public function destroy(intro $intro)
    {
        $intro = intro::findOrFail($intro)->first()->delete();
        return redirect('/');
    }
}
