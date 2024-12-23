<?php

namespace App\Models;

use CodeIgniter\Model;

class MessageModel extends Model
{
    protected $table = 'message';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'subject', 'message'];
    protected $useTimestamps = true;
}

?>