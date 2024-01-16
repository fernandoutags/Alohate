<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio_cama extends Model
{
    use HasFactory;

    protected $table = 'servicio_cama';//llamado de tabla
    public $timestamps = false;
    protected $primaryKey = 'Id_servicio_cama';//se ubica cual es la primary key
    protected $fillable = array('Id_servicio_cama', 'Id_locacion', 
    'Id_habitacion', 'Id_departamento', 'Cama_individual', 'Cama_matrimonial',
    'Litera_individual', 'Litera_matrimonial', 'Litera_ind_mat', 'Cama_kingsize' );
}
