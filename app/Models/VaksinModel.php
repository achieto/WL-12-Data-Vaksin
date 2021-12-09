<?php

namespace App\Models;


use CodeIgniter\Model;
$db = \Config\Database::connect();

class VaksinModel extends Model
{
	protected $table                = 'vaksinasi';
	protected $primaryKey           = 'no_batch';
	protected $allowedFields        = ['no_batch', 'wilayah', 'nik', 'nama', 'jenis_kelamin', 'usia', 'kategori', 'dosis', 'jenis_vaksin', 'updated_at', 'status'];
	protected $useTimestamp			= true;

	public function getVaksin($no_batch = false)
	{
		if ($no_batch == false) {
			return $this->findAll();
		}
		return $this->where(['no_batch' => $no_batch])->first();
	}
}
