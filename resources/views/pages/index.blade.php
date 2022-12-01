@extends('layouts.app')
@section('title', 'Pagina Inicial')

@section('content')
<!-- Hero -->    
<div class="container-fluid">
  <img src="{{  url('./img/') }}" alt="">
</div>

      <div class="container-fluid p-4">

        <div class="shadow-lg rounded-4 p-4 mb-5">
          <h1 class="fw-bolder">Seja bem vindo à Clínica CEMI!</h1>
        </div>


        <div class="row g-0  shadow rounded-4 my-4  heroSection">
            <div class="col-md-8 p-3">
                <h5 class="fw-bold border-bottom  fs-2">Clínica <span class="cemiTextBlue">Cemi</span></h5>
                <p class=" my-4 text-muted">A Clínica Cemi é uma estrutura hospitalar que se apresenta no mercado angolano com o desígnio de alterar o paradigma da prestação de cuidados de saúde de uma forma muito consistente. A nossa política de qualidade assenta em 3 pilares fundamentais: <i class="fw-bold">Inovação, Eficiência e Competência. </i></p>
                <a href="{{ route('cemi') }}" class=" btn btn-outline-primary hvr-wobble-vertical shadow rounded-2 text-white cemiBlue " style="--bs-btn-color: #4e99b7; --bs-btn-border-color: #4e99b7; --bs-btn-hover-bg: #4e99b7; --bs-btn-hover-border-color: #4e99b7;"> Ver mais</a>
            </div>
        
            <div class="col-md-4 bannerImg">

            </div>
        </div>

        <div class="my-5 py-5 rounded-3 ">
            <div class="row  px-3 d-flex justify-content-center  ">
              <div class="col-md-4 leftSubHero">
                <h1 class="fw-bolder">As nossas Especialidades</h1>
                <p class="text-muted fs-5 my-5">A <span class="cemiTextBlue">CEMI</span> - Clínica Médica da Linha responde às necessidades globais de saúde dos seus utentes disponibilizando consultas em mais de 8 especialidades médicas, bem como outras áreas clínicas.</p>
                <div class="d-flex justify-content-left my-4">
                  <a href="{{ route('especialidades') }}" class=" btn btn-outline-primary hvr-wobble-vertical shadow rounded-2 cemiBlue text-white" style="--bs-btn-color: #4e99b7; --bs-btn-border-color: #4e99b7; --bs-btn-hover-bg: #4e99b7; --bs-btn-hover-border-color: #4e99b7;"> Ver Todas</a>
                </div> 
              </div>

              <div class="col-md-8 rightSubHero g-5" style="margin: 0">
                <div class="row my-3">
                  <div class="col-md-4 text-center hvr-float mb-5 shadow rounded-2">
                    <div class="card border-0  hvr-overline-from-center m-3" > 
                      <div class="p-2"><img src="{{ url('./img/especialidades/family.png') }}" class="rounded-circle i " alt=""  height="80" ></div>
                      <div class="card-body">
                        <h5 class=" card-title fw-bold">Medicina Familiar</h5>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 text-center hvr-float mb-5 shadow rounded-2">
                    <div class="card border-0 rounded-2 hvr-overline-from-center m-3 " > 
                      <div class="p-2"><img src="{{ url('./img/especialidades/health.png') }}" class="   "alt=""  height="80"></div>
                      <div class="card-body">
                        <h5 class=" card-title fw-bold">Nutrição</h5>
                      </div>

                    </div>
                  </div>

                  <div class="col-md-4 text-center hvr-float mb-5  shadow rounded-2 hvr-overline-from-center">
                    <div class="card border-0 rounded-2  m-3 " > 
                      <div class="p-2"><img src="{{ url('./img/especialidades/pediatrics.png') }}" class="   "alt=""  height="80"></div>
                      <div class="card-body">
                        <h5 class=" card-title fw-bold">Pediatria</h5>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 text-center hvr-float mb-5 shadow rounded-2 hvr-overline-from-center">
                    <div class="card border-0 rounded-2  m-3 " > 
                      <div class="p-2"><img src="{{ url('./img/especialidades/coronavirus.png') }}" class="   "alt=""  height="80"></div>
                      <div class="card-body">
                        <h5 class=" card-title fw-bold">Infexiologia</h5>
                      </div>

                    </div>
                  </div>

                  <div class="col-md-4 text-center hvr-float mb-5 shadow rounded-2 hvr-overline-from-center">
                    <div class="card border-0 rounded-2 m-3 " > 
                      <div class="p-2"><img src="{{ url('./img/especialidades/heart.png') }}" class=" d "alt="" height="80" ></div>
                      <div class="card-body">
                        <h5 class=" card-title fw-bold">Cardiologia</h5>
                      </div>

                    </div>
                  </div>

                  <div class="col-md-4 text-center hvr-float mb-5 shadow rounded-2 hvr-overline-from-center">
                    <div class="card border-0 rounded-2  m-3 " > 
                      <div class="p-2"><img src="{{ url('./img/especialidades/body-scan.png') }}" class=" d "alt="" height="80" ></div>
                      <div class="card-body">
                        <h5 class=" card-title fw-bold">Medicina Interna</h5>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>

    <div class=" p-5 mt-3 espSection bg-dark  text-white ">
       <div class="">
        <div class="mt-2">
            <div class=""><h1 class="fw-bold">Médicos e Especialistas da Clínica <span class="cemiTextBlue">Cemi</span></h1></div>
            <div class="row my-5">
              <div class="col-md-8 leftSubHero">
               <div class="row">
                  @foreach ($especialistas as $especialista)
                  <div class="col-md-6 hvr-wobble-vertical my-2">
                    <div class="card shadow rouned-4 bg-dark text-white " style="border: solid 3px #fff">
                      <div class="card-body text-center">
                        <h5 class="card-title cemiBlue text-white p-2 rounded-2"> <i class="fa fa-award"></i> {{ $especialista->nome }}</h5>
                        <p class=" text-center text-white">Especialista Em {{ $especialista->especialidade }}</p>
                      </div>
                    </div>
                  </div>
                  @endforeach
               </div>
              </div>

              <div class="col-md-4 especialist_section rounded-2 rightSubHero"></div>
            
            </div>
        </div>
        <div class="d-flex justify-content-start mt-5 foo ">
          <a href="#" class=" btn btn-outline-primary hvr-wobble-vertical shadow rounded-2 text-white cemiBlue" style="--bs-btn-color: #4e99b7; --bs-btn-border-color: #4e99b7; --bs-btn-hover-bg: #4e99b7; --bs-btn-hover-border-color: #4e99b7;"> Ver Todos</a>
        </div>
       </div>
    </div>
@endsection

