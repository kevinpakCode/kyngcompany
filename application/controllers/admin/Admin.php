<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/*function __construct() {
		parent::__construct();
		userIsLogin();
	}*/

  /*
   ---------------------
  * LOGIN
   ---------------------
  */

	public function index()
	{
		
		$data['page'] = (object) [
      'isLogin' => false,
      'name' => 'login',
      'title' => 'Connexion',
      'titleIcon' => 'login',
      'module' => 'admin',
      'fileName' => 'admin/login',
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
  * DASHBOARD
   ---------------------
  */
  public function dashboard()
	{
    $data['page'] = (object) [
      'isLogin' => true,
      'name' => 'dashboard',
      'title' => 'Dashboard',
      'titleIcon' => 'icon-home',
      'module' => 'admin',
      'fileName' => 'admin/dashboard',
    ];

		//===> Ajax
    if($this->input->is_ajax_request()) {
      extract($_POST);
      
    }else{
      $this->load->view('layouts/dashboard', $data);
    }
  }



}
