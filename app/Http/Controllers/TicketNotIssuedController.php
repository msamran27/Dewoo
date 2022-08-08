<?php

namespace App\Http\Controllers;

use App\Models\ticket_not_issued;
use App\Http\Requests\Storeticket_not_issuedRequest;
use App\Http\Requests\Updateticket_not_issuedRequest;

class TicketNotIssuedController extends Controller
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
     * @param  \App\Http\Requests\Storeticket_not_issuedRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeticket_not_issuedRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ticket_not_issued  $ticket_not_issued
     * @return \Illuminate\Http\Response
     */
    public function show(ticket_not_issued $ticket_not_issued)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ticket_not_issued  $ticket_not_issued
     * @return \Illuminate\Http\Response
     */
    public function edit(ticket_not_issued $ticket_not_issued)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateticket_not_issuedRequest  $request
     * @param  \App\Models\ticket_not_issued  $ticket_not_issued
     * @return \Illuminate\Http\Response
     */
    public function update(Updateticket_not_issuedRequest $request, ticket_not_issued $ticket_not_issued)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ticket_not_issued  $ticket_not_issued
     * @return \Illuminate\Http\Response
     */
    public function destroy(ticket_not_issued $ticket_not_issued)
    {
        //
    }
}
