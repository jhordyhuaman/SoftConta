<?php

namespace SoftConta;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = "categoria";
    protected  $primaryKey ="id_categoria";
    protected $fillable =['nombre_cat','descripcion'];
    public $timestamps = false;

    public function inventario()
    {
        return $this->hasMany('SoftConta\Inventario','id_inventario');
    }
}
