<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Widgets extends CI_Controller {

	/*function __construct() {
		parent::__construct();
		userIsLogin();
	}*/

  /*
   ---------------------
  * 
   ---------------------
  */
	public function index($id=null)
	{
    //ALL Widgets
    if(!isset($id)) {
      $data['page'] = (object) [
        'isLogin' => true,
        'name' => 'widgets',
        'title' => 'Les Widgets',
        'titleIcon' => 'icon-shopping-cart',
        'modal' => 'admin/widgets/widgets_modal',
        'module' => 'admin',
        'fileName' => 'admin/widgets/widgets',
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
        'name' => 'widget',
        'title' => 'Le Widget',
        'titleIcon' => 'icon-shopping-cart',
        'modal' => 'admin/widgets/widgets_modal',
        'module' => 'admin',
        'fileName' => 'admin/widgets/widget',
      ];

      //===> Ajax
      if($this->input->is_ajax_request()) {
        extract($_POST);
        
      }else{
        $this->load->view('layouts/dashboard', $data);
      }
    }
    
    
    
	}




}//End
