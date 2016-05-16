<?php

namespace SoftConta;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $table = "compras";
    protected $primaryKey = "id_compra";
    public $timestamps = false;
    protected $fillable = ['num_corela','tipo_adquisicion', 'base', 'igv','otros_trib', 'importe_total', 'otros','docpago_id','ReferenciaCom_id','id_producto'];
    //relacionado
    public function producto(){
        return $this->belongsTo('SoftConta\Producto','id_producto');
    }
    public function documento_pago()
    { return $this->belongsTo('SoftConta\DocumentoPago','docpago_id');}
    
    public function compra_referencia()
    {return $this->belongsTo('SoftConta\Compra','ReferenciaCom_id');}
    
    public function compras()
    {return $this->hasMany('SoftConta\Compra','id_compra');}

    public function detalle_compra()
    {return $this->hasMany('SoftConta\DetalleCompra','id_detalle_compra');}

}
