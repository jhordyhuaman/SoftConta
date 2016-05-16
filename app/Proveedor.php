<?php

namespace SoftConta;

use Illuminate\Database\Eloquent\Model;
class Proveedor extends Model
{
      protected $table = "proveedors";
      public $timestamps = false;
      protected $primaryKey ="id_proveedor";
      protected $fillable = ['numero_doc',
                            'nombre_razon_s',
                            'tipodoc_id',
                            'pais',
                            'estado',
                            'pais',
                            'provincia',
                            'direccion',
                            'numero_prov',
                            'telefono',
                            'cell',
                            'provincia',
                            'ciudad',
                            'cod_postal',
                            'direccion'];
      public function detalle_compras()
      {
            return $this->hasMany('SoftConta\DetalleCompra','id');
      }

      public function tipo_tabla()
      {
            return $this->belongsTo('SoftConta\DocumentoPago','tipodoc_id');
      }
}
