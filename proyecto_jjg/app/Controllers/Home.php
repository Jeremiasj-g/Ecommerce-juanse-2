<?php

namespace App\Controllers;
use App\Models\Producto_model;

class Home extends BaseController
{
    public function index()
    {
        $productoModel = new Producto_model();
        $dato['producto'] = $productoModel->orderBy('id', 'DESC')->findAll();

        $data ['titulo'] = 'inicio';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/main', $dato);
        echo view('front/footer');
    }

    public function contacto()
    {
        $data ['titulo'] = 'contacto';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/contacto');
        echo view('front/footer');
    }
    
    public function comercializacion()
    {
        $data ['titulo'] = 'comercializacion';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/comercializacion');
        echo view('front/footer');
    }
    
    public function terminos_y_usos()
    {
        $data ['titulo'] = 'terminos_y_usos';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/terminos_y_usos');
        echo view('front/footer');
    }
    
    public function about_us()
    {
        $data ['titulo'] = 'sobre_nosotros';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/quienes_somos');
        echo view('front/footer');
    }
/* 
    public function registro()
    {
        $data ['titulo'] = 'registro';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('back\usuario\registro');
        echo view('front/footer');
    }

    public function registro_profe()
    {
        $data ['titulo'] = 'registro';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('back\usuario\registro_profe');
        echo view('front/footer');
    }
 */
}
