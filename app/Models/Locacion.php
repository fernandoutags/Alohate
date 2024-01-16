<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locacion extends Model
{
    use HasFactory;

    protected $table = 'locacion';//llamado de tabla
    public $timestamps = false;
    protected $primaryKey = 'Id_locacion';//se ubica cual es la primary key
    protected $fillable = array(
    'Id_locacion', 
    'Id_colaborador',
    'Id_estado_ocupacion',
    'Nombre_locacion',
    'Tipo_renta', 
    'Calle',
    'Numero_ext', 
    'Colonia', 
    'Ubi_google_maps', 
    'Numero_total_de_pisos',
    'Numero_total_habitaciones', 
    'Numero_total_depas', 
    'Numero_total_locales',
    'Capacidad_personas', 
    'Precio_noche', 
    'Precio_semana',
    'Precio_catorcedias',
    'Precio_mes', 
    'Deposito_garantia_casa', 
    'Uso_cocheras', 
    'Total_cocheras',
    'Encargado',
    'Espacio_superficie',
    'Zona_ciudad', 
    'Numero_habs_actuales', 
    'Numero_depas_actuales', 
    'Numero_locs_actuales',
    'Nota',
    'Descripcion',
    'Cobro_p_ext_mes_c',
    'Cobro_p_ext_catorcena_c',
    'Cobro_p_ext_noche_c',
    'Cobro_anticipo_mes_c',
    'Cobro_anticipo_catorcena_c',
    'Camas_juntas'
);
}

