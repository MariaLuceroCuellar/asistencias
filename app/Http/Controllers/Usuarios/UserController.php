<?php

namespace App\Http\Controllers\Usuarios;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function ver(){
        #crear un array vacío para el for
        $usuarios = [];

        //For que genere 10 usuarios
        for ($i=1; $i < 10 ; $i++) { 
                #crear un usuario
                $usuario = new \stdClass();
                #Asignar un nombre
                $usuario->nombre = 'Usuario '. $i;
                #Asignar correo
                $usuario->correo = 'Usuario'. $i .'@gmail.com';
                #Agregar el usuario al array
                $usuarios[] = $usuario;
        
        }
        #dd($usuarios);
        return view('users.vista', compact('usuarios'));
    }


    public function all(){
        $users = User::all();
        return view('users.users', compact('users'));
    }

}


