<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado_ocupacion extends Model
{
    use HasFactory;

    protected $table = 'estado_ocupacion';
    public $timestamps = false;
    protected $primaryKey = 'Id_estado_ocupacion';
    protected $fillable = array('Id_estado_ocupacion','Nombre_estado');

}
