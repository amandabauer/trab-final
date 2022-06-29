<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\EmpresasController;
use App\Http\Controllers\VagasController;
use App\Http\Controllers\CandidatosController;

Route::get('/site', function () {
    return view('site.home');
});

Route::get('/empresa', "App\Http\Controllers\EmpresasController@listagem");

Route::get('/empresa/inclusao', "App\Http\Controllers\EmpresasController@inclusao")->name('empresa.inclusao');
Route::post('/empresa/incluir', "App\Http\Controllers\EmpresasController@incluir")->name('empresa.incluir');

Route::get('/empresa/edicao', "App\Http\Controllers\EmpresasController@edicao");

Route::get('/empresa/exclusao', "App\Http\Controllers\EmpresasController@exclusao");

 Route::get('/vaga', "App\Http\Controllers\VagasController@listagem");

 Route::get('/vaga/inclusao', "App\Http\Controllers\VagasController@inclusao")->name('empresa.inclusao');
 Route::post('/vaga/incluir', "App\Http\Controllers\VagasController@incluir")->name('vaga.incluir');

 Route::get('/vaga/edicao', "App\Http\Controllers\VagasController@edicao");

 Route::get('/vaga/exclusao', "App\Http\Controllers\VagasController@exclusao");

Route::get('/candidato', "App\Http\Controllers\CandidatosController@listagem");

Route::get('/candidato/inclusao', "App\Http\Controllers\CandidatosController@inclusao")->name('candidato.inclusao');
Route::post('/candidato/incluir', "App\Http\Controllers\CandidatosController@incluir")->name('candidato.incluir');

Route::get('/candidato/exclusao', "App\Http\Controllers\CandidatosController@exclusao");
