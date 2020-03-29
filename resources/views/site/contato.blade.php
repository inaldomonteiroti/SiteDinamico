@extends('layouts.site')

@section('content')



<div class="container">


    <div class="row section">
    	<h3 align="center">Contato</h3>
		
    	<div class="divider"></div>
    </div>
    <div class="row section">
	<div class="col s12 m6">
        @if(isset($pagina->mapa))
            <div class="video-container">
                {!! $pagina->mapa !!}
            </div>

        @else
            <img class="responsive-img" src="{{ asset($pagina->imagem) }}">
        @endif

    		
    	</div>
    	<div class="col s12 m5">
		@if(Session::has('mensagem'))
      <div class="container">
        <div class="row">
          <div class="card {{ Session::get('mensagem')['class'] }}">
            <div align="center" class="card-content">
              {{ Session::get('mensagem')['msg'] }}
            </div>
          </div>
        </div>
        
      </div>
    @endif 
            <h4>{{ $pagina->titulo }}</h4>
            <blockquote>
                {{ $pagina->descricao }}
            </blockquote>
    		<form class="col s12" action="{{ route('site.contato.enviar') }}" method="post">
                {{ csrf_field() }}
    			<div class="input-field">
    				<input type="text" name="nome" class="validate">
    				<label>Nome</label>
    			</div>
    			<div class="input-field">
    				<input type="text" name="email" class="validate">
    				<label>E-mail</label>
    			</div>
    			<div class="input-field">
    				<textarea name="mensagem" class="materialize-textarea"></textarea>
    				<label>Mensagem</label>
    			</div>
    			<button class="btn blue">Enviar</button>  			
    		</form>
    		
    	</div>
    </div>
</div>
@endsection