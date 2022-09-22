@extends('layouts.base')

@section('conteudo')
    <h1>
        <i class="bi bi-basket-fill"></i>
        Centros de Custo
        - 
        <a href="{{ route('centro.create') }}" class="btn btn-dark">
            <i class="bi bi-plus-square-dotted">Novo</i>
        </a>
    </h1>    

    <table class="table table-striped table-border">
        <thead>
            <th>Ações</th>
            <th>ID</th>
            <th>Tipo</th>
            <th>Centro de Custo</th>
        </thead>

        <tbody>
            @foreach ($centros->get() as $centro)
            <tr>
                <td>
                    <a href="{{ route('centro.edit', ['id'=>$centro->id_centro_custo]) }}" class="btn btn-success">
                        <i class="bi bi-pencil-square">Editar</i>
                    </a>
                </td>
                <td>{{$centro->id_centro_custo}}</td>
                <td>{{$centro->tipo->tipo}}</td>
                <td>{{$centro->centro_custo}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection