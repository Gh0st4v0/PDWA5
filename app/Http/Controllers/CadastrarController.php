<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alimento;

class CadastrarController extends Controller
{
    // Validar e persistir os dados
    public function salvar(Request $request){

        $request->validate([
            "nome" => "required|min: 3|max: 50",
            "calorias" => "required|numeric|min: 0",
            "carboidratos" => "required|numeric|min: 0",
            "gorduras" => "required|numeric|min: 0",
            "proteinas" => "required|numeric|min: 0"
        ], 
        [
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.min' => 'O campo nome deve ter no mínimo :min caracteres.',
            'nome.max' => 'O campo nome deve ter no máximo :max caracteres.',
            'calorias.required' => 'O campo calorias é obrigatório.',
            'calorias.numeric' => 'O campo calorias deve ser um valor numérico.',
            'calorias.min' => 'O campo calorias deve ser no mínimo :min.',
            'carboidratos.required' => 'O campo carboidratos é obrigatório.',
            'carboidratos.numeric' => 'O campo carboidratos deve ser um valor numérico.',
            'carboidratos.min' => 'O campo carboidratos deve ser no mínimo :min.',
            'gorduras.required' => 'O campo gorduras é obrigatório.',
            'gorduras.numeric' => 'O campo gorduras deve ser um valor numérico.',
            'gorduras.min' => 'O campo gorduras deve ser no mínimo :min.',
            'proteinas.required' => 'O campo proteínas é obrigatório.',
            'proteinas.numeric' => 'O campo proteínas deve ser um valor numérico.',
            'proteinas.min' => 'O campo proteínas deve ser no mínimo :min.'
        ]);

        $alimento = new Alimento();
        $alimento->fill($request->all());
        $alimento->save();

        return view('cadastrosalvo');
    }
}
