<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Hab_LocController extends Controller
{
    public function VistaHabLoc(){
        return view('Locaciones.habitacionesLoc');
    }
}
