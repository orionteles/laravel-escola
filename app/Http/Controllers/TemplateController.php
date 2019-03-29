<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index()
    {
        $nome = 'Orion Teles';
        $nota = 7;

        $aCarros = ['Maserati', 'Fusca', 'Ferrari', 'Gol', 'Pálio'];

        return view('layouts.app', compact('nome', 'aCarros', 'nota'));
    }

    public function pagina2()
    {
        return view('pagina2');
    }

    public function pagina3()
    {
        return view('pagina3');
    }
}
