<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	/*function __construct() {
		parent::__construct();
		userIsLogin();
	}*/

  /*
   ---------------------
  * 
   ---------------------
  */
	public function index()
	{
	
	}


  /*
   ---------------------
  * All Categories
   ---------------------
  */
	public function categories()
	{
		
		$data['page'] = (object) [
      'isLogin' => true,
      'name' => 'categories',
      'title' => 'Categories',
      'titleIcon' => 'icon-shopping-cart',
      'modal' => 'admin/shop/shop_modal',
      'module' => 'admin',
      'fileName' => 'admin/shop/categories',
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
  * All Brands
   ---------------------
  */
	public function brands()
	{
		
		$data['page'] = (object) [
      'isLogin' => true,
      'name' => 'brands',
      'title' => 'Marques',
      'titleIcon' => 'icon-shopping-cart',
      'modal' => 'admin/shop/shop_modal',
      'module' => 'admin',
      'fileName' => 'admin/shop/brands',
    ];

		//===> Ajax
    if($this->input->is_ajax_request()) {
      extract($_POST);
      
    }else{
      $this->load->view('layouts/dashboard', $data);
    }
	}


  /*
   -----------------------
  * All Characteristics
   -----------------------
  */
  public function characteristics() {
    $data['page'] = (object) [
      'isLogin' => true,
      'name' => 'characteristic',
      'title' => 'Characteristic',
      'titleIcon' => 'icon-shopping-cart',
      'modal' => 'admin/shop/shop_modal',
      'module' => 'admin',
      'fileName' => 'admin/shop/characteristic',
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
  * All Products
   ---------------------
  */
	public function products()
	{
		
		$data['page'] = (object) [
      'isLogin' => true,
      'name' => 'products',
      'title' => 'Les Produits',
      'titleIcon' => 'icon-shopping-cart',
      'modal' => 'admin/shop/shop_modal',
      'module' => 'admin',
      'fileName' => 'admin/shop/products',
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
  * Selected Product
   ---------------------
  */
	public function product($id= NULL)
	{

    if(isset($id)) {

      $data['page'] = (object) [
        'isLogin' => true,
        'name' => 'product',
        'title' => 'Produit',
        'titleIcon' => 'icon-shopping-cart',
        'modal' => 'admin/shop/shop_modal',
        'module' => 'admin',
        'fileName' => 'admin/shop/product',
      ];
      
      //===> Ajax
      if($this->input->is_ajax_request()) {
        extract($_POST);
        
      }else{
        $this->load->view('layouts/dashboard', $data);
      }
    } else {
      redirect(base_url().'/admin/shop/products', 'refresh');
    }

	}






}//End
