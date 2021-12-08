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
		$session = \Config\Services::session();
		$session = session();
		$admin = new AdminModel();
		// $table = 'admin';
		$username = $this->request->getPost('username');
		// $this->request->getPost('Username');
		$password = $this->request->getPost('password');
		// $this->request->getPost('Password');
		$cek = $admin->get_data($username, $password);


		$cek = $admin->get_data($username, $password);
		if ($cek != null) {
			if(($cek['username'] == "admin") && ($cek['password'] == "admin123")) {
				session()->set('username', $cek['username']);
				session()->set('password', $cek['password']);
				return redirect()->to(base_url('admin'));
			} 
			else if(($cek['username'] == "superadmin") && ($cek['password'] == "super123")) {
				session()->set('username', $cek['username']);
				session()->set('password', $cek['password']);
				return redirect()->to(base_url('super'));
			} 
			else 
			{
				session()->setFlashdata('gagal', 'Username/Password salah');
				return redirect()->to(base_url('login'));
			}
		}else {
			session()->setFlashdata('gagal', 'Username/Password salah');
			return redirect()->to(base_url('login'));
		}
	}

	public function logout()
	{
		session()->destroy();
		return redirect()->to(base_url('/login'));
	}
		// $row = $model->get_data($username, $table);
		//var_dump($row);
		// if ($row == NULL){
		// 	session()->setFlashdata('pesan', 'Username anda salah');
		// 	return redirect()->to(base_url('admin'));
		// }
		// if (password_verify($password, $row->password)){
		// 	$data = array(
		// 		'log'	=> TRUE,
		// 		'nama'	=> $row->nama,
		// 		'username'	=> $row->username,
		// 	);
		// 	session()->set($data);
		// 	session()->setFlashdata('pesan', 'Berhasil Login');
		// 	return redirect()->to(base_url('input'));
		// }
		// 	session()->setFlashdata('pesan', 'password salah');
		// 	return redirect()->to(base_url('login'));
}