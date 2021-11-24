<?php

namespace App\Controllers;
use App\Models\AdminModel;
class Login extends BaseController
{
	public function index()
	{
		return view('v_login');
	}

	public function login_action()
	{
		$admin = new AdminModel();
		$username = $this->request->getPost('Username');
		$password = $this->request->getPost('Password');

		$cek = $admin->get_data($username, $password);
		if (($cek['username'] == 'admin') && ($cek['password'] == 'admin123'))
		{
			session()->set('username', $cek['username']);
			session()->set('password', $cek['password']);
			session()->set('nama', $cek['nama']);
			return redirect()->to(base_url('home'));
		}
		else if (($cek['username'] == 'superadmin') && ($cek['password'] == 'super123'))
		{
			session()->set('username', $cek['username']);
			session()->set('password', $cek['password']);
			session()->set('nama', $cek['nama']);
			return redirect()->to(base_url('input'));
		}
		else {
			return redirect()->to(base_url('login'));
		}
	}
}
