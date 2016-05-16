<?php

namespace SoftConta;

use Illuminate\Database\Eloquent\Model;
class DetalleVenta extends Model
{
    protected $table = "detalle_ventas";
    protected  $primaryKey ="id_detalle_venta";
    protected $fillable = ['venta_id','cliente_id','fecha_emision','fecha_vencimiento'];
    public $timestamps = false;
    


    public function venta()
    {
        return $this->belongsTo('SoftConta\Venta','venta_id');
    }

    public function cliente()
    {
        return $this->belongsTo('SoftConta\Cliente','cliente_id');
    }
}
