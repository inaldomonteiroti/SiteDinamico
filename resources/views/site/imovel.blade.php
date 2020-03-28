@extends('layouts.site')

@section('content')

<div class="container">
    <div class="row section">
        <h3 align="center">Imóvel</h3>
        <div class="divider"></div>
    </div>
    <div class="row section">
        <div class="col s12 m8">
           
            <div class="row">
                <div class="slider">
                    <ul class="slides">                   
                        <li>
                        <img class="responsive-img" src="{{asset('img/modelo_detalhe_1.jpg')}}">
                        <div class="caption center-align">
                        <h3>Titulo da imagem</h3>
                        <h5>Descrição da imagem</h5>				
                        </div>
                        </li>  
                        <li>
                        <img class="responsive-img" src="{{asset('img/modelo_detalhe_2.jpg')}}">
                        <div class="caption center-align">
                        <h3>Titulo da imagem</h3>
                        <h5>Descrição da imagem</h5>				
                        </div>
                        </li>   
                        <li>
                        <img class="responsive-img" src="{{asset('img/modelo_detalhe_3.jpg')}}">
                        <div class="caption center-align">
                        <h3>Titulo da imagem</h3>
                        <h5>Descrição da imagem</h5>				
                        </div>
                        </li>
                        <li>
                        <img class="responsive-img" src="{{asset('img/modelo_detalhe_4.jpg')}}">
                        <div class="caption center-align">
                        <h3>Titulo da imagem</h3>
                        <h5>Descrição da imagem</h5>				
                        </div>
                        </li>                  
                    </ul>
                </div>
            </div>
            <div class="row" align="center">
                <button onclick="sliderPrev()" class="btn blue">Anterior</button>
                <button onclick="sliderNext()" class="btn blue">Próxima</button>
            </div>
            
        </div>
        <div class="col s12 m4">
            <h4>Titulo</h4>
            <blockquote>
                Descrição
            </blockquote>
            <p><b>Código:</b> </p>
            <p><b>Status:</b></p>
            <p><b>Tipo:</b></p>
            <p><b>Dormitórios:</b></p>
            <p><b>Endereço:</b></p>
            <p><b>Cep:</b></p>
            <p><b>Cidade:</b></p>
            <p><b>Valor:</b> R$ </p>
            <p>
            <b>Compartilhar: </b>
       
            </p>
            <a class="btn blue " href="{{ route('site.contato') }}">Entrar em contato</a>
        </div>
    </div>
    <div class="row section">
        <div class="col s12 m8">
            <div class="video-container">
                
            </div>
        </div>
        <div class="col s12 m4">
            <h4>Detalhes:</h4>
            <p></p>
        </div>
    </div>
</div>
@endsection