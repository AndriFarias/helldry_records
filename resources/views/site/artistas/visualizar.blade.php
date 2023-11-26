@extends('tema.site.index')

@section('titulo','Visualizar Artista')

@section('conteudo')<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <h1 class="display-5">Visualizar Artista</h1>
        </div>
        <div class="col mt-3">
            <x-a href="{{ route('artistas') }}" message="Voltar" cor="secondary"></x-a>
        </div>
    </div>

    <div style="margin-bottom: 40px" class="mt-5">
        <div class="container">
            <div class="row align-items-center mb-3">
                <div class="col-md-3">
                    <img src="{{ asset('images/playlist.png') }}" class="rounded mx-auto d-block" alt="playlist" height="180px" width="180px">
                </div>
                <div class="col-md-4 mx-3">
                    <p class="lead"><strong>Nome:</strong> {{$reg->nome}}</p>
                    <p class="lead"><strong>Data de Nascimento:</strong> {{$reg->dt_nascimento}}</p>
                    <p class="lead"><strong>Nacionalidade:</strong> {{$reg->nacionalidade}}</p>
                    <p class="lead"><strong>E-mail:</strong> {{$reg->email}}</p>
                    <p class="lead"><strong>Status:</strong> {{ $reg->status == 1 ? 'Ativo' : 'Inativo' }}</p>
                </div>
                <div class="col-md-4">
                    <p class="lead"><strong>Endereço:</strong> {{$reg->endereco}}</p>
                    <p class="lead"><strong>Telefone:</strong> {{$reg->telefone}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection