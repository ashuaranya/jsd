<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data['page_title'] = 'JSD';
		return view('main', $data);
	}
}
