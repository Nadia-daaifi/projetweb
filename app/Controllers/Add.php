<?php
namespace App\Controllers;

use App\Models\ModelAdd;

class Add extends BaseController {

    public function __construct() {
        helper('form');
        $this->ModelAdd = new ModelAdd();
    }
    public function add_coach()
    {
        
        // Validation du formulaire
        if (
            $this->validate([
                'username' => [
                    'label' => 'name',
                    'rules' => 'required|min_length[3]|is_unique[coach.username]',
                    'errors' => [
                        'required' => 'You must choose a Name.',
                        'min_length' => 'The Name must be at least 3 characters long.',
                        'is_unique' => 'This Name is already taken.',
                    ]
                ],
                'photo' => [
                    'label' => 'Photo',
                    'rules' => 'uploaded[photo]|is_image[photo]',
                    'errors' => [
                        'uploaded' => 'You must choose a Photo.',
                        'is_image' => 'The file must be a valid image.',
                        'max_size' => 'The image size must not exceed 2MB.',
                    ]
                ],
                'phone_num' => [
                    'label' => 'Phone number',
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'You must choose a Phone number.',
                    ]
                ],
                'salary' => [
                    'label' => 'Salary',
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'You must choose a Salary.',
                    ]
                ],
                'adress' => [
                    'label' => 'Adress',
                    'rules' => 'required|min_length[10]',
                    'errors' => [
                        'required' => 'You must choose an Adress.',
                        'min_length' => 'The Name must be at least 10 characters long.',
                    ]
                ],
                'email' => [
                    'label' => 'Email',
                    'rules' => 'required|valid_email|is_unique[coach.email]',
                    'errors' => [
                        'required' => 'You must choose an email.',
                        'valid_email' => 'You must provide a valid email.',
                        'is_unique' => 'This email is already registered.',
                    ]
                ],
                'password' => [
                    'label' => 'Password',
                    'rules' => 'required|min_length[8]',
                    'errors' => [
                        'required' => 'You must choose a Password.',
                        'min_length' => 'The Password must be at least 8 characters long.',
                    ]
                ],
                
            ])
        ) {
            // Si la validation est réussie

            // Récupérer le fichier téléchargé
            $photo = $this->request->getFile('photo');

            // Vérifier si le fichier est valide et le déplacer
            if ($photo->isValid() && !$photo->hasMoved()) {
                // Générer un nom aléatoire pour la photo
                $photoName = $photo->getRandomName();
                // Déplacer l'image dans le dossier 'public/img'
                $photo->move(ROOTPATH . 'public/img', $photoName);
            } else {
                // Si le fichier n'est pas valide, utiliser une photo par défaut
                $photoName = 'default.jpg';
            }

            // Créer un tableau de données pour l'utilisateur
            $data = [
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'phone_num' => $this->request->getPost('phone_num'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT), // Hash du mot de passe
                'photo' => $photoName, // Stocker le nom de la photo
                'salary' => $this->request->getPost('salary'),
                'adress' => $this->request->getPost('adress')
            ];

            // Sauvegarder les données dans la base de données
            $this->ModelAdd->add_coach($data);

            // Message de succès et redirection
            session()->setFlashdata('success', 'Coach successfuly added');
            return redirect()->to(base_url('admin/addCoach'));

        } else {
            // Si la validation échoue, retourner les erreurs
            session()->setFlashdata('erreurs', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('/admin/addCoach'))->withInput();
        }
    }
  

    
 

}

