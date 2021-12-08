<?php
namespace App\Models;
use CodeIgniter\Model;
class SuperModel extends Model
{
    public function get_data($username, $password)
    {
        return $this->db->table('loginsuper')->where(array('username' => $username, 'password' => $password))->get()->getRowArray();
    }
    protected $table                = 'loginsuper';
    protected $primaryKey           = 'username';
    protected $allowedFields        = ['username', 'password', 'nama'];
}
