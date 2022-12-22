<nav class="navbar navbar-expand-lg navbar-dark cemiBlue fixed-top" >
    <div class="container-fluid">
      <a href="{{ route('pages.home') }}" class="navbar-brand"><img src="{{ url('./img/logo.png') }}"  alt="cemiLogo" class="img "></a> 
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_items" aria-controls="navbar_items" aria-expanded="false" aria-label="Toggle navigation">
        <i class="bi bi-menu-button-wide"></i>
      </button>

        <div class="collapse navbar-collapse justify-content-center shadow-lg rounded-4 text-white" >
           <ul class="navbar-nav text-white">
              <li class="nav-item"><a  href="{{ route('pages.home') }}"  class="nav-link  f_f hvr-underline-from-left text-white"><i class="fa-solid fa-house"></i> Início</a></li>
              <li class="nav-item"><a  href="{{ route('especialidades') }}"  class="nav-link f_f  hvr-underline-from-left text-white"><i class=" fa fa-award"></i> Especialidades</a></li>
              <li class="nav-item"><a  href="{{ route('consultas', ['id' => Crypt::encryptString(" ")]) }}"  class="nav-link f_f  hvr-underline-from-left text-white"><i class="fa-solid fa-clipboard-user"></i> Consultas</a></li>
              <li class="nav-item"><a  href="{{ route('exames') }}"  class="nav-link f_f  hvr-underline-from-left text-white"><i class="fa-solid fa-dna"></i> Exames</a></li>
              <li class="nav-item"><a  href="{{ route('cemi') }}"  class="nav-link f_f  hvr-underline-from-left text-white">Cemi</a></li>
          </ul>
        </div>

        <ul class="navbar-nav">   
          <li class="nav-item"><a href="test" class="nav-link f_f text-white"><i class="fa fa-map"></i> Ver Mapa</a></li>
        </ul>
      </div>
    </div>
  </nav>