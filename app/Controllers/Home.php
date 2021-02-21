<?php

namespace App\Controllers;

use App\Models\NavModel;

class Home extends BaseController
{
	public function index()
	{
		$data['page_title'] = 'JSD';
        $navModel = new NavModel();
        $data['navs'] = $navModel->orderBy('nav_order', 'ASC')->findAll();
		return view('main', $data);
	}
}
