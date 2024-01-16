<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plantas_pisos extends Model
{
    use HasFactory;

    
    protected $table = 'plantas_pisos';//llamado de tabla
    public $timestamps = false;
    protected $primaryKey = 'Id_plantas';//se ubica cual es la primary key
    protected $fillable = array('Id_plantas', 'Id_habitacion','Id_departamento',
    'Id_local','Nombre_planta' 
   );
}
