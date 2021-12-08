<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\VaksinModel;

// $session = session();

class VaksinController extends BaseController
{
	protected $VaksinModel;

	public function __construct()
	{
		$this->VaksinModel = new VaksinModel();
	}

	public function index()
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/'));
		}
		
		$VaksinModel = model("VaksinModel");
		$data = [
			'vaksinasi' => $VaksinModel->findAll()
		];
		return view("v_home", $data);
	}

	public function wil1()
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/'));
		}

		$data = [
			'wilayah1' => $this->VaksinModel->where('wilayah', '1')->findAll(),
			'title' => "Region 1",
		];

		return view("wilayah/v_wilayah1", $data);
	}

	public function wil2()
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/'));
		}

		$data = [
			'wilayah2' => $this->VaksinModel->where('wilayah', '2')->findAll(),
			'title' => "Region 2",
		];
		return view("wilayah/v_wilayah2", $data);
	}

	public function wil3()
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/'));
		}

		$data = [
			'wilayah3' => $this->VaksinModel->where('wilayah', '3')->findAll(),
			'title' => "Region 3",
		];
		return view("wilayah/v_wilayah3", $data);
	}

	public function wil4()
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/'));
		}

		$data = [
			'wilayah4' => $this->VaksinModel->where('wilayah', '4')->findAll(),
			'title' => "Region 4",
		];
		return view("wilayah/v_wilayah4", $data);
	}

	public function create()
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/'));
		}

		$data = [
			'title' => "Input Entry",
		];
		return view('v_input', $data);
	}

	public function store()
	{
		if(session()->get('username')==''){
			session()->setFlashData('gagal', 'Anda Belum Login');
			return redirect()->to(base_url('login'));
		}
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
		if(session()->get('username')==''){
			session()->setFlashData('gagal', 'Anda Belum Login');
			return redirect()->to(base_url('login'));
		}
		$row = new VaksinModel();
		$row->where(['no_batch' => $no_batch])->delete();
		return redirect()->to(base_url('wilayah' . $wilayah));
	}

	public function edit($no_batch)
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/'));
		}

		$data = [
			'title' => "Edit Entry",
			'row' => $this->VaksinModel->getVaksin($no_batch)
		];

		return view("v_edit", $data);
	}

	public function update($no_batch, $wilayah)
	{
		if(session()->get('username')==''){
			session()->setFlashData('gagal', 'Anda Belum Login');
			return redirect()->to(base_url('login'));
		}
		$VaksinModel = model("VaksinModel");
		$data = $this->request->getPost();
		$VaksinModel->update($no_batch, $data);
		return redirect()->to(base_url('wilayah' . $wilayah));
	}
}
