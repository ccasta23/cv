<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{

    //Ruta principal '/'
    function saludar(){
        return 'Hola visitante, bienvenido a Laravel';
    }

    //Ruta '/test'
    function test(Request $request){
        var_dump($request->get('title', 'No trae título')); die;
        //return 'Bienvenidos a Laravel'; //Retornar una cadena
        return view('test', [
            'title' => 'Curso de Laravel',
            'descripcion' => 'Curso en el que aprenderemos el manejo de Laravel',
            'temas' => [
                'Rutas',
                'Templates (Blade)',
                'Controladores'
            ]
        ]); //Retornar una vista de Blade
    }

    function testDB(){
        try {
            /*Probar conexión a la base de datos*/
            DB::connection()->getPdo();
            if( DB::connection()->getDatabaseName() ){
                /*Se conectó a la BD*/
                return ['ok' => 'Se conectó a la base de datos'];
            }

            die('No se logró encontrar la base de datos');

        } catch (\Exception $e){
            die("No se pudo conectar a la BD, Error: {$e->getMessage()}");
        }
    }
}
