<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function index()
	{
		
		$data['page'] = (object) [
      'isPublic' => true,
      'name' => 'news',
      'title' => 'Actualités',
      'titleIcon' => NULL,
			'modal' => 'public/public_modal',
      'module' => 'public',
      'fileName' => 'public/news/news',
    ];

		//===> Ajax
    if($this->input->is_ajax_request()) {
      extract($_POST);
      
    }else{
      $this->load->view('layouts/public', $data);
    }
	}


  public function detail($id=null)
	{
		if(isset($id)) {

      $data['page'] = (object) [
        'isPublic' => true,
        'name' => 'news',
        'title' => 'Actualités Sélectionnée',
        'titleIcon' => NULL,
        'modal' => 'public/public_modal',
        'module' => 'public',
        'fileName' => 'public/news/news-detail',
      ];
  
      //===> Ajax
      if($this->input->is_ajax_request()) {
        extract($_POST);
        
      }else{
        $this->load->view('layouts/public', $data);
      }

    } else {
      redirect(base_url().'/news', 'refresh');
    }
		
	}

}
