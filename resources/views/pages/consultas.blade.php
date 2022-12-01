@extends('layouts.app')
@section('title', 'Consultas')

<div class="container-fluid">
    <div class="row p-5">
        <div class="col-md-5 ">
            <div class="leftSubHero">
                <h1 class="fw-bolder my-3">Marcação Online de Consultas</h1>
                <p class="text-muted">A <span class="cemiTextBlue fw-bolder">CEMI</span> responde às necessidades globais de saúde dos seus utentes disponibilizando consultas em mais de 8 especialidades médicas, bem como outras áreas clínicas.</p>
                <p class="text-muted">Conheça as consultas e outras áreas de intervenção disponíveis escolhendo a especialidade que pretende consultar e agende a sua consulta.</p>
            </div>
        </div>
        <div class="col-md-7 ">
            <div class="rightSubHero">
                <img src="{{ url('img/consultas/consultas.png') }}" class="img-fluid dropShadow" alt="">
            </div>
        </div>
        <div class="col-md-5">
            <div class="shadow my-1 rounded-4 heroSection p-3">
                <form action="" method="POST" class="">
                    <h2>Marcar Consulta <span class="fw-bolder">@if ($especialidade) "{{ $especialidade->nome }}"@endif</span></h2>
                    <div class="row">
                        <div class="mb-2 col12">
                            <label for="name" class="form-label ">Nome</label>
                            <input type="text" name="name" class="form-control rounded-2" id="" placeholder="Nome">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="contacto" class="form-label">Contacto</label>
                            <input type="tel" name="contacto" id="" class="form-control" placeholder="Contacto">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="consulta" class="form-label">Consulta</label>
                            <select name="consulta" id="" class="form-select">
                                @if ($especialidade)
                                    <option value="{{ $especialidade->nome }}">{{ $especialidade->nome }}</option>
                                @else
                                    @foreach ($especialidades as $especialidade)
                                    <option value="{{ $especialidade->nome }}">{{ $especialidade->nome }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        <div class="mb-2 col12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="" class="form-control rounded-2" placeholder="Email">
                        </div>

                        <div class="col-md-4 mb-2">
                            <label for="dia" class="form-label">Dia</label>
                            <select class="form-select" name="dia" id="dia">
                                @for ($i = 1; $i <= 31; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>

                        <div class="col-md-4 mb-2">
                            <label for="mes" class="form-label">Mês</label>
                            <input type="text" name="mes" id="" class="form-control" placeholder="Mês" value="{{ date('M') }}">
                        </div>

                        <div class="col-md-4 mb-2">
                            <label for="ano" class="form-label">Ano</label>
                            <input type="text" value="{{ date('Y') }}" name="ano" id="" class="form-control"  readonly="{{ date('Y') }}">
                        </div>

                        <div class="mb-2 col12 mt-3">
                            <input type="submit" value="Marcar Consulta" class=" fw-bold btn w-100 btn-outline-primary text-white cemiBlue hvr-wobble-vertical shadow " style="--bs-btn-color: #4e99b7; --bs-btn-border-color: #4e99b7; --bs-btn-hover-bg: #4e99b7; --bs-btn-hover-border-color: #4e99b7;">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@section('content')
@endsection