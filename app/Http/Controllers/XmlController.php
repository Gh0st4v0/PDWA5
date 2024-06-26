<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alimento;

class XmlController extends Controller
{
    //pegar todos os dados dos alimentos e gerar um XML
    public function gerarXML(){
        $dados = Alimento::all();

        return response()->view('data-xml', ['registros' => $dados])->header('Content-Type','application/xml');
    } 
}
