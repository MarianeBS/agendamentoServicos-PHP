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

        echo "<script> alert('Serviço cadastrado com sucesso!');</script>";
        return view('agendamentos.create');
    }

    public function show()
    {
        $servicos = Servico::get();
        return view('agendamentos.show', compact('servicos'));
    }

    public function showServico($id){
        $servico = Servico::where('id', '=', $id)->first();
        if(!empty($servico)){
            return view('agendamentos.edit', compact('servico'));
        }
        else{
            return redirect('/agendamentos/ver');
        }
    }

    public function update(Request $request)
    {
        $servico = Servico::where('id', '=',  $request->id)->update([
            'id' => $request->id,
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'origem' => $request->origem,
            'data_contato' => $request->data_contato,
            'observacao' => $request->observacao,
        ]);

        echo "<script> alert('Serviço atualizado com sucesso!'); </script>";
        return redirect()->route('visualizar_servico');
    }

    public function destroy($id)
    {
        Servico::where('id', $id)->delete();
        echo "<script> alert('Serviço deletado com sucesso!'); </script>";
        return redirect()->route('visualizar_servico');
    }
    
        
}


