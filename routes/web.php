<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@principal')->name('index');

Route::get('/test', 'HomeController@test');
Route::get('/testDB', 'HomeController@testDB');

Route::get('/format', function (){
    /*Retornar JSON (PHP lo convierte de arr_assoc a JSON)*/
    return [
        'nombre' => 'Carlos',
        'apellido' => 'Castañeda',
        'profesion' => 'Ingeniero de sistemas',
        'edad' => 27,
        'email' => 'carlos.castaneda@ucaldas.edu.co'
    ];
});

//Crear una ruta de tipo recurso
Route::resource('/programming-language','ProgrammingLanguageController')
                ->middleware('auth');

Route::get('/programming-language/{programming_language:slug}', 'ProgrammingLanguageController@show');

Route::resource('/programming-language/{programming_language}/frameworks','FrameworkController');

Route::get('/testfile', 'HomeController@testStorage');

Route::post('/programming-language/{programming_language}/email', 'ProgrammingLanguageController@sendEmail')
    ->name('programming-language.email');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
