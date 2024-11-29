<?php
namespace App\Controllers;

use App\Models\ModelAuth;

class Auth extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->ModelAuth = new ModelAuth();
    }

    public function register()
    {
        $data = array(
            'title' => 'Register',

        );
        return view('register', $data);
    }
    public function save_register()
    {
        // Validation du formulaire
        if (
            $this->validate([
                'username' => [
                    'label' => 'Username',
                    'rules' => 'required|min_length[3]|is_unique[user.username]',
                    'errors' => [
                        'required' => 'You must choose a Username.',
                        'min_length' => 'The Username must be at least 3 characters long.',
                        'is_unique' => 'This Username is already taken.',
                    ]
                ],
                'email' => [
                    'label' => 'Email',
                    'rules' => 'required|valid_email|is_unique[user.email]',
                    'errors' => [
                        'required' => 'You must choose an email.',
                        'valid_email' => 'You must provide a valid email.',
                        'is_unique' => 'This email is already registered.',
                    ]
                ],
                'phone_num' => [
                    'label' => 'Phone number',
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'You must choose a Phone number.',
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
                'repassword' => [
                    'label' => 'Retype Password',
                    'rules' => 'required|matches[password]',
                    'errors' => [
                        'required' => 'You must confirm the Password.',
                        'matches' => 'Passwords do not match !!'
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
                'level' => 1,
                'photo' => $photoName // Stocker le nom de la photo
            ];

            // Sauvegarder les données dans la base de données
            $this->ModelAuth->save_register($data);

            // Message de succès et redirection
            session()->setFlashdata('succes', 'Registration successful');
            return redirect()->to(base_url('auth/register'));
        } else {
            // Si la validation échoue, retourner les erreurs
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('auth/register'));
        }
    }

    public function login()
    {
        $data = array(
            'title' => 'Login',

        );
        return view('login', $data);
    }

    public function check_login()
    {
        if (
            $this->validate([
                'email' => [
                    'label' => 'Email',
                    'rules' => 'required|valid_email',
                    'errors' => [
                        'required' => 'You must provide an email.',
                        'valid_email' => 'You must provide a valid email address.',
                    ]
                ],
                'password' => [
                    'label' => 'Password',
                    'rules' => 'required|min_length[8]',
                    'errors' => [
                        'required' => 'You must provide a password.',
                        'min_length' => 'The password must be at least 8 characters long.',
                    ]
                ],
            ])
        ) {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $user = $this->ModelAuth->login($email);

            // Vérifiez si l'utilisateur existe et si le mot de passe est correct
            if ($user && password_verify($password, $user['password'])) {
                session()->set('log', true);
                session()->set('username', $user['username']);
                session()->set('email', $user['email']);
                session()->set('level', $user['level']);
                session()->set('photo', $user['photo']);

                return redirect()->to(base_url('/'));
            } else {
                session()->setFlashdata('error', 'Invalid email or password.');
                return redirect()->to(base_url('auth/login'))->withInput();
            }
        } else {
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('auth/login'))->withInput();
        }
    }
    public function logout()
    {
        session()->remove('log');
        session()->remove('username');
        session()->remove('email');
        session()->remove('level');
        session()->remove('photo');
        session()->setFlashdata('succes', 'Logout success');
        return redirect()->to(base_url('auth/login'));
    }

}

