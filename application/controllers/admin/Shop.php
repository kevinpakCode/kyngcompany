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

    function infosShopCategories($dataCondition) {
      $CI = get_instance();
      return $CI->App_model->get_rows_order('shop_catalogs', $dataCondition, 'created_at', 'DESC');
    }

    $allShopCategories = infosShopCategories(array('status !='=>0));
    $allDelete = infosShopCategories(array('status'=>0));
    $allDisabled = infosShopCategories(array('status'=>1));
    $allActive = infosShopCategories(array('status'=>2));

    $data['db'] = (object) [
			'allShopCategories' => $allShopCategories,
      'countAllShopCategories' => count($allShopCategories),
		];

		//===> Ajax
    if($this->input->is_ajax_request()) {
      extract($_POST);
      /*=== New catalog ===*/
      $table = 'shop_catalogs';
      if($ActiveAjax=='newCatalog'):
        //=> Verify if exist
        $exist = checkExist($table, array('name'=>appInput($categoryName)));
        if($exist):
          //Return 
					$status = 'error';
					$data = $redirectUrl;
					$message ='La catégorie <strong class="text-green">'.appInput($categoryName).'</strong> existe déjà !';
					returnJS($status, $message, $data);
        else:
          //=> Save in db
          $dataAdd['name'] = appInput($categoryName);
          $dataAdd['description'] = appInput($categoryDescription);
          $dataAdd['user_admin_id'] = connectedUser()->id;
          $dataAdd['status'] = 1;
          $dataAdd['created_at'] = currentDateTime();
          $dataAdd['updated_at'] = currentDateTime();
          $this->App_model->add_item($table,$dataAdd);
          
          //==> History 
          $tableId = $this->App_model->last_id_insert($table);
          KeepUserLogs($table, $tableId, "ADD", $dataAdd, connectedUser()->id);

          //Return 
					$status = 'success';
					$data = $redirectUrl;
					$message ='La catégorie <strong class="text-green">'.appInput($categoryName).'</strong> a été bien ajouter !';
					returnJS($status, $message, $data);

        endif;

      /*=== Edit catalog ===*/
      elseif($ActiveAjax=='editCatalog'):
        //=> Verify if exist
        $exist = checkExist($table, array('name'=>appInput($categoryName), 'id !='=>$id));
        if($exist):
          //Return 
					$status = 'error';
					$data = $redirectUrl;
					$message ='La catégorie <strong class="text-green">'.appInput($categoryName).'</strong> existe déjà !';
					returnJS($status, $message, $data);
        else:
          $dataItem['name'] = appInput($categoryName);
          $dataItem['description'] = appInput($categoryDescription);
          $dataItem['updated_at'] = currentDateTime();
          //==> History 
          KeepUserLogs($table, $id, "UPDATE", $dataItem, connectedUser()->id);
          $this->App_model->update_item($table,$dataItem, array('id'=>$id));

          //Return 
					$status = 'success';
					$data = $redirectUrl;
					$message ='La catégorie <strong class="text-green">'.appInput($categoryName).'</strong> a été bien modifiée!';
					returnJS($status, $message, $data);
        endif;
      endif;

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

    
    function infosShopBrands($dataCondition) {
      $CI = get_instance();
      return $CI->App_model->get_rows_order('shop_brands', $dataCondition, 'created_at', 'DESC');
    }

    $allShopBrands = infosShopBrands(array('status !='=>0));
    $allDelete = infosShopBrands(array('status'=>0));
    $allDisabled = infosShopBrands(array('status'=>1));
    $allActive = infosShopBrands(array('status'=>2));

    $data['db'] = (object) [
			'allShopBrands' => $allShopBrands,
      'countAllBrands' => count($allShopBrands),
		];

		//===> Ajax
    if($this->input->is_ajax_request()) {
      extract($_POST);
      $table = 'shop_brands';

      /*=== New Brand ===*/
      if($ActiveAjax=='newBrand'):
        //=> Verify if exist
        $exist = checkExist($table, array('name'=>appInput($name)));
        if($exist):
          //Return 
					$status = 'error';
					$data = $redirectUrl;
					$message ='La marque <strong class="text-green">'.appInput($name).'</strong> existe déjà !';
					returnJS($status, $message, $data);
        else:
          //=> Save in db
          if(isset($_FILES['file']['name'])):
            $fileDestination = './assets/images/upload/brands';
            $file = 'file';
            $fileName = uploadFiles($fileDestination, $file);
            $dataAdd['image'] = (isset($fileName)&&$fileName!='error')? $fileName:'default.jpg';
          endif;
          $dataAdd['name'] = appInput($name);
          $dataAdd['description'] = appInput($description);
          $dataAdd['user_admin_id'] = connectedUser()->id;
          $dataAdd['status'] = 1;
          $dataAdd['created_at'] = currentDateTime();
          $dataAdd['updated_at'] = currentDateTime();
          $this->App_model->add_item($table,$dataAdd);
          
          //==> History 
          $tableId = $this->App_model->last_id_insert($table);
          KeepUserLogs($table, $tableId, "ADD", $dataAdd, connectedUser()->id);

          //Return 
					$status = 'success';
					$data = $redirectUrl;
					$message ='La marque <strong class="text-green">'.appInput($name).'</strong> a été bien ajouter !';
					returnJS($status, $message, $data);

        endif;
      /*=== Edit Brand ===*/
      elseif($ActiveAjax=='editBrand'):
        //=> Verify if exist
        $exist = checkExist($table, array('name'=>appInput($name), 'id !='=>$id));
        if($exist):
          //Return 
					$status = 'error';
					$data = $redirectUrl;
					$message ='La marque <strong class="text-green">'.appInput($name).'</strong> existe déjà !';
					returnJS($status, $message, $data);
        else:
          if(isset($_FILES['file']['name'])):
            $fileDestination = './assets/images/upload/brands';
            $file = 'file';
            $fileName = uploadFiles($fileDestination, $file);
            $dataItem['image'] = (isset($fileName)&&$fileName!='error')? $fileName:'default.jpg';
          endif;
          $dataItem['name'] = appInput($name);
          $dataItem['description'] = appInput($description);
          $dataItem['updated_at'] = currentDateTime();
          //==> History 
          KeepUserLogs($table, $id, "UPDATE", $dataItem, connectedUser()->id);
          $this->App_model->update_item($table,$dataItem, array('id'=>$id));

          //Return 
					$status = 'success';
					$data = $redirectUrl;
					$message ='La marque <strong class="text-green">'.appInput($name).'</strong> a été bien modifiée!';
					returnJS($status, $message, $data);
        endif;
      endif;
      
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
