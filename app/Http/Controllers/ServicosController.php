<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servico;

class ServicosController extends Controller
{
    public function create()
    {
        return view('agendamentos.create');
    }

    public function store(Request $request)
    {
        Servico::create([
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'origem' => $request->origem,
            'data_contato' => $request->data_contato,
            'observacao' => $request->observacao,
        ]);

        return "Serviço cadastrado com sucesso";
    }
}
