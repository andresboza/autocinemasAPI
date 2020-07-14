<?php

namespace App\Http\Controllers;

use App\Cartelera;
use Illuminate\Http\Request;

class CarteleraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $carteleras = Cartelera::where([['disponible', true], ['visible', true]])->orderBy('fecha', 'asc')->get();
            $response = $carteleras;
            return response()->json($response, 200);
        } catch (Exception $ex) {
            return response()->json($ex->getMessage(), 422);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        try {
            $carteleras = Cartelera::orderBy('fecha', 'asc')->with('ubicacion')->get();
            $response = $carteleras;
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
     * @param  \App\Cartelera  $cartelera
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $carteleras = Cartelera::where('id', $id)->with('ubicacion')->first();
            $response = $carteleras;
            return response()->json($response, 200);
        } catch (Exception $ex) {
            return response()->json($ex->getMessage(), 422);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cartelera  $cartelera
     * @return \Illuminate\Http\Response
     */
    public function edit(Cartelera $cartelera)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cartelera  $cartelera
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cartelera $cartelera)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cartelera  $cartelera
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cartelera $cartelera)
    {
        //
    }
}
