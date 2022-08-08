<?php

namespace App\Http\Controllers;

use App\Models\ServicesComplaint;
use App\Http\Requests\StoreServicesComplaintRequest;
use App\Http\Requests\UpdateServicesComplaintRequest;

class ServicesComplaintController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreServicesComplaintRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServicesComplaintRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServicesComplaint  $servicesComplaint
     * @return \Illuminate\Http\Response
     */
    public function show(ServicesComplaint $servicesComplaint)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServicesComplaint  $servicesComplaint
     * @return \Illuminate\Http\Response
     */
    public function edit(ServicesComplaint $servicesComplaint)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServicesComplaintRequest  $request
     * @param  \App\Models\ServicesComplaint  $servicesComplaint
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServicesComplaintRequest $request, ServicesComplaint $servicesComplaint)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServicesComplaint  $servicesComplaint
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServicesComplaint $servicesComplaint)
    {
        //
    }
}
