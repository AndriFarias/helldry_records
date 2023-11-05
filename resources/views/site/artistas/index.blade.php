@extends('tema.site.index')

@section('titulo','Lista de Artistas')

@section('conteudo')
    <h1>Lista de Artistas</h1>
    <x-a href="{{ route('logout') }}" message="Logout"></x-a>
@endsection