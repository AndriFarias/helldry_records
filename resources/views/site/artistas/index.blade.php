@extends('tema.site.index')

@section('titulo','Lista de Artistas')

@section('conteudo')
    <h1>Lista de Artistas</h1>
<div>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Nacionalidade</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reg as $artista)
                <tr>
                    <td>{{ $artista->nome }}</td>
                    <td>{{ $artista->nacionalidade }}</td>
                    <td>{{(isset($artista->status) AND $artista->status) ? 'Ativo' : 'Inativo'}}</</td>
                    <td>
                    <x-a href="{{ route('artistas.visualizar',$artista->id) }}" message="Visualizar"></x-a>
                    <x-a href="{{ route('artistas.editar',$artista->id) }}" message="Editar"></x-a>
                    <x-a href="{{ route('artistas.excluir',$artista->id) }}" message="Excluir"></x-a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    <br>
    <x-a href="{{ route('logout') }}" message="Logout"></x-a>
@endsection