<?php
namespace App\Controllers;
use App\Models\UsersModel;
use App\Models\NavModel;

class Dashboard extends BaseController{
	public function index(){
		$session = session();
		//echo "Welcome back, ".$session->get('user_name');
		$data['page_title'] = 'Dashboard';
		$data['heading'] = 'Dashboard';
		$data['active_link'] = 'dashboard';
        $navModel = new NavModel();
        $data['left_navs'] = $navModel->orderBy('nav_order', 'ASC')->findAll();
		return view('dashboard', $data);
	}
}