@extends('tema.site.index')

@section('titulo','Editar Grupo')

@section('conteudo')
<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <h1 class="display-5">Editar Grupo</h1>
        </div>
        <div class="col mt-3">
            <x-a href="{{ route('grupos') }}" message="Voltar" cor="secondary"></x-a>
        </div>
    </div>
    <form action="{{ route('grupos.atualizar', $grupo->id) }}" method="post" class="container"  enctype="multipart/form-data">
        @method('PUT')
        @csrf
    
    <label for="nome"  class="form-label">Nome do Grupo:</label>
    <input type="text" name="nome" id="nome" class="form-control" value="{{$grupo->nome}}">

    <label for="artistas" class="form-label">Selecione os Artistas:</label>
    <div class="row">
        @foreach($artistas as $artista)
        <div class="col-md-3 mb-3">
            <label class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $artista->nome }}</h5>
                    <input type="checkbox" name="artistas[]" value="{{ $artista->id }}" class="form-check-input" {{ in_array($artista->id, $artistasAssociados) ? 'checked' : '' }}>
                </div>
            </label>
        </div>
        @endforeach
    </div>
    <div class="col">
        <h3 class="display-6 mt-2">Status do Grupo</h3>
    <div class="form-check">
        <input type="radio" name="status" value="2" id="statusDebut" class="form-check-input" {{ $grupo->status == '2' ? 'checked' : '' }} >
        <label for="statusDebut" class="form-check-label">Debutou</label>
    </div>
    <div class="form-check">
        <input type="radio" name="status" value="1" id="statusNoDebut" class="form-check-input" {{ $grupo->status == '1' ? 'checked' : '' }} >
        <label for="statusNoDebut" class="form-check-label">Não Debutou</label>
    </div>
    <div class="form-check">
        <input type="radio" name="status" value="0" id="statusDisband" class="form-check-input" {{ $grupo->status == '0' ? 'checked' : '' }} >
        <label for="statusDisband" class="form-check-label">Disband</label>
    </div>
</div>             
        
    <x-button type="submit" message="Atualizar" cor="warning"></x-button>
</form>
</div>
@endsection