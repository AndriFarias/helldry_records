@extends('tema.site.index')

@section('titulo','Lista de Grupos')

@section('conteudo')
<div class="container mt-3">
    <div class="row">
        <div class="col-sm-10 mt-4 mb-3">
            <h1 class="display-5 d-flex align-items-center"> 
                <img src="{{ asset('images/music.png') }}" class="rounded mx-3" alt="music" height="45px" width="45px"> <!-- Adicionado a classe mr-2 para dar espaço entre a imagem e o texto -->
                Lista de Grupos
            </h1>
        </div>
        <div class="col mt-5">
            <x-a href="{{ route('grupos.novo') }}" cor="success" message="Cadastrar"></x-a>
        </div>   
    </div>
    <div class="d-flex justify-content-center flex-wrap mb-5">
        @foreach ($reg as $grupo)
            <div class="col-md-3 mb-4 mx-1">
                <div class="card">
                    <div class="card-body text-center d-flex justify-content-center align-items-center flex-column">
                        <h4 class="card-title">{{ $grupo->nome }}</h4>
                        <h6 class="card-title">Status:</h6>
                        @if ($grupo->status == 0)
                            <h6 class="card-title">Disband</h6>
                        @elseif ($grupo->status == 1)
                            <h6 class="card-title">Não Debutou</h6>
                        @elseif ($grupo->status == 2)
                            <h6 class="card-title">Debutou</h6>
                        @endif
                        <div>
                            <a href="{{ route('grupos.visualizar', $grupo->id) }}" class="btn btn-primary btn-sm">Visualizar</a>
                            <a href="{{ route('grupos.editar', $grupo->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@if(session()->has('success'))
 <x-toast></x-toast>
@endif
@endsection