<?php

namespace SoftConta;

use Illuminate\Database\Eloquent\Model;
class Venta extends Model
{
    protected $table = "ventas";
    protected $primaryKey = "id_venta";
    public $timestamps = false;

    //relaciones
    public function documento_pago()
    {
        return $this->belongsTo('SoftConta\DocumentoPago','docpago_id');
    }
    public function producto()
    {
        return $this->belongsTo('SoftConta\Producto','id_producto');
    }

    public function detalle_ventas()
    {
        return $this->hasMany('SoftConta\DetalleVenta','id_detalle_venta');
    }
    public function referencia_venta()
    {
        return $this->belongsTo('SoftConta\Venta','ReferenciaVent_id');
    }
    public function ventas()
    {
        return $this->hasMany('SoftConta\Venta','id_venta');
    }
}
