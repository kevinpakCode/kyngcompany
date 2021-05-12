<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends CI_Controller {

	public function index()
	{
		
		$data['page'] = (object) [
      'isPublic' => true,
      'name' => 'contacts',
      'title' => 'Contacts',
      'titleIcon' => NULL,
			'modal' => 'public/public_modal',
      'module' => 'public',
      'fileName' => 'public/contacts',
    ];

		
		//===> Ajax
    if($this->input->is_ajax_request()) {
      extract($_POST);

      //New public message
			if($ActiveAjax=='publicMessage'):
        
				$this->db->trans_start();
				$dataAdd = array(
					"last_name" => appInput($user_name),
					"phone" => appInput($user_phone),
					"email" => appInput($user_email),
					"object" => appInput($user_object),
					"message" => appInput($user_message),
					"status" => 1,
					"created_at" => currentDateTime(),
          "updated_at" => currentDateTime(),
				);
        $this->App_model->add_item('public_messages', $dataAdd);
				if($this->db->trans_complete()):
					//Return 
					$status = 'success';
					$data = base_url().'contacts';
					$message ='<strong class="text-green">'.$user_name.'</strong>, votre message a été bien envoyé. Notre service de communication se chargera d\'en prendre connaissance  !!! <p>Merci.</p></div>';
					returnJS($status, $message, $data);
				endif;

      else:

      endif;
      
    }else{
      $this->load->view('layouts/public', $data);
    }
	}

}
