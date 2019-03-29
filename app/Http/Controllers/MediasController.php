<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediasController extends Controller
{
    public function index()
    {
        return view('media.index');
    }

    public function calcularMedia(Request $request)
    {
        $nome = $request->nome;
        $media = ($request->nota1 + $request->nota2 + $request->nota3 + $request->nota4) / 4;

        return view('media.resultado', compact('nome', 'media'));


    }
}
