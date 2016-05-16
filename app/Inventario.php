<?php

namespace SoftConta;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    protected $table = "inventario";
    protected  $primaryKey ="id_inventario";
    protected $fillable=['stock_actu',
                         'stock_min',
                         'id_categoria',
                         'stock_max'];
    public $timestamps = false;

    public function categoria()
    {

        return $this->belongsTo('SoftConta\Categoria','id_categoria');
    }

    public function producto()
    {
        return $this->hasMany('SoftConta\Producto','id_producto');
    }

}
