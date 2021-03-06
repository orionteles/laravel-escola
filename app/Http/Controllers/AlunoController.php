<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Municipio;
use App\Uf;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Aluno::all();
        return view('aluno.index', compact('alunos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aluno = new Aluno();
        $ufs = Uf::all();
        $municipios = Municipio::all();

        return view('aluno.formulario', compact('aluno', 'ufs', 'municipios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aluno = new Aluno();

        // Em caso de alterção
        if($request->id){
            $aluno = $aluno->find($request->id);
        }

        $aluno->fill($request->all());
        $aluno->save();

        return redirect('aluno');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aluno = Aluno::find($id);
        return view('aluno.formulario', compact('aluno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Aluno::find($id)->delete();

        return redirect('aluno');
    }

    public function verificarEmail($email)
    {
        $qtd = Aluno::where('email', $email)->count();
        $mensagem = $qtd ?
            "Já existe um registro com o e-mail {$email}" :
            'Não existe registro com o email informado';

        return [
            'existe' => (bool) $qtd,
            'mensagem' => $mensagem,
        ];
    }

    public function verificarNome($nome)
    {
        $qtd = Aluno::where('nome', $nome)->count();
        $mensagem = $qtd ?
            "Existem {$qtd} alunos com o nome {$nome}" :
            'Não existe nenhum aluno com seu nome';

        return $mensagem;
    }

    public function listar($nome = null)
    {
        $alunos = Aluno::where('nome', 'like', "%{$nome}%")->get();
        return view('aluno.listagem', compact('alunos'));
    }


}
