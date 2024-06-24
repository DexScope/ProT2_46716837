<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('front/header_view');
        echo view('front/navbar_view');
        echo view('front/principal_view');
        echo view('front/footer_view');
    }
    public function quienesSomos()
    {
        echo view('front/header_view');
        echo view('front/navbar_view');
        echo view('front/quienes_somos_view');
        echo view('front/footer_view');
    }
    public function acercaDe()
    {
        echo view('front/header_view');
        echo view('front/navbar_view');
        echo view('front/acerca_de_view');
        echo view('front/footer_view');
    }
    public function registrarse()
    {
        echo view('front/header_view');
        echo view('front/navbar_view');
        echo view('front/registrarse_view');
        echo view('front/footer_view');
    }
    public function login()
    {
        echo view('front/header_view');
        echo view('front/navbar_view');
        echo view('front/login_view');
        echo view('front/footer_view');
    }
}
