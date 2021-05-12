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

    function infosPublicMessage($dataCondition) {
      $CI = get_instance();
      return $CI->App_model->get_rows_order('public_messages', $dataCondition, 'created_at', 'DESC');
    }

    $allPublicMessages = infosPublicMessage(array('status !='=>0));
    $allDelete = infosPublicMessage(array('status'=>0));
    $allUnread = infosPublicMessage(array('status'=>1));
    $allRead = infosPublicMessage(array('status'=>2));

    $activeListMessages = $allPublicMessages;
    if(isset($_GET['st'])) {
      $st = $_GET['st'];
      if($st=="delete") {
        $activeListMessages = $allDelete;
      }else if($st=="read") {
        $activeListMessages = $allRead;
      }else if($st=="unread") {
        $activeListMessages = $allUnread;
      }else  {
        $activeListMessages = $allPublicMessages;
      }
    }

    $data['db'] = (object) [
			'allPublicMessages' => $activeListMessages,
      'countAllPublicMessage' => count($allPublicMessages),

      'allUnread' => $allUnread,
      'countAllUnread' => count($allUnread),

      'allRead' => $allRead,
      'countAllRead' => count($allRead),

		];

		//===> Ajax
    if($this->input->is_ajax_request()) {
      extract($_POST);
      
    }else{
      $this->load->view('layouts/dashboard', $data);
    }
	}

}
