<?php

namespace SoftConta;

use Illuminate\Database\Eloquent\Model;
class DetalleCompra extends Model
{
    protected $table = "detalle_compras";
    public $timestamps = false;
    protected $fillable = ['proveedor_id','compra_id'];

    public function proveedor()
    {
        return $this->belongsTo('SoftConta\Proveedor','proveedor_id');
    }
    public function compra()
    {
        return $this->belongsTo('SoftConta\Compra','compra_id');
    }
}
