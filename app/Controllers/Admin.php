<?php

namespace App\Controllers;

class Admin extends BaseController
{
	public function index()
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/'));
		}
		return view('v_beranda');
	}
}
