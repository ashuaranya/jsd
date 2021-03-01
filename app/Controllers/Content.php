<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ContentModel;
use App\Models\NavModel;
use App\Models\ContactModel;

class Content extends BaseController
{
    protected $session;

    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
    }

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
    public function singleContent($content_type = null){
        $navModel = new NavModel();
        $contactModel = new ContentModel();
        $data['content_obj'] = $contactModel->where('content_type', $content_type)->first();
        $data['page_title'] = 'Edit Content';
        $data['active_link'] = $content_type;
        $data['heading'] = 'Edit Navbar';
        $data['left_navs'] = $navModel->orderBy('nav_order', 'ASC')->findAll();
        $data['session'] = $this->session;
        return view('content/'.$content_type, $data);
    }

    // update nav data
    public function update($content_type = null){
        $navModel = new NavModel();
        $contactModel = new ContentModel();
        helper(['form', 'url']);

        $id = $this->request->getVar('content_id');

        $validated = $this->validate([
            'file' => [
                'uploaded[background_image]',
                'mime_in[background_image,image/jpg,image/jpeg,image/png]'
            ]
        ]);

        $msg = 'Please select a valid file';

        $data = [
            'heading' => $this->request->getVar('heading'),
            'extra' => $this->request->getVar('extra'),
            'subheading'  => $this->request->getVar('subheading'),
            'is_active'  => $this->request->getVar('is_active'),
            'content_type'  => $content_type
        ];

        if ($this->request->getFile('background_image') && ($this->request->getFile('background_image')->getSize() > 0)) {
            if( $validated ) {
                $avatar = $this->request->getFile('background_image');
                $newName = $avatar->getRandomName();
                $avatar->move(ROOTPATH . 'assets/uploads',$newName);
                $data['background_image'] = $newName;
				unlink(ROOTPATH . 'assets/uploads'.$this->request->getVar('content_background_image'));
            } else {
                $data['content_obj'] = $this->request->getVar();
                $data['page_title'] = 'Edit Content';
                $data['active_link'] = $content_type;
                $data['heading'] = 'Edit Navbar';
                $data['left_navs'] = $navModel->orderBy('nav_order', 'ASC')->findAll();
                $this->session->setFlashdata('error_message','<div class="alert alert-danger">Please upload correct image.</div>');
                return view('content/'.$content_type, $data);
            }
        }
        $this->session->setFlashdata('sucess_message','<div class="alert alert-success">Conetnt Updated successful.</div>');
        $data['session'] = $this->session;
        $contactModel->update($id, $data);
        return $this->response->redirect(site_url('content/edit-content/'.$content_type));
    }
}
