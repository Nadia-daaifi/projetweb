<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelCoach extends Model
{
    protected $table = 'coach';
    protected $primaryKey = 'id_coach';
    protected $allowedFields = ['username', 'email', 'phone_num', 'password','photo','salary','adress','nb_abs'];

    public function add_coach($data)
    {
        return $this->insert($data);
    }
    public function getAllCoaches()
{
    return $this->findAll();
}

}
