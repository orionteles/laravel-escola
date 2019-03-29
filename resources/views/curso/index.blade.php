@extends('layouts.app')

@section('conteudo')
    <h1>Curso</h1>

    <a href="/curso/create" class="btn btn-warning">Novo</a>

    <table class="table table-hover table-bordered table-striped">
        <tr>
            <th>Ações</th>
            <th>Id</th>
            <th>Nome</th>
        </tr>
        @foreach($cursos as $curso)
            <tr>
                <td>
                    <a class="btn btn-primary" href="curso/{{$curso->id}}/edit">Alterar</a>
                    <a class="btn btn-danger" href="curso/{{$curso->id}}/destroy">Excluir</a>
                </td>
                <td>{{$curso->id}}</td>
                <td>{{$curso->nome}}</td>
            </tr>
        @endforeach
    </table>



@endsection
