<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicosController extends Controller
{
    public function create()
    {
        return view('servicos.create');
    }
    
    public function store(Request $request)
    {
        dd($request->all());
    }
}
