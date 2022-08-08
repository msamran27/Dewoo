<?php

namespace App\Http\Controllers;

use App\Models\RefundTicket;
use App\Http\Requests\StoreRefundTicketRequest;
use App\Http\Requests\UpdateRefundTicketRequest;

class RefundTicketController extends Controller
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
     * @param  \App\Http\Requests\StoreRefundTicketRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRefundTicketRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RefundTicket  $refundTicket
     * @return \Illuminate\Http\Response
     */
    public function show(RefundTicket $refundTicket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RefundTicket  $refundTicket
     * @return \Illuminate\Http\Response
     */
    public function edit(RefundTicket $refundTicket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRefundTicketRequest  $request
     * @param  \App\Models\RefundTicket  $refundTicket
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRefundTicketRequest $request, RefundTicket $refundTicket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RefundTicket  $refundTicket
     * @return \Illuminate\Http\Response
     */
    public function destroy(RefundTicket $refundTicket)
    {
        //
    }
}
