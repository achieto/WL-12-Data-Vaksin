<?php

namespace App\Controllers;

class Admin extends BaseController
{
	public function index()
	{
		$session = session();
		echo "Welcome" .$session->get_data('username');
		return view('v_beranda');
	}
}
