<?php

namespace SoftConta;

use Illuminate\Database\Eloquent\Model;
class Venta extends Model
{
    protected $table = "ventas";
    public $timestamps = false;

    //relaciones
    public function documento_pago()
    {
        return $this->belongsTo('SoftConta\DocumentoPago','id');
    }
    public function detalle_ventas()
    {
        return $this->hasMany('SoftConta\DetalleVenta','id');
    }
    public function referencia_venta()
    {
        return $this->belongsTo('SoftConta\Venta','id');
    }
    public function ventas()
    {
        return $this->hasMany('SoftConta\Venta','id');
    }
}
