<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lugares_reservados extends Model
{
    use HasFactory;

    protected $table = 'lugares_reservados';//llamado de tabla
    public $timestamps = false;
    protected $primaryKey = 'Id_lugares_reservados';//se ubica cual es la primary key
    protected $fillable = array('Id_lugares_reservados', 'Id_reservacion','Id_habitacion',
    'Id_locacion','Id_local', 'Id_departamento','Id_cliente', 'Id_estado_ocupacion'
   );
}
