<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	/*function __construct() {
		parent::__construct();
		userIsLogin();
	}*/

  /*
   ---------------------
  * ALL NEWS ANS NEWs
   ---------------------
  */
	public function index($id=null)
	{
    //ALL NEWS
    if(!isset($id)) {
      $data['page'] = (object) [
        'isLogin' => true,
        'name' => 'news',
        'title' => 'Les Actualités',
        'titleIcon' => 'icon-news',
        'modal' => 'admin/news/news_modal',
        'module' => 'admin',
        'fileName' => 'admin/news/news',
      ];
  
      //===> Ajax
      if($this->input->is_ajax_request()) {
        extract($_POST);
        
      }else{
        $this->load->view('layouts/dashboard', $data);
      }

    } else {

      $data['page'] = (object) [
        'isLogin' => true,
        'name' => 'news-detail',
        'title' => 'Détail Actualité',
        'titleIcon' => 'icon-news',
        'modal' => 'admin/news/news_modal',
        'module' => 'admin',
        'fileName' => 'admin/news/news-detail',
      ];
  
      //===> Ajax
      if($this->input->is_ajax_request()) {
        extract($_POST);
        
      }else{
        $this->load->view('layouts/dashboard', $data);
      }

    }
	
    
	}


  /*
   ---------------------
  * All Categories
   ---------------------
  */
	public function categories()
	{
		
		$data['page'] = (object) [
      'isLogin' => true,
      'name' => 'categories',
      'title' => 'Les catégories d\'actualités',
      'titleIcon' => 'icon-news',
      'modal' => 'admin/news/news_modal',
      'module' => 'admin',
      'fileName' => 'admin/news/categories',
    ];

		//===> Ajax
    if($this->input->is_ajax_request()) {
      extract($_POST);
      
    }else{
      $this->load->view('layouts/dashboard', $data);
    }
	}



}//End
