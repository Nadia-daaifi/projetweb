<?php
namespace App\Controllers;

use App\Models\ModelAuth;
use App\Models\ModelCoach;
use App\Models\ModelClient;

class Auth extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->ModelAuth = new ModelAuth();
        $this->ModelCoach = new ModelCoach();
        $this->ModelClient = new ModelClient();
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
                'age' => [
                    'label' => 'Age',
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'You must choose an age.',
                    ]
                ],
                'sexe' => [
                    'label' => 'Sexe',
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'You must choose your sexe.',
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
                'age'=>$this->request->getPost('age'),
                'sexe'=>$this->request->getPost('sexe'),
            ];

            // Sauvegarder les données dans la base de données
            $this->ModelAuth->save_register($data);

            // Message de succès et redirection
            session()->setFlashdata('succes', 'Registration successful');
            return redirect()->to(base_url('auth/login'));
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
                'email' => 'required|valid_email',
                'password' => 'required|min_length[8]',
            ])
        ) {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $user = $this->ModelAuth->login($email);

            if ($user && password_verify($password, $user['password'])) {
                session()->set([
                    'log' => true,
                    'username' => $user['username'],
                    'email' => $user['email'],
                    'type' => $user['type'], // Stocker le type d'utilisateur
                    'photo' => $user['photo'],
                ]);

                // Redirection en fonction du rôle
                if ($user['type'] === 'admin') {
                    return redirect()->to(base_url('/admin'));
                } elseif ($user['type'] === 'client') {
                    return redirect()->to(base_url('/fitheal/acceuil'));
                }
            } else {
                session()->setFlashdata('error', 'Invalid email or password.');
                return redirect()->to(base_url('auth/login'))->withInput();
            }
        }

        session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
        return redirect()->to(base_url('auth/login'))->withInput();
    }


    public function logout()
    {
        session()->remove('log');
        session()->remove('username');
        session()->remove('email');
        session()->remove('photo');
        session()->setFlashdata('succes', 'Logout success');
        return redirect()->to(base_url('auth/login'));
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
            $this->ModelCoach->add_coach($data);

            // Message de succès et redirection
            session()->setFlashdata('success', 'Coach successfuly added');
            return redirect()->to(base_url('admin/addCoach'));

        } else {
            // Si la validation échoue, retourner les erreurs
            session()->setFlashdata('erreurs', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('/admin/coach/add'))->withInput();
        }
    }

    public function updateCoach($id)
    {
        $model = new ModelCoach();

        // Validation des données
        if (
            $this->validate([
                'username' => 'required|min_length[3]',
                'email' => 'required|valid_email',
                'phone_num' => 'required',
                'salary' => 'required',
                'adress' => 'required|min_length[10]',
            ])
        ) {
            // Récupérer le fichier photo si fourni
            $photo = $this->request->getFile('photo');
            $coach = $model->find($id);
            $photoName = $coach['photo']; // Garder la photo existante par défaut

            if ($photo && $photo->isValid() && !$photo->hasMoved()) {
                // Supprimer l'ancienne photo
                if ($coach['photo'] !== 'default.jpg') {
                    unlink(ROOTPATH . 'public/img/' . $coach['photo']);
                }

                // Déplacer la nouvelle photo
                $photoName = $photo->getRandomName();
                $photo->move(ROOTPATH . 'public/img', $photoName);
            }

            // Mettre à jour les données dans la base
            $data = [
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'phone_num' => $this->request->getPost('phone_num'),
                'salary' => $this->request->getPost('salary'),
                'adress' => $this->request->getPost('adress'),
                'photo' => $photoName,
            ];
            $model->update($id, $data);

            // Redirection avec succès
            session()->setFlashdata('succes', 'Coach successfully updated.');
            return redirect()->to(base_url('/admin/coach/show'));
        } else {
            // Retourner les erreurs
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->back()->withInput();
        }
    }

    public function add_client()
    {
        // Validation du formulaire
        if (
            $this->validate([
                'username' => [
                    'label' => 'name',
                    'rules' => 'required|min_length[3]|is_unique[user.username]',
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
                'sexe' => [
                    'label' => 'sexe',
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'You must choose your sexe.',
                    ]
                ],
                'age' => [
                    'label' => 'age',
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'You must choose an age.',
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
                'sexe' => $this->request->getPost('sexe'),
                'age' => $this->request->getPost('age')
            ];

            // Sauvegarder les données dans la base de données
            $this->ModelClient->add_client($data);

            // Message de succès et redirection
            session()->setFlashdata('success', 'Client successfuly added');
            return redirect()->to(base_url('admin/client/add'));

        } else {
            // Si la validation échoue, retourner les erreurs
            session()->setFlashdata('erreurs', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('/admin/client/add'))->withInput();
        }
    }

    public function updateClient($id)
    {
        $modelcl = new ModelClient();

        // Validation des données
        if (
            $this->validate([
                'username' => 'required|min_length[3]',
                'email' => 'required|valid_email',
                'phone_num' => 'required',
                'sexe' => 'required',
                'age' => 'required',
            ])
        ) {
            // Récupérer le fichier photo si fourni
            $photo = $this->request->getFile('photo');
            $client = $modelcl->find($id);
            $photoName = $client['photo']; // Garder la photo existante par défaut

            if ($photo && $photo->isValid() && !$photo->hasMoved()) {
                // Supprimer l'ancienne photo
                if ($client['photo'] !== 'default.jpg') {
                    unlink(ROOTPATH . 'public/img/' . $client['photo']);
                }

                // Déplacer la nouvelle photo
                $photoName = $photo->getRandomName();
                $photo->move(ROOTPATH . 'public/img', $photoName);
            }

            // Mettre à jour les données dans la base
            $data = [
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'phone_num' => $this->request->getPost('phone_num'),
                'sexe' => $this->request->getPost('sexe'),
                'age' => $this->request->getPost('age'),
                'photo' => $photoName,
            ];
            $modelcl->update($id, $data);

            // Redirection avec succès
            session()->setFlashdata('succes', 'Client successfully updated.');
            return redirect()->to(base_url('/admin/client/show'));
        } else {
            // Retourner les erreurs
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->back()->withInput();
        }
    }
    public function forgotPassword()
    {
        return view('forgot_password');
    }
    
    public function processForgotPassword()
    {
        $email = $this->request->getPost('email');
    
        // Vérifiez si l'email existe dans la base de données
        $userModel = new ModelClient();
        $user = $userModel->where('email', $email)->first();
    
        if (!$user) {
            return redirect()->back()->with('error', 'Email address not found.');
        }
    
        // Générer un mot de passe temporaire
        $newPassword = bin2hex(random_bytes(4)); // Exemple : un mot de passe temporaire de 8 caractères
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT); // Hachage du mot de passe
    
        // Mettre à jour le mot de passe dans la base de données
        $userModel->update($user['id_user'], ['password' => $hashedPassword]);
    
        // Préparer et envoyer l'email
        $subject = "Your Temporary Password";
        $message = "Your temporary password is: $newPassword. Please log in and change it immediately.";
        $this->sendEmail($email, $subject, $message);
    
        // Afficher un message de succès
        return redirect()->back()->with('success','A new temporary password has been sent to your email address.');
    }
    
    private function sendEmail($to, $subject, $message)
    {
        // Utiliser la bibliothèque Email de CodeIgniter pour envoyer un email (assurez-vous de configurer l'email dans CodeIgniter)
        $email = \Config\Services::email();
    
        $email->setTo($to);
        $email->setSubject($subject);
        $email->setMessage($message);
        
        if (!$email->send()) {
            // Si l'envoi échoue
            log_message('error', 'Failed to send email to: ' . $to);
        }
    }
    

}

