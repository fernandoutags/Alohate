<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fotos_lugares extends Model
{
    use HasFactory;

    protected $table = 'fotos_lugares';//llamado de tabla
    public $timestamps = false;
    protected $primaryKey = 'Id_foto_lugar';//se ubica cual es la primary key
    protected $fillable = array('Id_foto_lugar','Id_locacion', 'Id_habitacion', 'Id_departamento', 'Id_local', 'Ruta_lugar' );
}
