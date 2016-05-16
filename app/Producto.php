<?php

namespace SoftConta;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = "productos";
    protected  $primaryKey ="id_producto";
    protected $fillable=['nombre_prod',
                         'descripcion',
                         'id_precio',
                         'id_inventario',
                         'fecha_reg',
                         'fecha_vent',
                         'tipo_producto',// esto es para ver si el producto es de Compra o de Venta (c:compras / v:ventas)
                         'estado'];
    public $timestamps = false;

    public function inventario()
    {
        return $this->belongsTo('SoftConta\Inventario','id_inventario');
    }

    public function precio()
    {
        return $this->belongsTo('SoftConta\Precio','id_precio');
    }

    public function venta()
    {
        return $this->hasMany('SoftConta\Venta','id_venta');
    }
    public function compra()
    {
        return $this->hasMany('SoftConta\Compra','id_compra');
    }
    public function kardex()
    {
        return $this->hasMany('SoftConta\Kardex','id_kardex');
    }

}
