<?php

namespace App\Http\Controllers;

use App\Models\BusCancel;
use App\Http\Requests\StoreBusCancelRequest;
use App\Http\Requests\UpdateBusCancelRequest;
use GuzzleHttp\Psr7\Request;

class BusCancelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
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
     * @param  \App\Http\Requests\StoreBusCancelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBusCancelRequest $request)
    {
        //
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BusCancel  $busCancel
     * @return \Illuminate\Http\Response
     */
    public function show(BusCancel $busCancel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BusCancel  $busCancel
     * @return \Illuminate\Http\Response
     */
    public function edit(BusCancel $busCancel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBusCancelRequest  $request
     * @param  \App\Models\BusCancel  $busCancel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBusCancelRequest $request, BusCancel $busCancel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BusCancel  $busCancel
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusCancel $busCancel)
    {
        //
    }
}
