<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\VaksinModel;

class Templating extends BaseController
{
    public function admin()
	{
		$data = [
			'title' => "Home",
		];
		return view('v_admin', $data);
	}

	public function super()
	{
		$data = [
			'title' => "Home",
		];
		return view('v_super', $data);
	}

    public function login()
	{
		$data = [
			'title' => "Login",
		];
        echo view('layouts/v_header', $data);
        echo view('v_login');
	}

	public function about()
	{
		$data = [
			'title' => "About",
		];
        return view('v_about', $data);
	}
}
