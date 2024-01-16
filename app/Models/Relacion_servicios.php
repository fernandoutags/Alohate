<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relacion_servicios extends Model
{
    use HasFactory;

    protected $table = 'relacion_servicios';//llamado de tabla
    public $timestamps = false;
    protected $fillable = array('Id_plantas', 'Id_locacion', 'Id_habitacion', 'Id_departamento', 'Id_local', 'Id_servicios_estancia' );
}
