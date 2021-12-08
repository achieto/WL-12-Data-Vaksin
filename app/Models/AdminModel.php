<?php
namespace App\Models;
use CodeIgniter\Model;
class AdminModel extends Model
{
    public function get_data($username, $password)
    {
        return $this->db->table('login')->where(array('username' => $username, 'password' => $password))->get()->getRowArray();
    }
    protected $table                = 'login';
    protected $primaryKey           = 'username';
    protected $allowedFields        = ['username', 'password', 'nama'];
}
