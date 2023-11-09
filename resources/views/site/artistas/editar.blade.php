@extends('tema.site.index')

@section('titulo','Editar Artista')

@section('conteudo')
<div>
    <h1>Editar Artista</h1>
    <form method="post" action="{{route('artistas.atualizar',$reg->id)}}" enctype="multipart/form-data">

     <x-input type="text" placeholder="Nome" name="nome" id="nome" maxlength="64" value="{{$reg->nome}}"></x-input>

     <label for="dt_nascimento">Data de Nascimento:</label>
     <x-input type="date" name="dt_nascimento" id="dt_nascimento" value="{{$reg->dt_nascimento}}"></x-input>

     <x-input type="text" placeholder="Nacionalidade" name="nacionalidade" id="nacionalidade" maxlength="32" value="{{$reg->nacionalidade}}"></x-input>
     <x-input type="text" placeholder="Endereço" name="endereco" id="endereco" maxlength="256" value="{{$reg->endereco}}"></x-input>

     <x-input type="text" placeholder="Email" name="email" id="email" value="{{$reg->email}}"></x-input>
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
     <x-input type="text" placeholder="Telefone" name="telefone" id="telefone" maxlength="32" value="{{$reg->telefone}}"></x-input>
    

     
     <input type="radio" name="status" value="1" id="statusOn" {{ $reg->status == 1 ? 'checked' : '' }}></input>
     <label for="statusOn">Ativo</label>
     <input type="radio" name="status" value="0" id="statusOff" {{ $reg->status == 0 ? 'checked' : '' }}></input>
     <label for="statusOff">Inativo</label>

      {{ csrf_field() }}
      <input type="hidden" name="_method" value="put">
      <x-button message="Atualizar" type="submit"></x-button>
    </form>
</div>
<x-a href="{{ route('logout') }}" message="Logout"></x-a>
@endsection