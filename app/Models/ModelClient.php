<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelClient extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['username', 'email', 'phone_num', 'password','age','sexe','photo'];

    public function add_client($data)
    {
        return $this->insert($data);
    }
    public function getAllClients()
{
    return $this->findAll();
}

}
