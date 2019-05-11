<?php

namespace App\Http\Controllers;

use App\Municipio;
use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    public function recuperarPorUf($uf_id)
    {
        return Municipio::where('uf_id', $uf_id)->get();
    }
}
