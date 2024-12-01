<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAdd extends Model
{
    protected $table = 'coach';
    protected $primaryKey = 'id_coach';
    protected $allowedFields = ['username', 'email', 'phone_num', 'password','photo','salary','adress'];

    public function add_coach($data)
    {
        return $this->insert($data);
    }
}
