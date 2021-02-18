<?php

namespace App\Controllers;
use App\Models\NavModel;
use App\Controllers\BaseController;

class Nav extends BaseController
{
    // show navs list
    public function index(){
        $navModel = new NavModel();
        $data['page_title'] = 'Navbar';
        $data['active_link'] = 'navbar';
        $data['heading'] = 'Manage Navbar';
        $data['navs'] = $navModel->orderBy('nav_order', 'DESC')->findAll();
        $data['left_navs'] = $navModel->orderBy('nav_order', 'ASC')->findAll();
        return view('nav/nav_view', $data);
    }

    // add nav form
    public function create(){
        $navModel = new NavModel();
        $data['left_navs'] = $navModel->orderBy('nav_order', 'ASC')->findAll();
        return view('nav/add_nav');
    }

    // insert data
    public function store() {
        $navModel = new NavModel();
        $data = [
            'title' => $this->request->getVar('title'),
            'nav_order'  => $this->request->getVar('nav_order'),
            'is_active'  => $this->request->getVar('is_active')
        ];
        $data['page_title'] = 'Navbar';
        $data['active_link'] = 'navbar';
        $data['heading'] = 'Manage Navbar';
        $navModel->insert($data);
        return $this->response->redirect(site_url('/navs-list'));
    }

    // show single nav
    public function singleNav($id = null){
        $navModel = new NavModel();
        $data['user_obj'] = $navModel->where('nav_id', $id)->first();
        $data['page_title'] = 'Navbar';
        $data['active_link'] = 'navbar';
        $data['heading'] = 'Manage Navbar';
        $data['left_navs'] = $navModel->orderBy('nav_order', 'ASC')->findAll();
        return view('nav/edit_nav', $data);
    }

    // update nav data
    public function update(){
        $navModel = new NavModel();
        $id = $this->request->getVar('nav_id');
        $data = [
            'title' => $this->request->getVar('title'),
            'nav_order'  => $this->request->getVar('nav_order'),
            'is_active'  => $this->request->getVar('is_active')
        ];
        $data['page_title'] = 'Navbar';
        $data['active_link'] = 'navbar';
        $data['heading'] = 'Manage Navbar';
        $navModel->update($id, $data);
        return $this->response->redirect(site_url('/navs-list'));
    }

    // delete nav
    public function delete($id = null){
        $navModel = new NavModel();
        $data['nav'] = $navModel->where('nav_id', $id)->delete($id);
        $data['page_title'] = 'Navbar';
        $data['active_link'] = 'navbar';
        $data['heading'] = 'Manage Navbar';
        return $this->response->redirect(site_url('/navs-list'));
    }

}
