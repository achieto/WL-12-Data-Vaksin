<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\VaksinModel;

class VaksinController extends BaseController
{
	protected $VaksintModel;

	public function __construct()
	{
		$this->VaksinModel = new VaksinModel();
	}

	public function index()
	{
		$VaksinModel = model("VaksinModel");
		$data = [
			'vaksinasi' => $VaksinModel->findAll()
		];
		return view("v_home", $data);
	}

	public function wil1()
	{
		return view("v_wilayah1");
	}

	public function wil2()
	{
		return view("v_wilayah2");
	}

	public function wil3()
	{
		return view("v_wilayah3");
	}

	public function wil4()
	{
		return view("v_wilayah4");
	}

	public function create()
	{
		return view('v_input');
	}

	public function store()
	{
		$data = [
			'no_batch' => $this->request->getVar('no_batch'),
			'wilayah' => $this->request->getVar('wilayah'),
			'nik' => $this->request->getVar('nik'),
			'nama' => $this->request->getVar('nama'),
			'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
			'usia' => $this->request->getVar('usia'),
			'kategori' => $this->request->getVar('kategori'),
			'dosis' => $this->request->getVar('dosis'),
			'jenis_vaksin' => $this->request->getVar('jenis_vaksin'),
		];
		
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
