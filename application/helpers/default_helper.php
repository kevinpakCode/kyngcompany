<?php

/*
*
*/
function returnJS($status='',$message='',$data='')
{
	$json = array(
		'status' => $status,
		'message' => $message,
		'data' => $data
	);
	echo json_encode($json);
}

/*
*
*/
function currentDateTime(){

	setlocale(LC_TIME, 'fra_fra');
	return strftime('%Y-%m-%d %H:%M:%S', strtotime('-1 time'));
}


/*
*
*/
function checkExist($table, $elems)
{
  $CI = get_instance();
  $CI->load->model('App_model');
  return $CI->App_model->get_rows($table,$elems);
}


/*
* APP Input protect
*/
function appInput($value) {
	return htmlspecialchars(trim($value));
}

/*
* APP Date format
*/
function appDateFormat($date) {
	return date('d-m-Y à H:i:s', strtotime($date));
}



/*
|--------------------------------------------------------------------------
| uploadFiles
|--------------------------------------------------------------------------
|
*/
function uploadFiles($destination, $userfile)
{
  $CI = get_instance();
	$config['upload_path']          = $destination;
	$config['allowed_types']        = 'pdf|csv|docx|gif|jpg|png|jpeg';
	$config['max_size']             = 2000;
	$config['max_width']            = 2000;
	$config['max_height']           = 2000;
	$config['remove_spaces']           = TRUE;
	$config['encrypt_name']           = TRUE;
	$CI->upload->initialize($config);
	$CI->load->library('upload', $config);
 
	if(!isset($userfile)){$userfile='userfile';}

	if($CI->upload->do_upload($userfile))
	{
		$NewImg = $CI->upload->data();
		$NewImgName  = $NewImg['file_name'];
	}else{
		$NewImgName   = "error";
		$error = array('error' => $CI->upload->display_errors());
	}
	return $NewImgName;
}
?>

