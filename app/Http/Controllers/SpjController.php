<?php

namespace App\Http\Controllers;

use App\Models\Spj;
use Illuminate\Http\Request;

class SpjController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.spj', ['title' => 'Spj']);
    }

    public function admin()
    {
        return view('admin.spj', ['title' => 'Spj']);
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
     * @param  \App\Models\Spj  $spj
     * @return \Illuminate\Http\Response
     */
    public function show(Spj $spj)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Spj  $spj
     * @return \Illuminate\Http\Response
     */
    public function edit(Spj $spj)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Spj  $spj
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Spj $spj)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Spj  $spj
     * @return \Illuminate\Http\Response
     */
    public function destroy(Spj $spj)
    {
        //
    }
}
