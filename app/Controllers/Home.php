<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
       // return view('welcome_message');
       echo view('plantillas/encabezado');
       echo view('plantillas/nav');
       echo view('contenidos/plantilla');
       echo view('plantillas/footer');
    }
    public function quienes()
    {
        //echo view('contenidos/plantilla');
       // return view('plantillas/encabezado').view('plantillas/nav').view('contenidos/quienesomos').view('plantillas/footer');
       echo view('plantillas/encabezado');
       echo view('plantillas/nav');
       echo view('contenidos/quienesomos');
       echo view('plantillas/footer');
    }

    public function comercio()
    {
        echo view('plantillas/encabezado');
        echo view('plantillas/nav');
        echo view('contenidos/comercializacion');
        echo view('plantillas/footer');
    }

    public function tyc()
    {
        echo view('plantillas/encabezado');
        echo view('plantillas/nav');
        echo view('contenidos/terminosycondiciones');
        echo view('plantillas/footer');
    }

    
}
