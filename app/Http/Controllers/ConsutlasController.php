<?php

namespace App\Http\Controllers;

use App\Models\Especialidades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ConsutlasController extends Controller
{
    //
    protected $especialidades;
    protected $moth = [
        '1' => 'Janeiro',
        '2' => 'Fevereiro',
        '3' => 'Março',
        '4' => 'Abril',
        '5' => 'Maio',
        '6' => 'Junho',
        '7' => 'Julho',
        '8' => 'Agosto',
        '9' => 'Setembro',
        '10' => 'Outubro',
        '11' => 'Novembro',
        '12' => 'Dezembro',
    ];

    public function __construct(Especialidades $especialidades){
        $this->especialidades = $especialidades;
    }


    public function index($id){
        $especialidade = null;
        $especialidades =  null;
        $id = Crypt::decryptString($id);

        // 

        if($id == " "){
            $especialidades = $this->especialidades->get();
            return view('pages.consultas', compact('especialidades', 'especialidade'));
        }
        if($especialidade = $this->especialidades->find($id))
            return view('pages.consultas', compact('especialidade', 'especialidades' ));    
        return redirect()->back();
    }
}