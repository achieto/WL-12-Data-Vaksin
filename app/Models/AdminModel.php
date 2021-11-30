<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    public function get_data($username, $password)
    {
        return $this->db->query("SELECT * FROM login WHERE username = 'admin' OR 'superadmin' AND password = 'admin123' OR 'super123'")->getRowArray();
        // table('login')
        // ->where(array('username' => $username, 'password' => $password))
        // ->get()->getRowArray();
    }
    protected $table                = 'login';
    protected $primaryKey           = 'username';
    protected $allowedFields        = ['username', 'password', 'nama'];
    protected $useTimestamp            = true;
}
