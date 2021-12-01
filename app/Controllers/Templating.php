<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\VaksinModel;

class Templating extends BaseController
{
    public function admin()
	{
		$VaksinModel = model("VaksinModel");
		$data = [
			'title' => "Home",
			'wilayah1' => $VaksinModel->where('wilayah', '1')->findAll(),
			'wilayah2' => $VaksinModel->where('wilayah', '2')->findAll(),
			'wilayah3' => $VaksinModel->where('wilayah', '3')->findAll(),
			'wilayah4' => $VaksinModel->where('wilayah', '4')->findAll(),
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
