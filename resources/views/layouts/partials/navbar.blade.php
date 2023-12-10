<nav id="barra" class="navbar navbar-expand-lg navbar-light ">
    <div id="barra2"  class="container-fluid">
      <a id="barra2" class="navbar-brand" href="#">Laravel </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
        <form class="d-flex">
          

          <ul class="navbar-nav me-5 mb-2 mb-lg-0">
            <script type="module" src="https://cdn.jsdelivr.net/npm/ldrs/dist/auto/grid.js"></script>

            
            
            @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true" v-pre>
                <i id="iconuser" class="bi bi-person-square"></i> {{auth()->user()->name ?? auth()->user()->username }} {{auth()->user()->username}} 
              </a> 
              
            
              <ul id="logout" class="dropdown-menu" aria-labelledby="navbarDropdown">
                
                <li><hr class="dropdown-divider"></li>
                <li><a id="logout" class="dropdown-item" href="/home" >Menu Principal</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a id="logout" class="dropdown-item" href="/logout">Salir</a></li>
                
              </ul>

              





            </li>
            @endauth
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
            </li>
          </ul>
          <script type="module" src="https://cdn.jsdelivr.net/npm/ldrs/dist/auto/grid.js"></script>
        </form>
      </div>
    </div>
  </nav>