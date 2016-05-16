<?php

namespace SoftConta;

use Illuminate\Database\Eloquent\Model;
class DocumentoPago extends Model
{
    protected $table = "documento_pagos";
    public $timestamps = false;
    protected $primaryKey="id_documento_pago";
    protected $fillable = ['serie_codigo',
                            'año_emision',
                            'tipo_pago',// para ver si es pago es de conpra o venta (c:compra / v: venta)
                            'tipotabla_id',
                            'num_cpago',
                            'fecha_emi',
                            'fecha_ven'];

    public function tipo_tabla(){
        return $this->belongsTo('SoftConta\TipoTabla','tipotabla_id');
    }
    public function compras()
    {
        return $this->hasMany('SoftConta\Compra','id');
    }
    public function proveedores()
    {
        return $this->hasMany('SoftConta\Proveedor','id');
    }
    public function ventas()
    {
        return $this->hasMany('SoftConta\Venta','id');
    }
    public function clientes()
    {
        return $this->hasMany('SoftConta\Cliente','id');
    }

}
