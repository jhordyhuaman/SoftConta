<?php

namespace SoftConta;

use Illuminate\Database\Eloquent\Model;
class DetalleCompra extends Model
{
    protected $table = "detalle_compras";
    protected $primaryKey = "id_detalle_compra";
    public $timestamps = false;
    protected $fillable = ['proveedor_id','compra_id','fecha_emision','fecha_vencimiento'];

    public function proveedor()
    {
        return $this->belongsTo('SoftConta\Proveedor','proveedor_id');
    }
    public function compra()
    {
        return $this->belongsTo('SoftConta\Compra','compra_id');
    }
}
