<?php

namespace App\Controllers;


class Admin extends BaseController
{

    public function index()
    {
        $data = array(
            'title' => 'Home',
            'isi' => 'home'
        );
        return view('layout/wrapper', $data);
    }
    public function addCoach()
    {
        $data = array(
            'title' => 'Add coach',
            'isi' => 'coach/ajout'
        );
        return view('layout/wrapper', $data);
    }
    public function cliste()
    {
        $data = array(
            'title' => 'Show choach',
            'isi' => 'coach/liste'
        );
        return view('layout/wrapper', $data);
    }

}

