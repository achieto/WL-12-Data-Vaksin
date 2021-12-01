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
		$table = 'admin';
		$username = $this->request->getPost('username');
		// $this->request->getPost('Username');
		$password = $this->request->getPost('password');
		// $this->request->getPost('Password');
		$row = $model->get_data($username, $table);
		//var_dump($row);
		if ($row == NULL){
			session()->setFlashdata('pesan', 'Username anda salah');
			return redirect()->to(base_url('admin'));
		}
		if (password_verify($password, $row->password)){
			$data = array(
				'log'	=> TRUE,
				'nama'	=> $row->nama,
				'username'	=> $row->username,
			);
			session()->set($data);
			session()->setFlashdata('pesan', 'Berhasil Login');
			return redirect()->to(base_url('input'));
		}
			session()->setFlashdata('pesan', 'password salah');
			return redirect()->to(base_url('login'));

		// $cek = $admin->get_data($username, $password);
		//if (($username == 'admin') && ($password == 'admin123')) {
			// session()->set('username', $cek['username']);
			// session()->set('password', $cek['password']);
			// session()->set('nama', $cek['nama']);
			//return redirect()->to(base_url('admin'));
		//} else if (($username == 'superadmin') && ($password == 'super123'))
			// {
			// 	session()->set('username', $cek['username']);
			// 	session()->set('password', $cek['password']);
			// 	session()->set('nama', $cek['nama']);
			//return redirect()->to(base_url('input'));
		// }
		//else {
			//return redirect()->to(base_url('/'));
		//}
		// return redirect()->to('/admin');
	}
}