<?php

namespace SoftConta;

use Illuminate\Database\Eloquent\Model;
class Cliente extends Model
{
    protected $table = "clientes";
    protected $fillable =['name','apellido','n_doc','razonsocial','direccion','telefono1','telefono2','estado','tipotabla_id'];
    public $timestamps = false;

    public function detalle_ventas()
    {
        return $this->hasMany('SoftConta\DetalleVenta','id');
    }
    public function documento_pago()
    {
        return $this->belongsTo('SoftConta\DocumentoPago','id');
    }
    public function tipo_tabla()
    {
        return $this->belongsTo('SoftConta\TipoTabla','id');
    }
}
