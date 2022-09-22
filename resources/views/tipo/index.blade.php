@extends('layouts.base')

@section('conteudo')
    <h1>
        Tipos de lançamentos
        - 
        <a href="{{ route('tipo.create') }}" class="btn btn-dark">
            <i class="bi bi-plus-square-dotted">Novo</i>
        </a>
    </h1>    

    <table class="table table-striped table-border">
        <thead>
            <th>Ações</th>
            <th>ID</th>
            <th>Tipo</th>
            <th>--</th>
        </thead>

        <tbody>
            @foreach ($tipos->get() as $tipo)
            <tr>
                <td>
                    <a href="{{ route('tipo.edit', ['id'=>$tipo->id_tipo]) }}" class="btn btn-success">
                        <i class="bi bi-pencil-square">Editar</i>
                    </a>
                </td>
                <td>{{$tipo->id_tipo}}</td>
                <td>{{$tipo->tipo}}</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection