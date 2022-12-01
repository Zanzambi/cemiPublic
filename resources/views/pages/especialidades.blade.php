@extends('layouts.app')
@section('title', 'Especialidades')

@section('content')


<div class="container-fluid">
    <div class="row p-5 d-flex justify-content-between align-items-center">
        <div class="col-md-5 leftSubHero">
            <h1 class="fw-bolder my-3">Consultas e Especialidades</h1>
            <p class="text-muted">A <span class="cemiTextBlue fw-bolder">CEMI</span> responde às necessidades globais de saúde dos seus utentes disponibilizando consultas em mais de 8 especialidades médicas, bem como outras áreas clínicas.</p>
            <p class="text-muted">Conheça as consultas e outras áreas de intervenção disponíveis escolhendo a especialidade que pretende consultar e agende a sua consulta.</p>
        </div>

        <div class="col-md-7 rightSubHero">
            <img src="{{ url('img/especialidades/especialidades.png') }}" class="img-fluid" alt="">
        </div>

        <div class="row">
            @foreach ($especialidades as $especialidade)
            <div class="col-md-4">
                <div class="row my-3">
                    <div class="espSection col shadow rounded-4 hvr-overline-from-center d-flex justify-content-between align-items-center py-2 mx-1">
                        <h5 class="fw-bold" style="font-size: .8rem">{{ $especialidade->nome }}</h5>                
                        <a href="{{ route('consultas', ['id' => Crypt::encryptString($especialidade->id)]) }}" class="btn btn-outline-primary " style="--bs-btn-color: #4e99b7; --bs-btn-border-color: #4e99b7; --bs-btn-hover-bg: #4e99b7; --bs-btn-hover-border-color: #4e99b7;"> <i class="fa-solid fa-clipboard-user"></i>  Marcar Consulta</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection