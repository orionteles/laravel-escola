@extends('layouts.app')

@section('conteudo')

    <div class="row">
        <div class="col-md-4">
            <h1>Curso</h1>
            <form action="/curso" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$curso->id}}">

                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" value="{{$curso->nome}}">
                </div>
                <div class="form-group">
                    <label for="duracao">Duração</label>
                    <input type="text" class="form-control" name="duracao" value="{{$curso->duracao}}">
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="/curso" class="btn btn-danger">Voltar</a>

            </form>
        </div>
        <div class="col-md-8">
            <h1>Disciplinas</h1>

            <table class="table table-hover table-bordered table-striped">
                <tr>
                    <th>Ações</th>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Curso</th>
                </tr>
                @foreach($curso->disciplinas as $disciplina)
                    <tr>
                        <td>
                            <a class="btn btn-primary" href="disciplina/{{$disciplina->id}}/edit">Alterar</a>
                            <a class="btn btn-danger" href="disciplina/{{$disciplina->id}}/destroy">Excluir</a>
                        </td>
                        <td>{{$disciplina->id}}</td>
                        <td>{{$disciplina->nome}}</td>
                        <td>{{$disciplina->curso->nome}}</td>
                    </tr>
                @endforeach
            </table>
        </div>

    </div>


    <br>


@endsection