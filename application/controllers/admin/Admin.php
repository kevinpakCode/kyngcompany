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


  /*
   ---------------------
  * GLOBAL AJAX
   ---------------------
  */

  public function ajax() {
    if($this->input->is_ajax_request()) {
      extract($_POST);

      //Change status
      if(isset($ActiveAjax)):
        if($ActiveAjax=='changeStatus' || $ActiveAjax=='statusSwitch'):

          if(isset($multiple)){
            $multipleArray = json_decode($multiple);
            foreach($multipleArray as $item):
              $dataItem['status'] = $status;
              //==> History 
              KeepUserLogs($table, $item, "UPDATE", $dataItem, connectedUser()->id);
  
              //==> UPDATE
              $this->App_model->update_item($table, $dataItem, array('id'=>$item));
            endforeach;
          }else{
            $dataItem['status'] = $status;
            //==> History 
            KeepUserLogs($table, $id, "UPDATE", $dataItem, connectedUser()->id);
  
            //==> UPDATE
            $this->App_model->update_item($table, $dataItem, array('id'=>$id));
          }    
  
          if(!isset($redirectUrl)) {
            $redirectUrl = '';
          }
  
          //Return 
          $status = 'success';
          $data = $redirectUrl;
          $message ='';
          returnJS($status, $message, $data);
        else:
  
        endif;
      elseif(isset($_GET['tbl'])):
        $table = $_GET['tbl'];

        $dataCondition = [];
        if(isset($_GET['id'])) {
          $dataCondition['id'] = $_GET['id'];
        }

        $result = $this->App_model->get_rows($table,$dataCondition);
        echo json_encode($result[0]);

      endif;

    }
  }



}
