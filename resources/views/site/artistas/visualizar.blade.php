@extends('tema.site.index')

@section('titulo','Visualizar Atista')

@section('conteudo')
<div class="container">
<div class="row">
    <div class="col-sm-10">
    <h1>Visualizar Artista</h1>
    </div>
    <div class="col">
        <x-a href="{{ route('artistas') }}" message="Voltar" cor="secondary"></x-a>
    </div>
    </div>
    <label for="nome" class="form-label">Nome: </label>
     <input type="text" placeholder="Nome" name="nome" id="nome" maxlength="64" value="{{$reg->nome}}" disabled class="form-control"></input>

     <label for="dt_nascimento" class="form-label">Data de Nascimento:</label>
     <input type="date" name="dt_nascimento" id="dt_nascimento" value="{{$reg->dt_nascimento}}" disabled class="form-control"></input>
     <label for="nacionalidade" class="form-label">Nacionalidade: </label>
     <input type="text" placeholder="Nacionalidade" name="nacionalidade" id="nacionalidade" maxlength="32" value="{{$reg->nacionalidade}}" disabled class="form-control"></input>
     <label for="endereco" class="form-label">Endereço: </label>
     <input type="text" placeholder="Endereço" name="endereco" id="endereco" maxlength="256" value="{{$reg->endereco}}" disabled class="form-control"></input>


     <label for="email" class="form-label">E-mail: </label>
     <input type="text" placeholder="Email" name="email" id="email" value="{{$reg->email}}" disabled class="form-control"></input>

     <label for="telefone" class="form-label">Telefone: </label>
     <input type="text" placeholder="Telefone" name="telefone" id="telefone" maxlength="32" value="{{$reg->telefone}}" disabled class="form-control"></input>
    
     <label for="status" class="form-label">Status: </label>
     <input type="radio" name="status" value="1" id="statusOn" {{ $reg->status == 1 ? 'checked' : '' }} disabled></input>
     <label for="statusOn" class="form-label">Ativo</label>
     <input type="radio" name="status" value="0" id="statusOff" {{ $reg->status == 0 ? 'checked' : '' }} disabled></input>
     <label for="statusOff" class="form-label">Inativo</label>

    </div>

@endsection