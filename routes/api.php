<?php

use App\Models\Departamento;
use App\Models\Zona;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/departamentos', function() {
    return Departamento::all();
});

Route::get('/departamento/{depto}', function($departamento) {
    $departament= Departamento::where('departamento','=',$departamento)->get(); 
    return $departament;
});

Route::get('departamento/{depto}/municipio/{muni}', function($departamento,$municipio){
    $zonas = Zona::select('idZona','descripcion')->where('departamento','=',$departamento)->where('municipio','=',$municipio)->get();
    return $zonas;
});
