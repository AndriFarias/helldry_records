@extends('tema.site.index')

@section('titulo','Login')

@section('conteudo')
<div class="container">
    <h1>Login</h1>
<form action="{{route('login.verificar')}}" enctype="multipart/form-data" method="post">
    <x-input type="text" placeholder="Usuario" name="usuario" id="usuario"></x-input>
    <x-input type="password" placeholder="Senha" name="password" id="password"></x-input>
    <x-button message="Entrar" type="submit"></x-button>
    {{ csrf_field() }} 
</form>
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
</div>
@endsection