<?php

namespace App\Controllers;


class Home extends BaseController
{

    public function index()
    {
        $data = array(
            'title' => 'Acceuil',

        );
        return view('acceuil', $data);
    }
    public function about()
    {
        $data = array(
            'title' => 'About',

        );
        return view('about', $data);
    }
    public function classes()
    {
        $data = array(
            'title' => 'Classes',

        );
        return view('classes', $data);
    }
    public function contact()
    {
        $data = array(
            'title' => 'Contact',

        );
        return view('contact', $data);
    }

}

