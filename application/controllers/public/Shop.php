<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	public function index($id=null)
	{
    if(isset($id)) {

      $data['page'] = (object) [
        'isPublic' => true,
        'name' => 'catalog',
        'title' => 'Catalogue',
        'titleIcon' => NULL,
        'modal' => 'public/public_modal',
        'module' => 'public',
        'fileName' => 'public/shop/catalog',
      ];

      //===> Ajax
      if($this->input->is_ajax_request()) {
        extract($_POST);
        
      }else{
        $this->load->view('layouts/public', $data);
      }


    } else {

      $data['page'] = (object) [
        'isPublic' => true,
        'name' => 'shop',
        'title' => 'Boutique',
        'titleIcon' => NULL,
        'modal' => 'public/public_modal',
        'module' => 'public',
        'fileName' => 'public/shop/shop',
      ];

      //===> Ajax
      if($this->input->is_ajax_request()) {
        extract($_POST);
        
      }else{
        $this->load->view('layouts/public', $data);
      }
    }
	}


  public function brands($id=null)
	{
		if(isset($id)) {

      $data['page'] = (object) [
        'isPublic' => true,
        'name' => 'brands',
        'title' => 'Marque Sélectionnée',
        'titleIcon' => NULL,
        'modal' => 'public/public_modal',
        'module' => 'public',
        'fileName' => 'public/shop/brands',
      ];
  
      //===> Ajax
      if($this->input->is_ajax_request()) {
        extract($_POST);
        
      }else{
        $this->load->view('layouts/public', $data);
      }

    } else {
      redirect(base_url().'/shop', 'refresh');
    }
		
	}

  public function product($id=null)
	{
		if(isset($id)) {

      $data['page'] = (object) [
        'isPublic' => true,
        'name' => 'shop',
        'title' => 'Acticle Sélectionné',
        'titleIcon' => NULL,
        'modal' => 'public/public_modal',
        'module' => 'public',
        'fileName' => 'public/shop/product',
      ];
  
      //===> Ajax
      if($this->input->is_ajax_request()) {
        extract($_POST);
        
      }else{
        $this->load->view('layouts/public', $data);
      }

    } else {
      redirect(base_url().'/shop', 'refresh');
    }
		
	}

  public function card() {
    $data['page'] = (object) [
      'isPublic' => true,
      'name' => 'card',
      'title' => 'Panier de commande',
      'titleIcon' => NULL,
      'modal' => 'public/public_modal',
      'module' => 'public',
      'fileName' => 'public/shop/card',
    ];

    //===> Ajax
    if($this->input->is_ajax_request()) {
      extract($_POST);
      
    }else{
      $this->load->view('layouts/public', $data);
    }
  }

}
