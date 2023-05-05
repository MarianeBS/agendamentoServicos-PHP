<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('/agendamentos/create');
});

Route::get('/agendamentos', 'App\Http\Controllers\ServicosController@create')->name('criar_servico');

Route::post('/agendamentos', 'App\Http\Controllers\ServicosController@store')->name('registrar_servico');

Route::get('/agendamentos/ver/', 'App\Http\Controllers\ServicosController@show')->name('visualizar_servico');

Route::get('/agendamentos/editar/{id}', 'App\Http\Controllers\ServicosController@showServico')->name('show_servico');

Route::post('/agendamentos/editar', 'App\Http\Controllers\ServicosController@update')->name('alterar_servico');

Route::get('/agendamentos/excluir/{id}', 'App\Http\Controllers\ServicosController@destroy')->name('excluir_servico');

