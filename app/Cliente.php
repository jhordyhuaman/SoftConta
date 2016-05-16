<?php

namespace SoftConta;

use Illuminate\Database\Eloquent\Model;
class Cliente extends Model
{
    protected $table = "clientes";
    protected $primaryKey = "id_cliente";
    protected $fillable =['name','apellido','n_doc','razonsocial','direccion','telefono1','telefono2','estado','tipodoc_id'];
    public $timestamps = false;

    public function detalle_ventas()
    {return $this->hasMany('SoftConta\DetalleVenta','id_detalle_venta');}

    
    public function tipo_tabla()
    {return $this->belongsTo('SoftConta\TipoTabla','tipodoc_id');}
}
