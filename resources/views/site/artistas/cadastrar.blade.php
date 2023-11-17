@extends('tema.site.index')

@section('titulo','Cadastro de Artistas')

@section('conteudo')
<div class="container">
<div class="row">
    <div class="col-sm-10">
    <h1>Cadastro de Artistas</h1>
    </div>
    <div class="col">
        <x-a href="{{ route('artistas') }}" message="Voltar" cor="secondary"></x-a>
    </div>
    </div>
    <form method="post" action="{{route('artistas.salvar')}}" enctype="multipart/form-data">

     <x-input type="text" placeholder="Nome" name="nome" id="nome" maxlength="64"></x-input>

     <label for="dt_nascimento" class="form-label">Data de Nascimento:</label>
     <x-input type="date" name="dt_nascimento" id="dt_nascimento"></x-input>

     <x-input type="text" placeholder="Nacionalidade" name="nacionalidade" id="nacionalidade" maxlength="32"></x-input>
     <x-input type="text" placeholder="Endereço" name="endereco" id="endereco" maxlength="256"></x-input>

     <x-input type="text" placeholder="Email" name="email" id="email"></x-input>
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
     <x-input type="text" placeholder="Telefone" name="telefone" id="telefone" maxlength="32"></x-input>

     <x-input type="hidden" name="status" value="1" id="status"></x-input>

     {{ csrf_field() }}
     <x-button message="Salvar" type="submit"></x-button>

    </form>
</div>

@endsection