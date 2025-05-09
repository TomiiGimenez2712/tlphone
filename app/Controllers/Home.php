<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='tlphone | venta online';
        echo view('front/head_view',$data);
        echo view('front/nav_view');
        echo view('front/home_view');
        echo view('front/whatsapp_view');
        echo view('front/footer_view');
    }

    public function nosotros()
    {
        $data['titulo']='Nosotros | tlphone';
        echo view('front/head_view',$data);
        echo view('front/nav_view');
        echo view('front/nosotros');
        echo view('front/whatsapp_view');
        echo view('front/footer_view');
    }

    public function contacto()
    {
        $data['titulo']='Contacto | tlphone';
        echo view('front/head_view',$data);
        echo view('front/nav_view');
        echo view('front/contacto');
        echo view('front/whatsapp_view');
        echo view('front/footer_view');
    }

    public function celulares()
    {
        $data['titulo']='Celulares | tlphone';
        echo view('front/head_view',$data);
        echo view('front/nav_view');
        echo view('front/celulares');
        echo view('front/whatsapp_view');
        echo view('front/footer_view');
    }

    public function relojes()
    {
        $data['titulo']='Relojes | tlphone';
        echo view('front/head_view',$data);
        echo view('front/nav_view');
        echo view('front/relojes');
        echo view('front/whatsapp_view');
        echo view('front/footer_view');
    }

    public function auriculares()
    {
        $data['titulo']='Auriculares | tlphone';
        echo view('front/head_view',$data);
        echo view('front/nav_view');
        echo view('front/auriculares');
        echo view('front/whatsapp_view');
        echo view('front/footer_view');
    }

    public function parlantes()
    {
        $data['titulo']='Parlantes | tlphone';
        echo view('front/head_view',$data);
        echo view('front/nav_view');
        echo view('front/parlantes');
        echo view('front/whatsapp_view');
        echo view('front/footer_view');
    }

    public function cargadores()
    {
        $data['titulo']='Cargadores | tlphone';
        echo view('front/head_view',$data);
        echo view('front/nav_view');
        echo view('front/cargadores');
        echo view('front/whatsapp_view');
        echo view('front/footer_view');
    }

    public function fundas()
    {
        $data['titulo']='Fundas | tlphone';
        echo view('front/head_view',$data);
        echo view('front/nav_view');
        echo view('front/fundas');
        echo view('front/whatsapp_view');
        echo view('front/footer_view');
    }
    
    public function terminos()
    {
        $data['titulo']='Términos y Condiciones | tlphone';
        echo view('front/head_view',$data);
        echo view('front/nav_view');
        echo view('front/terminos');
        echo view('front/whatsapp_view');
        echo view('front/footer_view');
    }

    public function comercializacion()
    {
        $data['titulo']='Comercialización | tlphone';
        echo view('front/head_view',$data);
        echo view('front/nav_view');
        echo view('front/comercializacion');
        echo view('front/whatsapp_view');
        echo view('front/footer_view');
    }

    public function iniciosesion()
    {
        $data['titulo']='Iniciar sesión | tlphone';
        echo view('front/head_view',$data);
        echo view('front/nav_view');
        echo view('front/iniciosesion');
        echo view('front/whatsapp_view');
        echo view('front/footer_view');
    }

    public function registro()
    {
        $data['titulo']='Registrarse | tlphone';
        echo view('front/head_view',$data);
        echo view('front/nav_view');
        echo view('front/registro');
        echo view('front/whatsapp_view');
        echo view('front/footer_view');
    }

    public function carrito()
    {
        $data['titulo']='Carrito de compras | tlphone';
        echo view('front/head_view',$data);
        echo view('front/nav_view');
        echo view('front/carrito');
        echo view('front/whatsapp_view');
        echo view('front/footer_view');
    }

    public function favoritos()
    {
        $data['titulo']='Favoritos | tlphone';
        echo view('front/head_view',$data);
        echo view('front/nav_view');
        echo view('front/favoritos');
        echo view('front/whatsapp_view');
        echo view('front/footer_view');
    }
}
