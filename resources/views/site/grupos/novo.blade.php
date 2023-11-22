@extends('tema.site.index')

@section('titulo','Cadastro de grupo')

@section('conteudo')
<div class="container">
<div class="row">
    <div class="col-sm-10">
    <h1 class="display-5">Cadastro de Grupo</h1>
    </div>
    <div class="col mt-3">
        <x-a href="{{ route('grupos') }}" message="Voltar" cor="secondary"></x-a>
    </div>
    </div>
<form action="{{ route('grupos.store') }}" method="POST" class="container">
    
    <label for="nome"  class="form-label">Nome do Grupo:</label>
    <input type="text" name="nome" id="nome" class="form-control">

    <label for="artistas" class="form-label">Selecione os Artistas:</label>
    <div class="row">
        @foreach($artistas as $artista)
        <div class="col-md-3 mb-3">
            <label class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $artista->nome }}</h5>
                    <input type="checkbox" name="artistas[]" value="{{ $artista->id }}" class="form-check-input">
                </div>
            </label>
        </div>
        @endforeach
    </div>
        <div class="form-check">
            <input type="radio" name="status" value="2" id="statusDebut" class="form-check-input">
            <label for="statusDebut" class="form-check-label">Debutou</label>
        </div>
        <div class="form-check">
            <input type="radio" name="status" value="1" id="statusNoDebut" class="form-check-input">
            <label for="statusNoDebut" class="form-check-label">Não Debutou</label>
        </div>
        <div class="form-check">
            <input type="radio" name="status" value="0" id="statusDisband" class="form-check-input">
            <label for="statusDisband" class="form-check-label">Disband</label>
        </div>

        {{ csrf_field() }}
    <x-button type="submit" message="Salvar" cor="success"></x-button>
</form>
</div>
@endsection