@extends('tema.site.index')

@section('titulo','Editar Artista')

@section('conteudo')
<div class="container"> 
    <div class="row">
    <div class="col-sm-10">
        <h1 class="display-5">Editar Artista</h1>
    </div>
    <div class="col">
        <x-a href="{{ route('artistas') }}" message="Voltar" cor="secondary"></x-a>
    </div>
    </div>
    <form method="post" action="{{route('artistas.atualizar',$reg->id)}}" enctype="multipart/form-data" class="mb-5">

     <x-input type="text" placeholder="Nome" name="nome" id="nome" maxlength="64" value="{{$reg->nome}}"></x-input>

     <label for="dt_nascimento" class="form-label">Data de Nascimento:</label>
     <x-input type="date" name="dt_nascimento" id="dt_nascimento" value="{{$reg->dt_nascimento}}"></x-input>

     <x-input type="text" placeholder="Nacionalidade" name="nacionalidade" id="nacionalidade" maxlength="32" value="{{$reg->nacionalidade}}"></x-input>
     <x-input type="text" placeholder="Endereço" name="endereco" id="endereco" maxlength="256" value="{{$reg->endereco}}"></x-input>

     <x-input type="text" placeholder="Email" name="email" id="email" value="{{$reg->email}}"></x-input>
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
     <x-input type="text" placeholder="Telefone" name="telefone" id="telefone" maxlength="32" value="{{$reg->telefone}}"></x-input>
    
     <input type="radio" name="status" value="1" id="statusOn" {{ $reg->status == 1 ? 'checked' : '' }}>
     <label for="statusOn" class="form-label">Ativo</label>
     <input type="radio" name="status" value="0" id="statusOff" {{ $reg->status == 0 ? 'checked' : '' }}>
     <label for="statusOff" class="form-label">Inativo</label>

     {{ csrf_field() }}
     <input type="hidden" name="_method" value="put">
     <div class="mt-3">
     <x-button message="Atualizar" type="submit" cor="success"></x-button>
    </div>
    </form>
</div>


@endsection