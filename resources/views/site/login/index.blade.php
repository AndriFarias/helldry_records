@extends('tema.site.index')

@section('titulo','Login')

@section('conteudo')
<div class="container mt-4 text-center">
    <img src="{{ asset('images/logo.png') }}" class="rounded mx-auto d-block" alt="Helldry Records" height="150px" width="250px">
    <h1 class="display-5 mt-3">Login</h1>
<form action="{{route('login.verificar')}}" enctype="multipart/form-data" method="post">
    <div class="mx-auto p-2" style="width: 200px;">
        <x-input type="text" placeholder="Usuario" name="usuario" id="usuario"></x-input>
        <x-input type="password" placeholder="Senha" name="password" id="password"></x-input>
    </div>
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