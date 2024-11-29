<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuth extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['username', 'email', 'phone_num', 'password', 'level','photo'];

    public function save_register($data)
    {
        return $this->insert($data);
    }
    public function login($email)
    {
        return $this->where('email', $email)->first(); // Récupère l'utilisateur par email
    }


}
