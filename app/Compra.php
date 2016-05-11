<?php

namespace SoftConta;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $table = "compras";
    public $timestamps = false;
    protected $fillable = ['num_corela','tipo_adquisicion', 'base', 'igv','otros_trib', 'importe_total', 'otros','docpago_id'];
    //relacionado
    public function proveedor(){
        return $this->belongsTo('SoftConta\DocumentoPago','id');
    }

    public function detalle_compras()
    {
        return $this->hasMany('SoftConta\DetalleCompra','id');
    }
    public function documento_pago()
    {
        return $this->belongsTo('SoftConta\DocumentoPago','docpago_id');
    }
    public function compra_referencia()
    {
        return $this->belongsTo('SoftConta\Compra','ReferenciaCom_id');
    }
    public function compras()
    {
        return $this->hasMany('SoftConta\Compra','id');
    }
}
