<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seo extends CI_Controller {

	/*function __construct() {
		parent::__construct();
		userIsLogin();
	}*/

  /*
   ---------------------
  * SEO - Default
   ---------------------
  */
	public function index($id=null)
	{
    if(!isset($id)) {
      $data['page'] = (object) [
        'isLogin' => true,
        'name' => 'seo',
        'title' => 'Seo',
        'titleIcon' => 'icon-seo',
        'modal' => 'admin/seo/seo_modal',
        'module' => 'admin',
        'fileName' => 'admin/seo/default',
      ];
      
      //===> Ajax
      if($this->input->is_ajax_request()) {
        extract($_POST);
        
      }else{
        $this->load->view('layouts/dashboard', $data);
      }
    } else {

    }
	}



  /*
   ---------------------
  * SEO - Pages
   ---------------------
  */
	public function pages($id=null)
	{
    if(!isset($id)) {
      $data['page'] = (object) [
        'isLogin' => true,
        'name' => 'seo-pages',
        'title' => 'Seo- Pages',
        'titleIcon' => 'icon-seo',
        'modal' => 'admin/seo/seo_modal',
        'module' => 'admin',
        'fileName' => 'admin/seo/pages',
      ];
      
      //===> Ajax
      if($this->input->is_ajax_request()) {
        extract($_POST);
        
      }else{
        $this->load->view('layouts/dashboard', $data);
      }
    } else {

    }
	}


  /*
   ---------------------
  * SEO - Texts
   ---------------------
  */
	public function texts($id=null)
	{
    if(!isset($id)) {
      $data['page'] = (object) [
        'isLogin' => true,
        'name' => 'seo-texts',
        'title' => 'Seo - Textes',
        'titleIcon' => 'icon-seo',
        'modal' => 'admin/seo/seo_modal',
        'module' => 'admin',
        'fileName' => 'admin/seo/texts',
      ];
      
      //===> Ajax
      if($this->input->is_ajax_request()) {
        extract($_POST);
        
      }else{
        $this->load->view('layouts/dashboard', $data);
      }
    } else {

    }
	}

}//End
