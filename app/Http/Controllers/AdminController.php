<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function header_admin(){
        return view('vista_admin.index_admin');
    }
    
    public function registro_paciente_admin(){
        return view('vista_admin.registropaciente_admin');
    }

    public function añadir_paciente_admin(){
        return view('vista_admin.añadirpaciente');
    }
}
