<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model
{
    use HasFactory;

    protected $table = 'reservacion';//llamado de tabla
    public $timestamps = false;
    protected $primaryKey = 'Id_reservacion';//se ubica cual es la primary key
    protected $fillable = array(
    'Id_reservacion', 
    'Id_colaborador',  
    'Start_date',
    'End_date', 
    'Title',
    'Fecha_reservacion',
    'Numero_personas_extras', 
    'Foto_comprobante_anticipo', 
    'Fecha_pago_anticipo',
    'Foto_aviso_privacidad', 
    'Foto_reglamento',
    'Monto_uso_cochera', 
    'Metodo_pago_anticipo',
    'Espacios_cochera',
    'Monto_pagado_anticipo',
    'Total_de_personas',
    'Tipo_de_cobro',
    'Nota_pago_anticipo',
    'Registro_personas'
);



}
