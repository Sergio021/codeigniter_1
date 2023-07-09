<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $datos = [
            "titulo" => "Bienvenido a codeigniter 4 :3",
            "mencion" => "Esto lo aprendi de facultad autodidacta"
        ];
        return view('welcome_message', $datos); //manera de como enviar los datos
    }

    public function contacto(){
        return view('contactoPrueba');
    }

    public function formulario(){
        return view('formulario');
    }

    public function enviaPost(){
        $valor1= $_POST['valor1'];
        $valor2= $_POST['valor2'];
        echo "La suma es ".$valor1 + $valor2;

    }

    public function inicio(){
        return view('inicio');
    }
}
