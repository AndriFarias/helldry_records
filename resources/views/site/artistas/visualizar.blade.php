@extends('tema.site.index')

@section('titulo','Visualizar Atista')

@section('conteudo')
<div>
    <h1>Visualizar Artista</h1>
    <label for="nome">Nome: </label>
     <input type="text" placeholder="Nome" name="nome" id="nome" maxlength="64" value="{{$reg->nome}}" disabled></input>

     <label for="dt_nascimento">Data de Nascimento:</label>
     <input type="date" name="dt_nascimento" id="dt_nascimento" value="{{$reg->dt_nascimento}}" disabled></input>
     <label for="nacionalidade">Nacionalidade: </label>
     <input type="text" placeholder="Nacionalidade" name="nacionalidade" id="nacionalidade" maxlength="32" value="{{$reg->nacionalidade}}" disabled></input>
     <label for="endereco">Endereço: </label>
     <input type="text" placeholder="Endereço" name="endereco" id="endereco" maxlength="256" value="{{$reg->endereco}}" disabled></input>


     <label for="email">E-mail: </label>
     <input type="text" placeholder="Email" name="email" id="email" value="{{$reg->email}}" disabled></input>

     <label for="telefone">Telefone: </label>
     <input type="text" placeholder="Telefone" name="telefone" id="telefone" maxlength="32" value="{{$reg->telefone}}" disabled></input>
    
     <label for="status">Status: </label>
     <input type="radio" name="status" value="1" id="statusOn" {{ $reg->status == 1 ? 'checked' : '' }} disabled></input>
     <label for="statusOn">Ativo</label>
     <input type="radio" name="status" value="0" id="statusOff" {{ $reg->status == 0 ? 'checked' : '' }} disabled></input>
     <label for="statusOff">Inativo</label>


  
</div>
<x-a href="{{ route('logout') }}" message="Logout"></x-a>
@endsection