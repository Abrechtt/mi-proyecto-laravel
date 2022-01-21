<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

#default
Route::get('/', function () {
    return view('welcome');
});

#Ejemplos Clase
Route::get('notas', function(){
    return 'Aqui estara nuestro listado de notas';
});

Route::get('notas/actualizar', function(){
    return 'Aqui sera la vista para actualizar notas';
});

Route::get('api/notas', function(){
    return [
        'Notas' => [
            'Nombre',
            'Fecha',
            'Autor',
             ]
        ];
});

#Tarea Jorge Perez

Route::get('fiado', function(){
    return 'hoy no se fia mañana si';
});

Route::get('el relato de patricio', function(){
    return 'Una vez hubo un percebe feo, era tan feo que todos se murieron FIN';
});

Route::get('instrumentos', function(){
    return '¿La mayonesa es un instrumento y si no los rabanos picantes tampocos?';
});

Route::get('carrerin', function(){
    return '¿Quieres verme subir esa colina?.....¿Quieres verme hacerlo otra vez?';
});

Route::get('papeleo', function(){
    return 'no entregaste tu papeleo a noche';
});