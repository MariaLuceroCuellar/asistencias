<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usuarios\UserController;
use PhpParser\Node\Stmt\Return_;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola', function(){
    return('Hola mundo');
});

Route::get(
    '/hola/{nombre}', 
    function($nombre){
        return('Hola  '. $nombre);
    }
);

Route::get(
    //url de la ruta
    '/usuarios/todos',
    //Controlador y metodo
    [UserController::class, 'all']
);




