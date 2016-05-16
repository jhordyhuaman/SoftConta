<?php

namespace SoftConta;

use Illuminate\Database\Eloquent\Model;

class Kardex extends Model
{
    protected $table = "kardex";
    protected  $primaryKey ="id_kardex";
    protected $fillable =['fecha_reg',
                          'fecha_modi',
                          'id_producto',
                          'fecha_opera',
                          'pagos_id',
                          'numero_orden',
                          'operacion',
                          'num_operacion',
                          'tipo_doc',
                          'cantidad',
                          'saldo',
                          'tipo_operacion'];
    public $timestamps = false;

    public function producto()
    {
        return $this->belongsTo('SoftConta\Producto','id_producto');
    }

    public function doc_pago()
    {
        return $this->belongsTo('SoftConta\DocumentoPago','pagos_id');
    }
}
