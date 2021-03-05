<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NavModel;
use App\Models\Projectdetails;

class Projectdetails extends BaseController
{
    public $data;
    public $model;
    private $currentPage = 'project';

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
        $navModel = new NavModel();
        $this->model = new Projectdetails();
        $this->data['left_navs'] = $navModel->orderBy('nav_order', 'ASC')->findAll();
        helper(['form', 'url']);
    }

    // show navs list
    public function index(){
        $data = $this->data;
        $data['page_title'] = 'Project';
        $data['active_link'] = 'project';
        $data['heading'] = 'Manage Project Page';
        $data[$this->currentPage] = $this->model->orderBy('project_order', 'DESC')->findAll();
        return view($this->currentPage.'/view', $data);
    }

    // add nav form
    public function create(){
        $data = $this->data;
        $data['page_title'] = 'Project';
        $data['active_link'] = 'project';
        $data['heading'] = 'Add Project';
        return view($this->currentPage.'/add',$data);
    }

    // insert data
    public function store() {
        $validated = $this->validate([
            'file' => [
                'uploaded[project_image]',
                'mime_in[project_image,image/jpg,image/jpeg,image/png]'
            ]
        ]);

        $data = [
            'title' => $this->request->getVar('title'),
            'details'  => $this->request->getVar('details'),
            'is_active'  => $this->request->getVar('is_active'),
            'project_order'  => $this->request->getVar('project_order')
        ];

        if ($this->request->getFile('project_image') && ($this->request->getFile('project_image')->getSize() > 0)) {
            if ($validated) {
                $avatar = $this->request->getFile('project_image');
                $newName = $avatar->getRandomName();
                $avatar->move(ROOTPATH . 'assets/uploads',$newName);
                $data['project_image'] = $newName;
            }
        }

        $data['page_title'] = 'Project';
        $data['active_link'] = 'project';
        $data['heading'] = 'Add Project';
        $this->model->insert($data);
        return $this->response->redirect(site_url('project/list'));
    }

    // show single nav
    public function singleProject($id = null){
        $data = $this->data;
        $data['project_obj'] = $this->model->where($this->model->primaryKey, $id)->first();
        $data['page_title'] = 'Project';
        $data['active_link'] = 'project';
        $data['heading'] = 'Add Project';
        $data['session'] = $this->session;

        return view($this->currentPage.'/edit', $data);
    }

    // update nav data
    public function update(){
        $validated = $this->validate([
            'file' => [
                'uploaded[project_image]',
                'mime_in[project_image,image/jpg,image/jpeg,image/png]'
            ]
        ]);

        $id = $this->request->getVar('project_id');

        $data = [
            'title' => $this->request->getVar('title'),
            'details'  => $this->request->getVar('details'),
            'is_active'  => $this->request->getVar('is_active'),
            'project_order'  => $this->request->getVar('project_order')
        ];


        $data['page_title'] = 'Project';
        $data['active_link'] = 'project';
        $data['heading'] = 'Edit Project';

        if ($this->request->getFile('project_image') && ($this->request->getFile('project_image')->getSize() > 0)) {

            if ($validated) {
                $avatar = $this->request->getFile('project_image');
                $newName = $avatar->getRandomName();
                $avatar->move(ROOTPATH . 'assets/uploads',$newName);
                $data['project_image'] = $newName;
                unlink(ROOTPATH . 'assets/uploads/'.$this->request->getVar('project_background_image'));
            } else {
                $data['project_obj'] = $this->request->getVar();
                $this->session->setFlashdata('error_message','<div class="alert alert-danger">Please upload correct image.</div>');
                return view($this->currentPage.'/edit', $data);
            }
        }

        $this->session->setFlashdata('sucess_message','<div class="alert alert-success">Conetnt Updated successful.</div>');
        $data['session'] = $this->session;
        $this->model->update($id, $data);
        return $this->response->redirect(site_url('project/list'));
    }

    // delete nav
    public function delete($id = null){
        $navModel = new NavModel();
        $data['nav'] = $this->model->where($this->model->primaryKey, $id)->delete($id);
        $data['page_title'] = 'Navbar';
        $data['active_link'] = 'navbar';
        $data['heading'] = 'Manage Navbar';
        return $this->response->redirect(site_url('/navs-list'));
    }
}
