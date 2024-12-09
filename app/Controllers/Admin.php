<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $this->ModelCoach = new \App\Models\ModelCoach();

        // Récupérer les données des coachs
        $coachs = $this->ModelCoach->findAll();
        
        $data = array(
            'title' => 'Home',
            'isi' => 'admin/home',
            'coachs' => $coachs // Passer les données à la vue
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
    public function calender()
    {
        $data = array(
            'title' => 'Calender',
            'isi' => 'admin/calender'
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

public function markAbsence($id)
{
    $this->ModelClient = new \App\Models\ModelClient();
    // Supprimer le client
    $this->ModelClient->set('nb_abs', 'nb_abs + 1', false) // Incrémenter sans écraser la valeur actuelle
    ->where('id_user', $id)
    ->update();
    // Ajouter un message de succès
    session()->setFlashdata('succes', 'Absence marked successfully.');
    return redirect()->back();
}
public function showAbs()
{
// Charger le modèle
$this->ModelClient = new \App\Models\ModelClient();

// Récupérer les données des clients
$clients = $this->ModelClient->findAll();

// Préparer les données pour la vue
$data = [
    'title' => 'Show Client',
    'isi' => 'admin/absence/clients',
    'clients' => $clients // Passer les données à la vue
];

// Charger la vue
return view('layout/wrapper', $data);
}

public function markAbs_coach($id)
{
    $this->ModelCoach = new \App\Models\ModelCoach();
    // Supprimer le coach
    $this->ModelCoach->set('nb_abs', 'nb_abs + 1', false) // Incrémenter sans écraser la valeur actuelle
    ->where('id_coach', $id)
    ->update();
    // Ajouter un message de succès
    session()->setFlashdata('succes', 'Absence marked successfully.');
    return redirect()->back();
}
public function showAbs_coach()
{
// Charger le modèle
$this->ModelCoach = new \App\Models\ModelCoach();

// Récupérer les données des coachs
$coachs = $this->ModelCoach->findAll();

// Préparer les données pour la vue
$data = [
    'title' => 'Show Coach',
    'isi' => 'admin/absence/coachs',
    'coachs' => $coachs // Passer les données à la vue
];

// Charger la vue
return view('layout/wrapper', $data);
}

public function showClasses()
    {
        $this->classModel = new \App\Models\ClassModel();
        $data = [
            'title' => 'Show Classes',
            'isi' => 'admin/classes/index',
            'classes' => $this->classModel->getClasses(),
        ];
        return view('layout/wrapper', $data);
    }

    // Afficher le formulaire pour ajouter une classe
    public function addClass()
    {
       $this->ModelCoach = new \App\Models\ModelCoach();
        $data = [
            'title' => 'add Classe',
            'isi' => 'admin/classes/add',
            'coachs' => $this->ModelCoach->findAll(),
        ];
        return view('layout/wrapper', $data);
    }

    // Sauvegarder une nouvelle classe
    public function saveClass()
    {
        $this->classModel = new \App\Models\ClassModel();
        $this->classModel->save([
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'start_time' => $this->request->getPost('start_time'),
            'end_time' => $this->request->getPost('end_time'),
            'coach' => $this->request->getPost('coach'),
        ]);
        return redirect()->to('/admin/classes')->with('success', 'Class added successfully!');
    }

    // Afficher le formulaire pour éditer une classe
    public function editClass($id)
    {
        $this->ModelCoach = new \App\Models\ModelCoach();
        $this->classModel = new \App\Models\ClassModel();
        $data = [
            'class' => $this->classModel->find($id),
            'title' => 'edit Classe',
            'isi' => 'admin/classes/edit',
            'coachs' => $this->ModelCoach->findAll(),
        ];
        return view('layout/wrapper', $data);
       
    }

    // Mettre à jour une classe
    public function updateClass($id)
    {
        $this->classModel = new \App\Models\ClassModel();
        $this->classModel->update($id, [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'start_time' => $this->request->getPost('start_time'),
            'end_time' => $this->request->getPost('end_time'),
            'coach' => $this->request->getPost('coach'),
        ]);
        return redirect()->to('/admin/classes')->with('success', 'Class updated successfully!');
    }

    // Supprimer une classe
    public function deleteClass($id)
    {
        $this->classModel = new \App\Models\ClassModel();
        $this->classModel->delete($id);
        return redirect()->to('/admin/classes')->with('success', 'Class deleted successfully!');
    }

}


