<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    use HasFactory;

    protected $table = 'local';//llamado de tabla
    public $timestamps = false;
    protected $primaryKey = 'Id_local';//se ubica cual es la primary key
    protected $fillable = array('Id_local', 'Id_colaborador','Id_estado_ocupacion',
    'Id_locacion','Nombre_local', 'Precio_renta','Espacio_superficie', 
    'Encargado','Nota','Descripcion', 'Deposito_garantia_local'
   );
}
