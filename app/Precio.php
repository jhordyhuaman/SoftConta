<?php

namespace SoftConta;

use Illuminate\Database\Eloquent\Model;

class Precio extends Model
{
    protected $table = "precios";
    protected  $primaryKey ="id_precio";
    protected $fillable =['precio_compra','precio_venta','precio_normal','estado'];
    public $timestamps = false;

    public function precios()
    {
        return $this->hasMany('SoftConta\Producto','id_producto');
    }
}
