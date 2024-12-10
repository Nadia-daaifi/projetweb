<?php

namespace App\Controllers;
use App\Models\MessageModel;

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

    public function store()
    {
        $messageModel = new MessageModel();

        // Validation des données
        $validation = \Config\Services::validation();
        $validation->setRules([
            'name' => 'required',
            'email' => 'required|valid_email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Enregistrement dans la base de données
        $messageModel->save([
            'name'    => $this->request->getPost('name'),
            'email'   => $this->request->getPost('email'),
            'subject' => $this->request->getPost('subject'),
            'message' => $this->request->getPost('message'),
        ]);

        return redirect()->back()->with('success', 'Message envoyé avec succès.');
    }
    public function profil()
    {
       $userModel =  new \App\Models\ModelClient();
        $user = $userModel->where('email', session()->get('email'))->first(); 
        return view('profil',['user' => $user]);
    }


}

