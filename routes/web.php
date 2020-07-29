<?php

//use Illuminate\Support\Facades\Route;

/*
Los controladores son necesarios para mantener el orden  de nuestros archivos web .php
puede ejecutar multiples acciones

*/

/*
Route::get('/', function () {
    return view('welcome');
});*/

//Esto se traduce a ser llamado por un controlador

Route::get('/', 'TestController@welcome');

///agregar nueva ruta

//Route::get('/prueba', function (){
 //return 'Hola soy una ruta de prueba';
//});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
