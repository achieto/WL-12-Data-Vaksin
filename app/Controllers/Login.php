<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Login extends BaseController
{
	// public function index()
	// {
	// 	return view('v_beranda');
	// }

	public function login_action()
	{
		$admin = new AdminModel();
		$username = $this->request->getVar('username');
		// $this->request->getPost('Username');
		$password = $this->request->getVar('password');
		// $this->request->getPost('Password');

		// $cek = $admin->get_data($username, $password);
		if (($username == 'admin') && ($password == 'admin123')) {
			// session()->set('username', $cek['username']);
			// session()->set('password', $cek['password']);
			// session()->set('nama', $cek['nama']);
			return redirect()->to(base_url('admin'));
		} else if (($username == 'superadmin') && ($password == 'super123'))
			// {
			// 	session()->set('username', $cek['username']);
			// 	session()->set('password', $cek['password']);
			// 	session()->set('nama', $cek['nama']);
			return redirect()->to(base_url('input'));
		// }
		else {
			return redirect()->to(base_url('/'));
		}
		// return redirect()->to('/admin');
	}
}
