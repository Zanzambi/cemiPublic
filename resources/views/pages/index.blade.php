@extends('layouts.app')
@section('title', 'Pagina Inicial')

@section('content')
<!-- Hero -->    

      <div class="p-0">
        <div class="" style=" height: 50vh;">
          <img class="img-fluid m-0" src="{{ url('../img/banner.jpg') }}" alt="" srcset="">
        </div>
        <div class="container-fluid">
          <div class="row my-5 py-5 d-flex justify-content-center align-items-center">
            
                      <div class="card heroSection border-0 m-2  col-sm-6 col-md-3 text-center hvr-float  shadow rounded-2 bg-white hvr-overline-from-center" > 
                        <div class="p-2"><img src="{{ url('./img/especialidades/family.png') }}" class="rounded-circle i " alt=""  height="80" ></div>
                        <div class="card-body">
                          <a href="" style="text-decoration: none;" class="text-dark"   data-bs-toggle="modal" data-bs-target="#MedicinaFamiliar">
                          <h5 class=" card-title fw-bold">Medicina Familiar</h5></a>
                        </div>
                      </div>
                    
                      <div class="card heroSection border-0 m-2  col-sm-6 col-md-3 text-center hvr-float  shadow rounded-2 bg-white hvr-overline-from-center" > 
                        <div class="p-2"><img src="{{ url('./img/especialidades/health.png') }}" class="   "alt=""  height="80"></div>
                        <div class="card-body">
                          <a href="" style="text-decoration: none;" class="text-dark"   data-bs-toggle="modal" data-bs-target="#Nutricao">
                          <h5 class=" card-title fw-bold">Nutrição</h5></a>
                        </div>
                      </div>

                      <div class="card heroSection border-0 m-2  col-sm-6 col-md-3 text-center hvr-float  shadow rounded-2 bg-white hvr-overline-from-center" > 
                        <div class="p-2"><img src="{{ url('./img/especialidades/pediatrics.png') }}" class="   "alt=""  height="80"></div>
                        <div class="card-body">
                          <a href="" style="text-decoration: none;" class="text-dark"   data-bs-toggle="modal" data-bs-target="#Pediatria">
                          <h5 class=" card-title fw-bold">Pediatria</h5></a>
                        </div>
                      </div>

                      <div class="card heroSection border-0 m-2  col-sm-6 col-md-3 text-center hvr-float  shadow rounded-2 bg-white hvr-overline-from-center" > 
                        <div class="p-2"><img src="{{ url('./img/especialidades/coronavirus.png') }}" class="   "alt=""  height="80"></div>
                        <div class="card-body">
                          <a href="" style="text-decoration: none;" class="text-dark"   data-bs-toggle="modal" data-bs-target="#Infexiologia">
                          <h5 class=" card-title fw-bold">Infexiologia</h5></a>
                        </div>
                      </div>
                      <div class="card heroSection border-0 m-2  col-sm-6 col-md-3 text-center hvr-float  shadow rounded-2 bg-white hvr-overline-from-center" > 
                        <div class="p-2"><img src="{{ url('./img/especialidades/heart.png') }}" class=" d "alt="" height="80" ></div>
                        <div class="card-body">
                          <a href="" style="text-decoration: none;" class="text-dark"   data-bs-toggle="modal" data-bs-target="#Cardiologia">
                          <h5 class=" card-title fw-bold">Cardiologia</h5></a>
                        </div>
                      </div>
                        <div class="card heroSection border-0 m-2  col-sm-6 col-md-3 text-center hvr-float  shadow rounded-2 bg-white hvr-overline-from-center" > 
                          <div class="p-2"><img src="{{ url('./img/especialidades/body-scan.png') }}" class=" d "alt="cemi_bunner" height="80" ></div>
                        <div class="card-body">
                          <a href="" style="text-decoration: none;" class="text-dark"   data-bs-toggle="modal" data-bs-target="#MedicinaInterna">
                          <h5 class=" card-title fw-bold">Medicina Interna</h5></a>
                        </div>
                      </div>
                      <div class="d-flex justify-content-center align-items-center mt-4 ">
                        <a href="{{ route('especialidades') }}"  class="btn btn-outline-primary hvr-wobble-vertical shadow rounded-circle text-white cemiBlue" style="--bs-btn-color: #4e99b7; --bs-btn-border-color: #4e99b7; --bs-btn-hover-bg: #4e99b7; --bs-btn-hover-border-color: #4e99b7;"><i class="fa-solid fa-arrow-right" style="font-size: 2rem"></i></a>
                      </div>
              </div>
              <div class="container-fluid mb-5">
                <div class="row d-flex justify-content-center aligns-items-center g-4">
                  <div class="col-md-8">
                    <h1 class="fw-bolder"  style="margin-left: 5%">Quem somos</h1>
                    <h1 class="fs-4 leftSubHero text-muted" style="margin-left: 5%">A <span  class="cemiTextBlue"> CEMI </span> é um espaço que intenciona promover alta qualidade no atendimento ao paciente,
                      assumindo-se desde logo como unidade de cuidados de saúde ambulatórios.</h1>

                      <h1 class="fs-4 leftSubHero text-muted " style="margin-left: 5%">A clínica é composta de várias especialidades, que propõe um conceito de saúde, através de ações preventivas, desenvolvendo um trabalho sério de qualidade de vida matendo a satisfação e confiança do paciente</h1>
                  </div>
                  <div class="col-md-4" >
                    <div class="d-flex justify-content-center align-items-center">
                      <img src="{{ url('../img/third.png') }}" class="img-fluid shadow-lg rounded-2 rightSubHero" alt="ConsultorioCemi" height="50">
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

    <!-- Modal dos especialistas -->
      <div class="modal fade" id="MedicinaFamiliar" tabindex="-1" aria-labelledby="MedicinaFamiliarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5 fw-bolder" id="MedicinaFamiliarLabel">Medicina Familiar</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">Short introduction about...</div>
            <div class="modal-footer">
              <button type="button" class="btn " data-bs-dismiss="modal" style="background: whitesmoke; --bs-btn-hover-bg: #ccc; ">Fechar</button>
              <a href="" class="btn btn-outline-primary hvr-wobble-vertical shadow  text-white cemiBlue" style="--bs-btn-color: #4e99b7; --bs-btn-border-color: #4e99b7; --bs-btn-hover-bg: #4e99b7; --bs-btn-hover-border-color: #4e99b7;">Marcar Consulta</a>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="Nutricao" tabindex="-1" aria-labelledby="NutricaoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5 fw-bolder" id="NutricaoLabel">Nutrição</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">Short introduction about...</div>
            <div class="modal-footer">
              <button type="button" class="btn " data-bs-dismiss="modal" style="background: whitesmoke; --bs-btn-hover-bg: #ccc; ">Fechar</button>
              <a href="" class="btn btn-outline-primary hvr-wobble-vertical shadow  text-white cemiBlue" style="--bs-btn-color: #4e99b7; --bs-btn-border-color: #4e99b7; --bs-btn-hover-bg: #4e99b7; --bs-btn-hover-border-color: #4e99b7;">Marcar Consulta</a>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="Pediatria" tabindex="-1" aria-labelledby="PediatriaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5 fw-bolder" id="PediatriaLabel">Pediatria</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">Short introduction about...</div>
            <div class="modal-footer">
              <button type="button" class="btn " data-bs-dismiss="modal" style="background: whitesmoke; --bs-btn-hover-bg: #ccc; ">Fechar</button>
              <a href="" class="btn btn-outline-primary hvr-wobble-vertical shadow  text-white cemiBlue" style="--bs-btn-color: #4e99b7; --bs-btn-border-color: #4e99b7; --bs-btn-hover-bg: #4e99b7; --bs-btn-hover-border-color: #4e99b7;">Marcar Consulta</a>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="Cardiologia" tabindex="-1" aria-labelledby="CardiologiaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5 fw-bolder" id="CardiologiaLabel">Cardiologia</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">Short introduction about...</div>
            <div class="modal-footer">
              <button type="button" class="btn " data-bs-dismiss="modal" style="background: whitesmoke; --bs-btn-hover-bg: #ccc; ">Fechar</button>
              <a href="" class="btn btn-outline-primary hvr-wobble-vertical shadow  text-white cemiBlue" style="--bs-btn-color: #4e99b7; --bs-btn-border-color: #4e99b7; --bs-btn-hover-bg: #4e99b7; --bs-btn-hover-border-color: #4e99b7;">Marcar Consulta</a>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="Infexiologia" tabindex="-1" aria-labelledby="InfexciologiaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5 fw-bolder" id="InfexciologiaLabel">Infexciologia</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">Short introduction about...</div>
            <div class="modal-footer">
              <button type="button" class="btn " data-bs-dismiss="modal" style="background: whitesmoke; --bs-btn-hover-bg: #ccc; ">Fechar</button>
              <a href="" class="btn btn-outline-primary hvr-wobble-vertical shadow  text-white cemiBlue" style="--bs-btn-color: #4e99b7; --bs-btn-border-color: #4e99b7; --bs-btn-hover-bg: #4e99b7; --bs-btn-hover-border-color: #4e99b7;">Marcar Consulta</a>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="MedicinaInterna" tabindex="-1" aria-labelledby="MedicinaInternaLAbel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5 fw-bolder" id="MedicinaInternaLAbel">Medicina Interna</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">Short introduction about...</div>
            <div class="modal-footer">
              <button type="button" class="btn " data-bs-dismiss="modal" style="background: whitesmoke; --bs-btn-hover-bg: #ccc; ">Fechar</button>
              <a href="" class="btn btn-outline-primary hvr-wobble-vertical shadow  text-white cemiBlue" style="--bs-btn-color: #4e99b7; --bs-btn-border-color: #4e99b7; --bs-btn-hover-bg: #4e99b7; --bs-btn-hover-border-color: #4e99b7;">Marcar Consulta
              </a>
            </div>
          </div>
        </div>
      </div>
@endsection