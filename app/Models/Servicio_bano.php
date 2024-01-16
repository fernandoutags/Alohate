<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio_bano extends Model
{
    use HasFactory;

    protected $table = 'servicio_bano';//llamado de tabla
    public $timestamps = false;
    protected $primaryKey = 'Id_servicio_bano';//se ubica cual es la primary key
    protected $fillable = array('Id_servicio_bano', 'Id_locacion',  
    'Id_habitacion', 'Id_departamento', 'Id_local', 'Bano_compartido', 
    'Bano_medio', 'Bano_completo', 'Bano_completo_RL');
}
