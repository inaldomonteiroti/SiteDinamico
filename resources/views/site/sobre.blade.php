@extends('layouts.site')

@section('content')

<div class="container">
    <div class="row section">
    	<h3 align="center">Sobre</h3>
    	<div class="divider"></div>
    </div>
    <div class="row section">
    	<div class="col s12 m6">
        <!-- @if(isset($pagina->mapa)) -->
            <div class="video-container">
                <!-- {!! $pagina->mapa !!} -->
            </div>

        <!-- @else -->
            <img class="responsive-img" src="">
        <!-- @endif -->

    		
    	</div>
    	<div class="col s12 m6">
    		<h4>Titulo</h4>
    		<blockquote>
    			Descrição
    		</blockquote>
    		    Texto
    	</div>
    </div>
</div>
@endsection