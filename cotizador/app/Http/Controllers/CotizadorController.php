<?php

namespace Cotizador\Http\Controllers;

use Illuminate\Http\Request;

use Cotizador\Http\Requests;
use Cotizador\Http\Controllers\Controller;
use Cotizador\Barreno;
use Cotizador\Medida;
use Cotizador\Cotizador;
class CotizadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cotizador.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        $items = Barreno::all(['id', 'tipo']);
        $medidas = Medida::all(['id', 'medida']);
        return view('cotizador.create',compact('items','medidas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $barreno_costo = 0;
       $barreno_id = $request['barreno_id'];
       $medida_id = $request['medida_id'];
       $barreno_costo = Barreno::find($barreno_id)->costo;
       $medida_costo = Medida::find($medida_id)->costo;
       $costo_final =  $barreno_costo + $medida_costo;
       return view('cotizador.mostrar',compact('costo_final'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
