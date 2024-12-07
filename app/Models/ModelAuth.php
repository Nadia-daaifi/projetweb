<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuth extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['username', 'email', 'phone_num', 'password','photo','age','sexe'];

    public function save_register($data)
    {
        return $this->insert($data);
    }
    public function login($email)
    {
        // Rechercher dans la table 'admin'
        $admin = $this->db->table('admin')->where('email', $email)->get()->getRowArray();
        if ($admin) {
            $admin['type'] = 'admin'; // Indiquer que c'est un admin
            return $admin;
        }
    
        // Rechercher dans la table 'user' (clients)
        $client = $this->db->table('user')->where('email', $email)->get()->getRowArray();
        if ($client) {
            $client['type'] = 'client'; // Indiquer que c'est un client
            return $client;
        }
    
        // Rechercher dans la table 'coach'
        $coach = $this->db->table('coach')->where('email', $email)->get()->getRowArray();
        if ($coach) {
            $coach['type'] = 'coach'; // Indiquer que c'est un coach
            return $coach;
        }
    
        // Aucun utilisateur trouvé
        return null;
    }
    


}
