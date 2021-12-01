<?php

namespace App\Controllers;

class Admin extends BaseController
{
	public function index()
	{
		$session = session();
		echo "Welcome" .$session->get('username');
		return view('v_beranda');
	}
}
