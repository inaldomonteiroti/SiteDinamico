<nav>
    <div class="nav-wrapper blue">
        <div class="container">
          <a href="#" class="brand-logo">SisAdmin</a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#">Início</a></li>
            <li><a target="_blanck" href="#">Site</a></li>
            @if(Auth::guest())
              <li><a href="#">Login</a></li>
            @else

            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">{{ Auth::user()->name }}
            <i class="material-icons right">arrow_drop_down</i></a></li>

            <ul id="dropdown1" class="dropdown-content">
              <li><a href="#!">{{ Auth::user()->name }}</a></li>
              <li><a href="#">Imóveis</a></li>
              <li><a href="#">Tipos</a></li>
              <li><a href="#">Cidades</a></li>
              <li><a href="#">Slides</a></li>
             
              <li><a href="#">Usuários</a></li>
              
             
              <li><a href="#">Papel</a></li>
              
              <li><a href="#">Páginas</a></li>
            </ul>

            <li><a href="#">Sair</a></li>
            @endif
          </ul>
          <ul class="side-nav" id="mobile-demo">
            <li><a href="#">Início</a></li>
            <li><a target="_blanck" href="#">Site</a></li>
            @if(Auth::guest())
              <li><a href="#">Login</a></li>
            @else
            <li><a href="#">{{ Auth::user()->name }}</a></li>
            <li><a href="#">Imóveis</a></li>
            <li><a href="#">Tipos</a></li>
            <li><a href="#">Cidades</a></li>
            <li><a href="#">Slides</a></li>
            <li><a href="#">Usuários</a></li>
            <li><a href="#">Papel</a></li>
              <li><a href="#">Páginas</a></li>
            <li><a href="#">Sair</a></li>
            @endif
          </ul>
          </div>
    </div>
</nav>