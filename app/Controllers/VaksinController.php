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
		if(session()->get('username')==''){
			session()->setFlashData('gagal', 'Anda Belum Login');
			return redirect()->to(base_url('login'));
		}
		$this->VaksinModel = new VaksinModel();
	}

	public function entry_super()
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/'));
		}
		
		$VaksinModel = model("VaksinModel");
		$data = [
			'title' => "Entry Vaksin",
			'vaksinasi' => $VaksinModel->findAll()
		];
		return view("v_entrysuper", $data);
	}

	public function entry_valid()
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/'));
		}
		
		$VaksinModel = model("VaksinModel");
		$data = [
			'title' => "Entry Vaksin",
			'vaksinasi' => $VaksinModel->findAll()
		];
		return view("v_entryvalid", $data);
	}

	public function wil1()
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/'));
		}

		$data = [
			// 'wilayah1' => $this->VaksinModel->where('wilayah', '1')->findAll(),
			'wilayah1' => $this->VaksinModel->where('wilayah', '1')->paginate(5, 'wilayah1'),
			'pager' => $this->VaksinModel->where('wilayah', '1')->pager,
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
			'wilayah2' => $this->VaksinModel->where('wilayah', '2')->paginate(5, 'wilayah2'),
			'pager' => $this->VaksinModel->where('wilayah', '2')->pager,
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
			'wilayah3' => $this->VaksinModel->where('wilayah', '3')->paginate(5, 'wilayah3'),
			'pager' => $this->VaksinModel->where('wilayah', '3')->pager,
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
			'wilayah4' => $this->VaksinModel->where('wilayah', '4')->paginate(5, 'wilayah4'),
			'pager' => $this->VaksinModel->where('wilayah', '4')->pager,
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
			'status' => 1
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
		$VaksinModel = model("VaksinModel");
		$data = $this->request->getPost();
		$VaksinModel->update($no_batch, $data);
		return redirect()->to(base_url('wilayah' . $wilayah));
	}

	public function cetak($no_batch)
	{
		$data = [
			'row' => $this->VaksinModel->getVaksin($no_batch)
		];

		return view("cetak", $data);
	}

	public function validasi_super($no_batch)
	{
		$data = [
			'status' => 2
		];
		$where = array('no_batch' => $no_batch);

		$this->VaksinModel->update($where, $data, 'vaksinasi');
		return redirect()->to(base_url('entrysuper'));
	}

	public function validasi_valid($no_batch)
	{
		$data = [
			'status' => 2
		];
		$where = array('no_batch' => $no_batch);

		$this->VaksinModel->update($where, $data, 'vaksinasi');
		return redirect()->to(base_url('entryvalid'));
	}
}
