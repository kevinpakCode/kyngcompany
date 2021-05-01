<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends CI_Controller {

	/*function __construct() {
		parent::__construct();
		userIsLogin();
	}*/

  /*
   ---------------------
  * 
   ---------------------
  */
	public function index($id=NULL)
	{
    if(!isset($id)) {

      $data['page'] = (object) [
        'isLogin' => true,
        'name' => 'clients',
        'title' => 'Les Clients',
        'titleIcon' => 'icon-users',
        'modal' => 'admin/clients/clients_modal',
        'module' => 'admin',
        'fileName' => 'admin/clients/clients',
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
        'name' => 'clients',
        'title' => 'Détail Client',
        'titleIcon' => 'icon-users',
        'modal' => 'admin/clients/clients_modal',
        'module' => 'admin',
        'fileName' => 'admin/clients/client',
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