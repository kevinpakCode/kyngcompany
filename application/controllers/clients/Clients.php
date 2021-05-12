<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends CI_Controller {

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
      'title' => 'Connexion - Clients',
      'titleIcon' => 'login',
      'modal' => 'clients/clients_modal',
      'module' => 'clients',
      'fileName' => 'clients/login',
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
  * REGISTER
   ---------------------
  */
  public function register()
	{
    $data['page'] = (object) [
      'isLogin' => false,
      'name' => 'register',
      'title' => 'Inscription',
      'titleIcon' => 'icon-home',
      'modal' => null,
      'module' => 'clients',
      'fileName' => 'clients/register',
    ];

		//===> Ajax
    if($this->input->is_ajax_request()) {
      extract($_POST);
      
    }else{
      $this->load->view('layouts/dashboard', $data);
    }
  }



}
