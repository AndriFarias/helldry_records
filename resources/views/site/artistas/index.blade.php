@extends('tema.site.index')

@section('titulo','Lista de Artistas')

@section('conteudo')
<div class="container">
    <div class="row">
        <div class="col-sm-10 mt-4 mb-3">
    <h1 class="display-5">Lista de Artistas</h1>
    </div>
    <div class="col mt-5">
    <x-a href="{{ route('artistas.cadastrar') }}" cor="success" message="Cadastrar"></x-a>
    </div>   
</div>
    <div class="mb-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Nacionalidade</th>
                <th scope="col">Status</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reg as $artista)
                <tr scope="row">
                    <td>{{ $artista->nome }}</td>
                    <td>{{ $artista->nacionalidade }}</td>
                    <td>{{(isset($artista->status) AND $artista->status) ? 'Ativo' : 'Inativo'}}</</td>
                    <td>
                    <x-a href="{{ route('artistas.visualizar',$artista->id) }}" message="Visualizar" cor="primary"></x-a>
                    <x-a href="{{ route('artistas.editar',$artista->id) }}" message="Editar" cor="warning"></x-a>
                    <x-a href="{{ route('artistas.excluir',$artista->id) }}" message="Excluir" cor="danger"></x-a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    </div>
@endsection