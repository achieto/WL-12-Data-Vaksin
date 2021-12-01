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
		$data = [
			'title' => "Region 1",
		];

		return view("wilayah/v_wilayah1", $data);
	}

	public function wil2()
	{
		$data = [
			'title' => "Region 2",
		];
		return view("wilayah/v_wilayah2", $data);
	}

	public function wil3()
	{
		$data = [
			'title' => "Region 3",
		];
		return view("wilayah/v_wilayah3", $data);
	}

	public function wil4()
	{
		$data = [
			'title' => "Region 4",
		];
		return view("wilayah/v_wilayah4", $data);
	}

	public function create()
	{
		$data = [
			'title' => "Input Entry",
		];
		return view('v_input', $data);
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

		return redirect()->to(base_url('/wilayah' . $data['wilayah']));
	}

	public function delete($no_batch, $wilayah)
	{
		$row = new VaksinModel();
		$row->where(['no_batch' => $no_batch])->delete();
		return redirect()->to(base_url('wilayah' . $wilayah));
	}

	public function edit($no_batch)
	{
		$data = [
			'title' => "Edit Entry",
			'row' => $this->VaksinModel->getVaksin($no_batch)
		];

		return view("v_edit", $data);
	}

	public function update($no_batch, $wilayah)
	{
		$VaksinModel = model("VaksinModel");
		$data = $this->request->getPost();
		$VaksinModel->update($no_batch, $data);
		return redirect()->to(base_url('wilayah' . $wilayah));
	}
}