<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {

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
        'name' => 'orders',
        'title' => 'Les Commandes',
        'titleIcon' => 'icon-shopping-cart-02',
        'modal' => 'admin/orders/orders_modal',
        'module' => 'admin',
        'fileName' => 'admin/orders/orders',
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
        'name' => 'orders',
        'title' => 'Détail commande',
        'titleIcon' => 'icon-shopping-cart-02',
        'modal' => 'admin/orders/orders_modal',
        'module' => 'admin',
        'fileName' => 'admin/orders/order',
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