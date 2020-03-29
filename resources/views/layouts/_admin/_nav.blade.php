
<nav>
    <div class="nav-wrapper blue">
        <div class="container">
        <a href="{{ route('admin.principal') }}" class="brand-logo">SisAdmins</a>
                <!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">

              <li><a href="{{route('admin.imoveis')}}">Imóveis</a></li>
              <li><a href="{{route('admin.tipos')}}">Tipos</a></li>
              <li><a href="{{route('admin.cidades')}}">Cidades</a></li>
              <li><a href="{{route('admin.slides')}}">Slides</a></li>
            
              <li><a href="{{route('admin.usuarios')}}">Usuários</a></li>
              
             
              <li><a href="{{route('admin.papel')}}">Papel</a></li>
              
              <li><a href="{{route('admin.paginas')}}">Páginas</a></li>
</ul>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

        <ul class="right hide-on-med-and-down">
            <li><a href="{{ route('admin.principal') }}">Início</a></li>
            <li><a target="_blanck" href="{{ route('site.home') }}">Frontend</a></li>
            @if(Auth::guest())
              <li><a href="{{ route('admin.login') }}">Login</a></li>
            @else

            <!-- Dropdown Trigger -->
     
            <ul id="dropdown1" class="dropdown-content">
             
            </ul>

            <li><a href="{{ route('admin.login.sair') }}">Sair</a></li>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
            @endif
            
          </ul>
  
          
          </div>
    </div>
</nav>

<ul class="sidenav" id="mobile-demo">
<li><a href="{{ route('admin.principal') }}">Início</a></li>
<li><a target="_blanck" href="{{ route('site.home') }}">Frontend</a></li>
<li><a href="{{ route('admin.login.sair') }}">Sair</a></li>
</ul>
