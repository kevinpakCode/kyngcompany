<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Messages extends CI_Controller {

	/*function __construct() {
		parent::__construct();
		userIsLogin();
	}*/

  /*
   ---------------------
  * All Messages
   ---------------------
  */

	public function index()
	{
		
		$data['page'] = (object) [
      'isLogin' => true,
      'name' => 'messages',
      'title' => 'Messages',
      'titleIcon' => 'icon-email-closed',
      'module' => 'admin',
      'fileName' => 'admin/messages',
    ];

		//===> Ajax
    if($this->input->is_ajax_request()) {
      extract($_POST);
      
    }else{
      $this->load->view('layouts/dashboard', $data);
    }
	}

}
