<?php

namespace SoftConta\Http\Controllers;

use Illuminate\Http\Request;

use SoftConta\Http\Requests;
use SoftConta\Proveedor;

class ProveedorController extends Controller
{
    /* buscar probeedor*/
    public function Buscar(Request $request,$b)
    {
        
        $bs =Proveedor::where('nombre_razon_s', 'LIKE', "%$b%");
            return response()->json($bs);

    }
}
