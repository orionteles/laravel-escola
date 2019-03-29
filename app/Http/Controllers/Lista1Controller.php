<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lista1Controller extends Controller
{

    public function exercicio2()
    {
        return view('lista1.exercicio2');
    }

    public function exercicio2Resposta(Request $request)
    {
        $total = $request->total;
        $validos = $request->validos;
        $brancos = $request->brancos;
        $nulos = $request->nulos;

        $percentualValidos = $validos * 100 / $total;
        $percentualBrancos = $brancos * 100 / $total;
        $percentualNulos = $nulos * 100 / $total;

        return view('lista1.exercicio2-resultado', compact('total', 'percentualValidos', 'percentualBrancos', 'percentualNulos'));
    }

}
