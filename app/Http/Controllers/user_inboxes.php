<?php

namespace App\Http\Controllers;

use App\Models\user_inboxes;
use Auth;
use Illuminate\Http\Request;

class user_inboxesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = user_inboxes::select("*")
            ->where("user_id", Auth::User()->id)
            ->orderBy('id', 'desc')
            ->paginate(5);
        return response()->json($data);
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
     * @param  \App\Models\userImbox  $userImbox
     * @return \Illuminate\Http\Response
     */
    public function show(user_inboxes $userImbox)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\userImbox  $userImbox
     * @return \Illuminate\Http\Response
     */
    public function edit(user_inboxes $userImbox)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\userImbox  $userImbox
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user_inboxes $userImbox)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\userImbox  $userImbox
     * @return \Illuminate\Http\Response
     */
    public function destroy(user_inboxes $userImbox)
    {
        //
    }
}
