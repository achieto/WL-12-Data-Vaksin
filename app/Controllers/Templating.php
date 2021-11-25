<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\VaksinModel;

class Templating extends BaseController
{
    public function index()
	{
		$data = [
			'title' => "Beranda",
		];
		return view('v_beranda', $data);
	}

    public function login()
	{
		$data = [
			'title' => "Login",
		];
        echo view('layouts/v_header', $data);
        echo view('v_login');
	}
}
