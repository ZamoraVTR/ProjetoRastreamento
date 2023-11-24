<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/', 'PrincipalController@principal')->name('site.index');


Route::get('/transportadora', 'RastreamentoController@buscaDados')->name('site.transportadora')->middleware('web');;
Route::post('/transportadora', 'RastreamentoController@importaDadosRastreamento')->name('site.transportadora');

