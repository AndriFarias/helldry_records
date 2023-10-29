@extends('tema.site.index')

@section('titulo','')

@section('conteudo')
<div>
    <h1>Cadastro de Artistas</h1>
    <form method="post" action="{{route('artistas.salvar')}}" enctype="multipart/form-data">

     <x-input type="text" placeholder="Nome" name="nome" id="nome"></x-input>

     <label for="dt_nascimento">Data de Nascimento:</label>
     <x-input type="date" name="dt_nascimento" id="dt_nascimento"></x-input>

     <x-input type="text" placeholder="Nacionalidade" name="nacionalidade" id="nacionalidade"></x-input>
     <x-input type="text" placeholder="Endereço" name="endereco" id="endereco"></x-input>

     <x-input type="text" placeholder="Email" name="email" id="email"></x-input>

     <x-input type="text" placeholder="Telefone" name="telefone" id="telefone"></x-input>

     <x-input type="hidden" name="status" value="1" id="status"></x-input>

      {{ csrf_field() }}

      <x-button message="Salvar" type="submit"></x-button>
    </form>
</div>
@endsection