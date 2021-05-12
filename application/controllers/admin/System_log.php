<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class System_log extends CI_Controller {

	/*function __construct() {
		parent::__construct();
		userIsLogin();
	}*/

  /*
   ---------------------
  * Login LOG
   ---------------------
  */
	public function index()
	{
    $data['page'] = (object) [
      'isLogin' => true,
      'name' => 'login-log',
      'title' => 'Historique de connexions',
      'titleIcon' => 'icon-menu',
      'modal' => null,
      'module' => 'admin',
      'fileName' => 'admin/system-log/login-log',
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
  * Actions
   ---------------------
  */
	public function actions()
	{
    $data['page'] = (object) [
      'isLogin' => true,
      'name' => 'actions',
      'title' => 'Historique d\'actions',
      'titleIcon' => 'icon-menu',
      'modal' => null,
      'module' => 'admin',
      'fileName' => 'admin/system-log/actions-log',
    ];
    
    //===> Ajax
    if($this->input->is_ajax_request()) {
      extract($_POST);
      
    }else{
      $this->load->view('layouts/dashboard', $data);
    }

	}






}//End
