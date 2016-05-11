<?php

namespace SoftConta;

use Illuminate\Database\Eloquent\Model;
class Proveedor extends Model
{
      protected $table = "proveedors";
      public $timestamps = false;
      protected $fillable = ['numero_doc','nombre_razon_s','tipodoc_id','pais','provincia','ciudad','cod_postal','direccion'];
      public function detalle_compras()
      {
            return $this->hasMany('SoftConta\DetalleCompra','id');
      }

      public function documento_pago()
      {
            return $this->belongsTo('SoftConta\DocumentoPago','id');
      }
}
