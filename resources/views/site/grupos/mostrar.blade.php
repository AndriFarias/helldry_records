@extends('tema.site.index')

@section('titulo','Lista de Grupos')

@section('conteudo')
<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <h1 class="display-4">{{$grupo->nome}}</h1>
        </div>
        <div class="col mt-3">
            <x-a href="{{ route('grupos') }}" message="Voltar" cor="secondary"></x-a>
        </div>
        </div>
    <div class="row align-items-center">
        <div class="col-lg-3">
            <div class="col">
                <h3 class="display-6 mt-2">Status</h3>
            <div class="form-check">
                <input type="radio" name="status" value="2" id="statusDebut" class="form-check-input" disabled {{ $grupo->status == '2' ? 'checked' : '' }} >
                <label for="statusDebut" class="form-check-label">Debutou</label>
            </div>
            <div class="form-check">
                <input type="radio" name="status" value="1" id="statusNoDebut" class="form-check-input" disabled {{ $grupo->status == '1' ? 'checked' : '' }} >
                <label for="statusNoDebut" class="form-check-label">Não Debutou</label>
            </div>
            <div class="form-check">
                <input type="radio" name="status" value="0" id="statusDisband" class="form-check-input" disabled {{ $grupo->status == '0' ? 'checked' : '' }} >
                <label for="statusDisband" class="form-check-label">Disband</label>
            </div>
        </div>         
     </div>
            <div class="col-lg-9 mb-4">
                <h5 class="display-6 mt-3">Membros</h5>
                <div class="row">
                 @foreach ($membros as $membro)
                    <div class="col-md-4">
                        <div class="card mb-4">
                            
                            <div class="card-body">
                                <h5 class="card-title">{{ $membro->nome }}</h5>
                                <p class="card-text">{{ $membro->dt_nascimento }}</p>
                                <a href="{{ route('artistas.visualizar',$membro->id) }}" class="btn btn-primary btn-sm">Visualizar</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div> 
        </div>    
</div>
@endsection