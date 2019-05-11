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
                    <span id="mensagem-nome"></span>
                </div>

                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" name="telefone" id="telefone" value="{{$aluno->telefone}}">
                </div>

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" class="form-control" name="email" id="email" value="{{$aluno->email}}">
                    <span id="mensagem-email" style="color: red;"></span>
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
                    <label for="uf_id">UF</label>
                    <select name="uf_id" id="uf_id" class="form-control">
                        <option value="">Selecione</option>
                        @foreach($ufs as $uf)
                            <option value="{{$uf->id}}">{{$uf->sigla . ' - ' . $uf->nome}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="municipio_id">Município</label>
                    <select name="municipio_id" id="municipio_id" class="form-control">
                        <option value="">Selecione</option>
                        @foreach($municipios as $municipio)
                            <option value="{{$municipio->id}}">{{$municipio->nome}}</option>
                        @endforeach
                    </select>
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
                    url: '/aluno/verificar-email/' + $('#email').val(),
                    success: function (dados) {
                        if(dados.existe){
                            $('#mensagem-email').html(dados.mensagem);
                            $('#email').val('')
                        }
                    }
                });
            });

            $('#nome').change(function(){
                $('#mensagem-nome').load('/aluno/verificar-nome/' + $('#nome').val())
            });

            $('#uf_id').change(function(){

                $.ajax({
                    url: '/municipio/recuperar-por-uf/' + $('#uf_id').val(),
                    success: function (dados) {
                        $('#municipio_id').html('<option value="">Selecione</option>');

                        dados.forEach(function(obj){
                            $('#municipio_id').append('<option value="' + obj.id + '">' + obj.nome + '</option>');
                        })
                    }
                });
            });


        });
    </script>

@endsection