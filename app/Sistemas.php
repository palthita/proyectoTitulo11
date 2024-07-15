<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sistemas extends Model
{
    protected $table='sistemas';
    protected $fillable = ['CODIGO_SISTEMA','NOMBRE','DESCRIPCION_SISTEMA','ESTADO_SISTEMA'];
}
