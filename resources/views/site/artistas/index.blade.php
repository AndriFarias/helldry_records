@extends('tema.site.index')

@section('titulo','Lista de Artistas')

@section('conteudo')
<div>
    <div class="row">
        <div class="col-md-2">
            <img src="{{ asset('images/notas.png') }}" alt="nota musical" width="150px" height="550px">
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-sm-8 mt-4 mb-3">
                    <h1 class="display-5">Lista de Artistas</h1>
                </div>
                <div class="col-sm-1 mt-5 mx-4">
                    <x-a href="{{ route('artistas.cadastrar') }}" cor="success" message="Cadastrar"></x-a>
                </div>
                <div class="col mt-5">
                    <x-a href="{{ route('exportar') }}" cor="secondary" message="Exportar"></x-a>
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
                                <td>{{ (isset($artista->status) && $artista->status) ? 'Ativo' : 'Inativo' }}</td>
                                <td>
                                    <x-a href="{{ route('artistas.visualizar', $artista->id) }}" message="Visualizar" cor="primary"></x-a>
                                    <x-a href="{{ route('artistas.editar', $artista->id) }}" message="Editar" cor="warning"></x-a>
                                    <x-a href="{{ route('artistas.excluir', $artista->id) }}" message="Excluir" cor="danger"></x-a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection