<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ContactModel;
use App\Models\NavModel;

class Contact extends BaseController
{
    // show navs list
    public function index(){
        $navModel = new NavModel();
        $contactModel = new ContactModel();
        $data['page_title'] = 'Contact Us';
        $data['active_link'] = 'contact';
        $data['heading'] = 'Contact Us';
        $data['contacts'] = $contactModel->orderBy('created_at', 'DESC')->findAll();
        $data['left_navs'] = $navModel->orderBy('nav_order', 'ASC')->findAll();
        return view('nav/nav_view', $data);
    }

    // add nav form
    public function create(){
        $navModel = new NavModel();
        $contactModel = new ContactModel();
        $data['left_navs'] = $navModel->orderBy('nav_order', 'ASC')->findAll();
        $data['contacts'] = $contactModel->orderBy('created_at', 'DESC')->findAll();
        return view('nav/add_nav');
    }

    // insert data
    public function store() {
        $contactModel = new ContactModel();
        $data = [
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            'phone'  => $this->request->getVar('phone'),
            'message'  => $this->request->getVar('message'),
        ];

        $contactModel->insert($data);
        return $this->response->redirect(site_url('/navs-list'));
    }

}
