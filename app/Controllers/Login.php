<?php
namespace App\Controllers;
use App\Models\AdminModel;
class Login extends BaseController
{
	public function index()
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/'));
		}
		return view('v_login');
	}

	public function login_action()
	{
		$admin = new AdminModel();
		// $table = 'admin';
		$username = $this->request->getPost('username');
		$password = $this->request->getPost('password');

		$cek = $admin->get_data($username, $password);

		if ($cek != null) {
			$login = [
					'username' => $username
				];
				session()->set($login);
				return redirect()->to(base_url('admin'));
		} else {
			session()->setFlashdata('gagal', 'Username/Password salah');
			return redirect()->to(base_url('/'));
		}
	}

	public function logout()
	{
		session()->destroy();
		return redirect()->to(base_url('/'));
	}
}