@extends('layouts.app')

@section('conteudo')
    <h1>Disciplina</h1>

    <a href="/disciplina/create" class="btn btn-warning">Novo</a>

    <table class="table table-hover table-bordered table-striped">
        <tr>
            <th>Ações</th>
            <th>Id</th>
            <th>Nome</th>
            <th>Curso</th>
        </tr>
        @foreach($disciplinas as $disciplina)
            <tr>
                <td>
                    <a class="btn btn-primary" href="disciplina/{{$disciplina->id}}/edit">Alterar</a>
                    <a class="btn btn-danger" href="disciplina/{{$disciplina->id}}/destroy">Excluir</a>
                </td>
                <td>{{$disciplina->id}}</td>
                <td>{{$disciplina->nome}}</td>
                <td>{{$disciplina->curso_id}}</td>
            </tr>
        @endforeach
    </table>



@endsection
