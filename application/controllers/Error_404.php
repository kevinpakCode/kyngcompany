<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error_404 extends CI_Controller {

	public function index()
	{
		$data['page'] = (object) [
      'isLogin' => false,
      'name' => 'error404',
      'title' => 'Page 404',
      'titleIcon' => 'error',
      'module' => '',
      'fileName' => 'app_errors/error_404',
    ];

		$zone = $this->uri->segment(1);
		$dashboard = array("admin", "clients", "users");
		$template = "layouts/site";
		if(isset($zone)&&in_array($zone, $dashboard)){
			$template = "layouts/dashboard";
		}
		
		$this->load->view($template, $data);
	}
}
