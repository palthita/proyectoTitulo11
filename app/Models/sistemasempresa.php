<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sistemasempresa extends Model
{
    protected $table='sistemasempresa';
    protected $fillable = ['idEmpresa','idSistema','estado'];

}
