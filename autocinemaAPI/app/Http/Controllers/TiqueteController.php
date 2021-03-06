<?php

namespace App\Http\Controllers;

use App\Tiquete;
use Illuminate\Http\Request;

class TiqueteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $tiquetes = Tiquete::orderBy('nombre', 'asc')->get();
            $response = $tiquetes;
            return response()->json($response, 200);
        } catch (Exception $ex) {
            return response()->json($ex->getMessage(), 422);
        }
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
     * @param  \App\Tiquete  $tiquete
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $tiquetes = Tiquete::where('id', $id)->first();
            $response = $tiquetes;
            return response()->json($response, 200);
        } catch (Exception $ex) {
            return response()->json($ex->getMessage(), 422);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tiquete  $tiquete
     * @return \Illuminate\Http\Response
     */
    public function edit(Tiquete $tiquete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tiquete  $tiquete
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tiquete $tiquete)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tiquete  $tiquete
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tiquete $tiquete)
    {
        //
    }
}
