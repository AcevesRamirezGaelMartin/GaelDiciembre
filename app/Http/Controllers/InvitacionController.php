<?php

namespace App\Http\Controllers;

use App\Models\Invitacion;
use App\Http\Requests\StoreInvitacionRequest;
use App\Http\Requests\UpdateInvitacionRequest;

class InvitacionController extends Controller
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
     * @param  \App\Http\Requests\StoreInvitacionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInvitacionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invitacion  $invitacion
     * @return \Illuminate\Http\Response
     */
    public function show(Invitacion $invitacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invitacion  $invitacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Invitacion $invitacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInvitacionRequest  $request
     * @param  \App\Models\Invitacion  $invitacion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInvitacionRequest $request, Invitacion $invitacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invitacion  $invitacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invitacion $invitacion)
    {
        //
    }
}
