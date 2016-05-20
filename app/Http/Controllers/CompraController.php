<?php

namespace SoftConta\Http\Controllers;

use Illuminate\Http\Request;
use SoftConta\Compra, SoftConta\DetalleCompra, SoftConta\Proveedor;
use SoftConta\DocumentoPago;
use SoftConta\Http\Requests;
use SoftConta\Inventario;
use SoftConta\Precio;
use SoftConta\Producto;

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
        Precio::create($request->all());
        $p = Precio::groupBy('id_precio')->orderBy('id_precio','asc')->get()->last();
        Inventario::create($request->all());
        $i = Inventario::groupBy('id_inventario')->orderBy('id_inventario','asc')->get()->last();
        $request->merge(['id_precio'=>$p->id_precio,'id_inventario'=>$i->id_inventario]);
        Producto::create($request->all());
        $pr = Producto::groupBy('id_producto')->orderBy('id_producto','asc')->get()->last();
        DocumentoPago::create($request->all());
        $dc = DocumentoPago::groupBy('id_documento_pago')->orderBy('id_documento_pago', 'asc')->get()->last();
        echo json_encode($pr->id_producto);
        $request->merge(['docpago_id' => $dc->id_documento_pago,'id_producto'=>$pr->id_producto]);
        echo json_encode($request->all());
        Compra::create($request->all());
        $com = Compra::groupBy('id_compra')->orderBy('id_compra', 'asc')->get()->last();
        Proveedor::create($request->all());
        $prov = Proveedor::groupBy('id_proveedor')->orderBy('id_proveedor', 'asc')->get()->last();
        DetalleCompra::create(['proveedor_id' => $prov->id_proveedor,
            'compra_id' => $com->id_compra,]);

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
