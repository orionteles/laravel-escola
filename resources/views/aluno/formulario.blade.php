@extends('layouts.app')

@section('conteudo')

    <div class="row">
        <div class="col-md-4">
            <h1>Aluno</h1>
            <form action="/aluno" method="post">
                @csrf

                <input type="hidden" name="id" value="{{$aluno->id}}">

                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome" value="{{$aluno->nome}}">
                </div>

                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" name="telefone" id="telefone" value="{{$aluno->telefone}}">
                </div>

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" class="form-control" name="email" id="email" value="{{$aluno->email}}">
                </div>

                <div class="form-group">
                    <label for="cep">Cep</label>
                    <input type="text" class="form-control" name="cep" id="cep" value="{{$aluno->cep}}">
                </div>

                <div class="form-group">
                    <label for="logradouro">Logradouro</label>
                    <input type="text" class="form-control" name="logradouro" id="logradouro" value="{{$aluno->logradouro}}">
                </div>

                <div class="form-group">
                    <label for="complemento">Complemento</label>
                    <input type="text" class="form-control" name="complemento" id="complemento" value="{{$aluno->complemento}}">
                </div>

                <div class="form-group">
                    <label for="numero">Número</label>
                    <input type="text" class="form-control" name="numero" id="numero" value="{{$aluno->numero}}">
                </div>

                <div class="form-group">
                    <label for="uf">UF</label>
                    <input type="text" class="form-control" name="uf" id="uf" value="{{$aluno->uf}}">
                </div>

                <div class="form-group">
                    <label for="municipio">Município</label>
                    <input type="text" class="form-control" name="municipio" id="municipio" value="{{$aluno->municipio}}">
                </div>

                <div class="form-group">
                    <label for="bairro">Bairro</label>
                    <input type="text" class="form-control" name="bairro" id="bairro" value="{{$aluno->bairro}}">
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="/aluno" class="btn btn-danger">Voltar</a>

            </form>
        </div>
    </div>
    <br>

    <script>
        $(function(){
            $('#cep').change(function(){

                $.ajax({
                    url: 'https://viacep.com.br/ws/' + $('#cep').val() + '/json/',
                    success: function (dados) {
                        $('#logradouro').val(dados.logradouro)
                        $('#complemento').val(dados.complemento)
                        $('#bairro').val(dados.bairro)
                        $('#uf').val(dados.uf)
                        $('#municipio').val(dados.localidade)
                    }
                });

            });

            $('#email').change(function(){
                $.ajax({
                    url: ''
                })
            })
        });
    </script>

@endsection