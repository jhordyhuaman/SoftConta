<?php

namespace SoftConta\Http\Controllers;

use Illuminate\Http\Request;

use SoftConta\Cliente;
use SoftConta\Compra;
use SoftConta\DetalleVenta;
use SoftConta\Http\Requests;
use SoftConta\Venta;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Venta.index');
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

        Cliente::create($request->all());
        return redirect('Venta');
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

    public function ventas(Request $request)
    {

        if($request->ajax()){
           $dventa = DetalleVenta::all();
        foreach ($dventa as $detv){
             $detv->cliente;
             $detv->venta;
             $detv->cliente->tipo_tabla;
             $detv->venta->documento_pago;
             $detv->venta->documento_pago->tipo_tabla;
          }
         }
        return response()->json($dventa);
    }
}
