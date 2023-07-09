<?php

namespace App\Controllers;

class ContactoController extends BaseController
{
    public function index()
    {
        $data = ["titulo"=>"Contácto"];
        $vistas =   view('contacto/header', $data).
                    view('contacto/menu').
                    view('contacto/index').
                    view('contacto/footer');
        return $vistas;
    }

    //public function catalogo($numero_catalogo){ //recibe datos
    //$catalogo = ["numero" => $numero_catalogo];
    //echo view('contacto/catalogo2', $catalogo);
    
    public function catalogo(){
        $data = ["titulo"=>"Catalogooo"];
        echo view('contacto/header', $data);
        echo view('contacto/menu');
        echo view('contacto/catalogo');
        echo view('contacto/footer');
    }
}
