<?php

namespace App\Controllers;

use App\Models\NavModel;
use App\Models\ContentModel;
use App\Models\ProjectModel;

class Home extends BaseController
{
	public function index()
	{
		$data['page_title'] = 'JSD';
        $navModel = new NavModel();
        $contentModel = new ContentModel();
        $data['navs'] = $navModel->orderBy('nav_order', 'ASC')->findAll();
        $contents = $contentModel->orderBy('content_id', 'ASC')->findAll();
        $data['contents'] = [];
        foreach( $contents as $content ) {
            $data['contents'][$content['content_type']] = $content;
        }
        return view('main', $data);
	}

	public function projects(){
        $data['page_title'] = 'JSD';
        $navModel = new NavModel();
        $projectModel = new ProjectModel();
        $contentModel = new ContentModel();
        $data['navs'] = $navModel->orderBy('nav_order', 'ASC')->findAll();
        $data['projects'] = $projectModel->orderBy('project_order', 'ASC')->findAll();
        $contents = $contentModel->orderBy('content_id', 'ASC')->findAll();
        $data['contents'] = [];
        foreach( $contents as $content ) {
            $data['contents'][$content['content_type']] = $content;
        }
        return view('projects', $data);
    }

    public function details(){
        $data['page_title'] = 'JSD';
        $navModel = new NavModel();
        $projectModel = new ProjectModel();
        $contentModel = new ContentModel();
        $data['navs'] = $navModel->orderBy('nav_order', 'ASC')->findAll();
        $data['projects'] = $projectModel->orderBy('project_order', 'ASC')->findAll();
        $contents = $contentModel->orderBy('content_id', 'ASC')->findAll();
        $data['contents'] = [];
        foreach( $contents as $content ) {
            $data['contents'][$content['content_type']] = $content;
        }
        return view('details', $data);
    }
}
