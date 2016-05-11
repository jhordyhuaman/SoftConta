<?php

namespace SoftConta\Http\Controllers;

use Illuminate\Http\Request;
use SoftConta\Compra, SoftConta\DetalleCompra, SoftConta\Proveedor;
use SoftConta\DocumentoPago;
use SoftConta\Http\Requests;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compras = DetalleCompra::all();
        return view('Compra.index', ['compras' => $compras]);
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        // insertamos en la tabla documentos
        DocumentoPago::create($request->all());
        // sacamos el id
        $dc = DocumentoPago::groupBy('id')->orderBy('id', 'asc')->get()->last();
        // añadimos al request
        $request->merge(['docpago_id' => $dc->id]);
        // insertamos en compras
        Compra::create($request->all());
        $com = Compra::groupBy('id')->orderBy('id', 'asc')->get()->last();
        Proveedor::create($request->all());
        $prov = Proveedor::groupBy('id')->orderBy('id', 'asc')->get()->last();
        DetalleCompra::create(['proveedor_id' => $prov->id,
            'compra_id' => $com->id,]);

        return redirect('Compra');  //*/

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
