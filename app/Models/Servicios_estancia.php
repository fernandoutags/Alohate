<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicios_estancia extends Model
{
    use HasFactory;

    protected $table = 'servicios_estancia';//llamado de tabla
    public $timestamps = false;
    protected $primaryKey = 'Id_servicios_estancia';//se ubica cual es la primary key
    protected $fillable = array('Id_servicios_estancia', 'Nombre_servicio', 'Seccion_servicio', 'Ruta_servicio');
}
