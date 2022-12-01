<?php

namespace App\Http\Controllers;

use App\Models\Especialidades;
use App\Models\Especialistas;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    protected $especialistas;
    protected $especialidades;

    public function __construct(Especialistas $especialistas, Especialidades $especialidades){
        $this->especialistas = $especialistas;
        $this->especialidades = $especialidades;
    }

    public function index(){
        $especialistas = $this->especialistas->limit(4)->get();
        $especialidades = $this->especialidades->limit(6)->get();
        return view('pages.index', compact('especialidades', 'especialistas'));
    }
}