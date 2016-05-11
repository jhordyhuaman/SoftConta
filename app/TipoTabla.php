<?php

namespace SoftConta;

use Illuminate\Database\Eloquent\Model;
class TipoTabla extends Model
{
    protected $table = "tipo_tablas";
    public $timestamps = false;
    public static function tablas_opc($id){
        return TipoTabla::where('tipo_tab','=',$id)
            ->get();
    }
    public static function tablas_datos($id){
        return TipoTabla::where('tipo_tab','=',$id)
            ->get();
    }
    //relaciones
    public function documento_pagos()
    {
        return $this->hasMany('SoftConta\DocumentoPago','id');
    }
    public function clientes()
    {
        return $this->hasMany('SoftConta\Cliente','id');
    }
}
