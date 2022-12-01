<?php

namespace App\Http\Controllers;

use App\Models\Especialidades;
use Illuminate\Http\Request;

class EspecialidadesController extends Controller
{
    //
    protected $especialidades;

    public function __construct(Especialidades $especialidades){
        $this->especialidades = $especialidades;
        
    }

    public function index(){
        $especialidades = $this->especialidades->get();
        return view('pages.especialidades', compact('especialidades'));
    }
}
