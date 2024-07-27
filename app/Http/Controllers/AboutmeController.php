<?php

namespace App\Http\Controllers;

use App\Models\Aboutme;
use Illuminate\Http\Request;

class AboutmeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.modules.aboutme.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Aboutme::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aboutme  $aboutme
     * @return \Illuminate\Http\Response
     */
    public function show(Aboutme $aboutme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aboutme  $aboutme
     * @return \Illuminate\Http\Response
     */
    public function edit(Aboutme $aboutme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aboutme  $aboutme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aboutme $aboutme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aboutme  $aboutme
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aboutme $aboutme)
    {
        //
    }
}
