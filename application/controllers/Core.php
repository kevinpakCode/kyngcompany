<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Core extends CI_Controller {

	/*function __construct() {
		parent::__construct();
		userIsLogin();
	}*/

	public function index()
	{
		
		$data['page'] = (object) [
      'isDashboard' => false,
      'name' => 'home',
      'title' => 'Accueil',
      'titleIcon' => 'home',
      'module' => 'site',
      'fileName' => 'site/home',
    ];

		//===> Ajax
    if($this->input->is_ajax_request()) {
      extract($_POST);
      
    }else{
      $this->load->view('layouts/site', $data);
    }
	}


/*	public function index()
	{
		if($user = $_SESSION["user_connected"]) {
			$user = $_SESSION["user_connected"];
			$userName = $user['name'];
			$grpId = $user['grpId'];
			$userLevel = $user['level'];
		}

		$data['page'] = (object) [
      'name' => 'dashbord',
      'title' => 'Dashboard',
      'fileName' => 'dashboard/home',
    ];

		$data['user'] =  (object) [
			'name' => $user,
			'grpId' => $grpId,
			'level' => $userLevel
		];
      
    $this->load->view('layouts/dashboard_view', $data);
	}*/
}
