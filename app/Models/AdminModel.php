<?php
namespace App\Models;
use CodeIgniter\Model;
class AdminModel extends Model
{
    public function get_data($username, $password)
    {
        return $this->db->table('login')->where(array('username' => $username, 'password' => $password))->get()->getRowArray();
        // $builder = $this->db->table($tbl);
        // $builder->where('username', $username);
        // $log = $builder->get()->getRow;
        // return $log;
    }
    protected $table                = 'login';
    protected $primaryKey           = 'username';
    protected $allowedFields        = ['username', 'password', 'nama'];
    // protected $useTimestamp            = true;
}
