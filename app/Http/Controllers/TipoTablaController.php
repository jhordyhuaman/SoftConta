<?php

namespace SoftConta\Http\Controllers;

use Illuminate\Http\Request;

use SoftConta\Http\Requests,SoftConta\TipoTabla;

class TipoTablaController extends Controller
{
    
    public function TipoTabla(Request $request, $id)
    {
        if($request->ajax()){
            $tipotab = TipoTabla::where('tipo_tab','=',$id)->get();
            return response()->json($tipotab);
        }
    }
}
