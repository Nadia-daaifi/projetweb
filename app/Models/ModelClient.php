<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelClient extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['username', 'email', 'phone_num', 'password', 'age', 'sexe', 'photo', 'nb_abs'];

    public function add_client($data)
    {
        return $this->insert($data);
    }
    // Fonction pour incrémenter les absences
    public function getAllClients()
    {
        return $this->findAll();
    }

}
