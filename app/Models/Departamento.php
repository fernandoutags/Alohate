<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $table = 'departamento';//llamado de tabla
    public $timestamps = false;
    protected $primaryKey = 'Id_departamento';//se ubica cual es la primary key
    protected $fillable = array(
    'Id_departamento',
    'Id_locacion',
    'Id_estado_ocupacion', 
    'Id_colaborador',
    'Nombre_depa',
    'Capacidad_personas', 
    'Deposito_garantia_dep', 
    'Precio_noche', 
    'Precio_semana', 
    'Precio_catorcedias', 
    'Precio_mes', 
    'Habitaciones_total', 
    'Encargado',
    'Espacio_superficie',
    'Nota',
    'Descripcion',
    'Cobro_p_ext_mes_d',
    'Cobro_p_ext_catorcena_d',
    'Cobro_p_ext_noche_d',
    'Cobro_anticipo_mes_d',
    'Cobro_anticipo_catorcena_d',
    'Camas_juntas'
    );
}
