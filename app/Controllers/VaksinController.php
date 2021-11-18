<?php

namespace App\Controllers;

use App\Controllers\BaseController;
<<<<<<< HEAD
use App\Models\VaksinModel;

class VaksinController extends BaseController
{
	protected $VaksintModel;

	public function __construct()
	{
		$this->VaksinModel = new VaksinModel();
	}

=======

class VaksinController extends BaseController
{
>>>>>>> 5e6f469bdc96facd1112f0fe0fb05b03596b12ef
	public function index()
	{
		$VaksinModel = model("VaksinModel");
		$data = [
			'vaksinasi' => $VaksinModel->findAll()
		];
		return view("v_home", $data);
	}

	public function create()
	{
		return view('v_input');
	}

	public function store()
	{
		$data = [
			'no_batch' => $this->request->getVar('no_batch'),
			'nik' => $this->request->getVar('nik'),
			'nama' => $this->request->getVar('nama'),
			'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
			'usia' => $this->request->getVar('usia'),
			'dosis' => $this->request->getVar('dosis'),
			'jenis_vaksin' => $this->request->getVar('jenis_vaksin'),
		];
<<<<<<< HEAD
		
		$VaksinModel = model("VaksinModel");
		$VaksinModel->insert($data);
		return redirect()->to(base_url('/home'));
	}

	public function delete($no_batch)
	{
		$row = new VaksinModel();
		$row->where(['no_batch' => $no_batch])->delete();
		return redirect()->to(base_url('home/'));
	}

	public function edit($no_batch)
	{
		$data = [
			'row' => $this->VaksinModel->getVaksin($no_batch)
		];

		return view("v_edit", $data);
	}

	public function update($no_batch)
	{
		$VaksinModel = model("VaksinModel");
		$data = $this->request->getPost();
		$VaksinModel->update($no_batch, $data);
		return redirect()->to(base_url('home/'));
	}
}
=======
		$PostModel = model("VaksinModel");
		$PostModel->insert($data);
		return redirect()->to(base_url('/home'));
	}
}
>>>>>>> 5e6f469bdc96facd1112f0fe0fb05b03596b12ef
