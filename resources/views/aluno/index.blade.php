@extends('layouts.app')

@section('conteudo')
    <h1>Aluno</h1>

    <a href="/aluno/create" class="btn btn-warning">Novo</a>

    Nome: <input type="text" id="nome" />

    <div id="listagem">

    </div>

    <script>
        $(function(){
            $('#nome').keyup(function(){
                $('#listagem').load('/aluno/listar/' + encodeURI($('#nome').val()));
            })
        })
    </script>
    
@endsection
