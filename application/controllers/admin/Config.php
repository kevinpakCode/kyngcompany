<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Config extends CI_Controller {

	/*function __construct() {
		parent::__construct();
		userIsLogin();
	}*/

  /*
   ---------------------
  * Subscription
   ---------------------
  */
	public function index()
	{
    $data['page'] = (object) [
      'isLogin' => true,
      'name' => 'subscription',
      'title' => 'Mes Abonnements',
      'titleIcon' => 'icon-settings',
      'modal' => 'admin/config/config_modal',
      'module' => 'admin',
      'fileName' => 'admin/config/config',
    ];
    
    //===> Ajax
    if($this->input->is_ajax_request()) {
      extract($_POST);
      
    }else{
      $this->load->view('layouts/dashboard', $data);
    }
	}

  /*
   ---------------------
  * Profile
   ---------------------
  */
	public function profile()
	{
    $data['page'] = (object) [
      'isLogin' => true,
      'name' => 'profile',
      'title' => 'Mon Profile',
      'titleIcon' => 'icon-settings',
      'modal' => 'admin/config/config_modal',
      'module' => 'admin',
      'fileName' => 'admin/config/profile',
    ];
    
    //===> Ajax
    if($this->input->is_ajax_request()) {
      extract($_POST);
      
    }else{
      $this->load->view('layouts/dashboard', $data);
    }

	}






}//End
