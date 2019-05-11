<table class="table table-hover table-bordered table-striped">
    <tr>
        <th>Ações</th>
        <th>Id</th>
        <th>Nome</th>
        <th>Nome</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>E-mail</th>
    </tr>
    @foreach($alunos as $aluno)
        <tr>
            <td>
                <a class="btn btn-primary" href="aluno/{{$aluno->id}}/edit">Alterar</a>
                <a class="btn btn-danger" href="aluno/{{$aluno->id}}/destroy">Excluir</a>
            </td>
            <td>{{$aluno->id}}</td>
            <td>{{$aluno->nome}}</td>
            <td>{{$aluno->nome}}</td>
            <td>{{$aluno->nome}}</td>
            <td>{{$aluno->telefone}}</td>
            <td>{{$aluno->email}}</td>
        </tr>
    @endforeach
</table>
