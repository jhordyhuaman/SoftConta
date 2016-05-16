<?php

namespace SoftConta;

use Illuminate\Database\Eloquent\Model;
class TipoTabla extends Model
{
    protected $table = "tipo_tablas";
    public $timestamps = false;
    protected $primaryKey ="id_tipo_tabla";
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
        return $this->hasMany('SoftConta\DocumentoPago','id_documento_pago');
    }
    public function clientes()
    {
        return $this->hasMany('SoftConta\Cliente','id_cliente');
    }
    public function proveedor()
    {
        return $this->hasMany('SoftConta\Cliente','id_proveedor');
    }
}
