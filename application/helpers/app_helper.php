<?php
/*
|--------------------------------------------------------------------------
| USER
|--------------------------------------------------------------------------
|
*/
/*
* Connected User infos
*/
function connectedUser () {
  return (object) [
    "id"=> 1
  ];
}



/*
|--------------------------------------------------------------------------
| GLOBAL HELP
|--------------------------------------------------------------------------
|
*/
/*
* GET ALL ROW INFOS IN TABLE
*/
function getRowInfos($table, $array) {
  $CI = get_instance();
	$CI->load->model('App_model');
  return $CI->App_model->get_rows($table,$array)[0];
}


/*
* Keep user logs ("ADD" || "UPDATE")
*/
function KeepUserLogs($table, $tableId, $action, $dataInfos, $userAdminId)
{
  $CI = get_instance();
	$CI->load->model('App_model');
  $dataLogs = array();

  if($dataInfos&&is_array($dataInfos)){
    foreach($dataInfos as $key => $value):
      $currentValue = "";
      if($action=="UPDATE"){
        $currentValue =  getRowInfos($table, array('id'=>$tableId))->$key;
      }
      array_push($dataLogs, array('column'=>$key, 'initial'=>$currentValue, 'final'=>$value ));
    endforeach;
    $dataAdd['user_admin_id'] = $userAdminId;
    $dataAdd['table'] = $table;
    $dataAdd['table_id'] = $tableId;
    $dataAdd['action'] = $action;
    $dataAdd['logs'] = json_encode($dataLogs);
    $dataAdd['status'] = 2;
    $dataAdd['created_at'] = currentDateTime();
    $dataAdd['updated_at'] = currentDateTime();
    $CI->App_model->add_item('system_logs', $dataAdd);
  }
  
}


?>