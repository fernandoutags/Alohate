<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;

    protected $table = 'habitacion';//llamado de tabla
    public $timestamps = false;
    protected $primaryKey = 'Id_habitacion';//se ubica cual es la primary key
    protected $fillable = array(
    'Id_habitacion', 
    'Id_locacion',
    'Id_estado_ocupacion', 
    'Id_colaborador',
    'Nombre_hab',
    'Capacidad_personas', 
    'Deposito_garantia_hab', 
    'Precio_noche', 
    'Precio_semana',
    'Precio_catorcedias', 
    'Precio_mes', 
    'Encargado', 
    'Espacio_superficie',
    'Nota',
    'Descripcion',
    'Cobro_p_ext_mes_h',
    'Cobro_p_ext_catorcena_h',
    'Cobro_p_ext_noche_h',
    'Cobro_anticipo_mes_h',
    'Cobro_anticipo_catorcena_h',
    'Camas_juntas'
    );
}
