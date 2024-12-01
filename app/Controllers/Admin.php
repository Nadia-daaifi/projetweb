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
    // Charger le modèle
    $this->ModelAdd = new \App\Models\ModelAdd();

    // Récupérer les données des coachs
    $coachs = $this->ModelAdd->findAll();

    // Préparer les données pour la vue
    $data = [
        'title' => 'Show Coach',
        'isi' => 'coach/liste',
        'coachs' => $coachs // Passer les données à la vue
    ];

    // Charger la vue
    return view('layout/wrapper', $data);
}

public function editCoach($id)
{
    $this->ModelAdd = new \App\Models\ModelAdd();

    // Récupérer le coach avec l'ID donné
    $coach = $this->ModelAdd->find($id);
    if (!$coach) {
        session()->setFlashdata('errors', 'Coach not found.');
        return redirect()->to(base_url('/admin/Cliste'));
    }
    $data = [
        'title' => 'Edit Coach',
        'coach' => $coach,
        'isi' => 'coach/edit',

    ];
    return view('layout/wrapper', $data);
}
public function deleteCoach($id)
{
    $this->ModelAdd = new \App\Models\ModelAdd();

    // Supprimer le coach
    $this->ModelAdd->delete($id);

    // Rediriger avec un message de succès
    session()->setFlashdata('succes', 'Coach successfully deleted');
    return redirect()->to(base_url('/admin/Cliste'));
}


}

