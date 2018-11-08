<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;


class PageController extends Controller
{
   
    public function inicio()
    {
        return view('inicio');
    }

    public function login()
    {
        return view('paginas/login');
    }

    public function miscursos()
    {
        return view('paginas/miscursos');
    }

    public function detallecurso()
    {
        return view('paginas/detallecurso');
    }

    public function misnotas()
    {
        return view('paginas/misnotas');
    }

    public function misdatos()
    {
        return view('paginas/misdatos');
    }

    public function cursos()
    {
        return view('paginas/cursos');
    }

    public function testimonio()
    {
        return view('paginas/testimonio');
    }

    public function pasos()
    {
        return view('paginas/pasos');
    }


}

?>