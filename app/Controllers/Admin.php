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
    public function profil()
    {
        $data = array(
            'title' => 'Profil',
            'isi' => 'profil'
        );
        return view('layout/wrapper', $data);
    }
    public function addCoach()
    {
        $data = array(
            'title' => 'Add coach',
            'isi' => 'admin/coach/ajout'
        );
        return view('layout/wrapper', $data);
    }
    
    public function cliste()
{
    // Charger le modèle
    $this->ModelCoach = new \App\Models\ModelCoach();

    // Récupérer les données des coachs
    $coachs = $this->ModelCoach->findAll();

    // Préparer les données pour la vue
    $data = [
        'title' => 'Show Coach',
        'isi' => 'admin/coach/liste',
        'coachs' => $coachs // Passer les données à la vue
    ];

    // Charger la vue
    return view('layout/wrapper', $data);
}

public function editCoach($id)
{
    $this->ModelCoach = new \App\Models\ModelCoach();

    // Récupérer le coach avec l'ID donné
    $coach = $this->ModelCoach->find($id);
    if (!$coach) {
        session()->setFlashdata('errors', 'Coach not found.');
        return redirect()->to(base_url('/admin/coach/show'));
    }
    $data = [
        'title' => 'Edit Coach',
        'coach' => $coach,
        'isi' => 'admin/coach/edit',

    ];
    return view('layout/wrapper', $data);
}
public function deleteCoach($id)
{
    $this->ModelCoach = new \App\Models\ModelCoach();

    // Supprimer le coach
    $this->ModelCoach->delete($id);

    // Rediriger avec un message de succès
    session()->setFlashdata('succes', 'Coach successfully deleted');
    return redirect()->to(base_url('/admin/coach/show'));
}

public function addClient()
{
    $data = array(
        'title' => 'Add client',
        'isi' => 'admin/client/ajout'
    );
    return view('layout/wrapper', $data);
}

public function claffiche()
{
// Charger le modèle
$this->ModelClient = new \App\Models\ModelClient();

// Récupérer les données des clients
$clients = $this->ModelClient->findAll();

// Préparer les données pour la vue
$data = [
    'title' => 'Show Client',
    'isi' => 'admin/client/liste',
    'clients' => $clients // Passer les données à la vue
];

// Charger la vue
return view('layout/wrapper', $data);
}

public function editClient($id)
{
    $this->ModelClient = new \App\Models\ModelClient();

    // Récupérer le client avec l'ID donné
    $client = $this->ModelClient->find($id);
    if (!$client) {
        session()->setFlashdata('errors', 'Client not found.');
        return redirect()->to(base_url('/admin/client/show'));
    }
    $data = [
        'title' => 'Edit Client',
        'client' => $client,
        'isi' => 'admin/client/edit',

    ];
    return view('layout/wrapper', $data);
}
public function deleteClient($id)
{
    $this->ModelClient = new \App\Models\ModelClient();

    // Supprimer le client
    $this->ModelClient->delete($id);

    // Rediriger avec un message de succès
    session()->setFlashdata('succes', 'Client successfully deleted');
    return redirect()->to(base_url('/admin/client/show'));
}
}

