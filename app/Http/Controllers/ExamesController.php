<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamesController extends Controller
{
    //
    public function index(){
        return view('pages.exames');
    }
}
