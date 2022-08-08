<?php

namespace App\Http\Controllers;

use App\Models\IdCard;
use App\Http\Requests\StoreIdCardRequest;
use App\Http\Requests\UpdateIdCardRequest;
use Illuminate\Http\Request;

class IdCardController extends Controller
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
    public function create(Request $request)
    {
     
        IdCard::create($request->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreIdCardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIdCardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IdCard  $idCard
     * @return \Illuminate\Http\Response
     */
    public function show(IdCard $idCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IdCard  $idCard
     * @return \Illuminate\Http\Response
     */
    public function edit(IdCard $idCard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIdCardRequest  $request
     * @param  \App\Models\IdCard  $idCard
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIdCardRequest $request, IdCard $idCard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IdCard  $idCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(IdCard $idCard)
    {
        //
    }
}
