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
        // echo view('layouts/v_header', $data);
		// echo view('layouts/v_sidebar');
        // echo view('layouts/v_topbar');
        // echo view('index');
		// echo view('layouts/v_footer');
		return view('v_beranda', $data);
	}

    public function login()
	{
		$data = [
			'title' => "Login",
		];
        echo view('layouts/v_header', $data);
        echo view('v_masuk');
	}
}
