<?php
namespace App\Models;

use CodeIgniter\Model;

class ClassModel extends Model
{
    protected $table = 'classes';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'description', 'start_time', 'end_time', 'coach'];

    public function getClasses()
    {
        return $this->select('classes.*, coach.username as coach_name')
                    ->join('coach', 'coach.id_coach = classes.coach')
                    ->findAll();
    }
}

?>