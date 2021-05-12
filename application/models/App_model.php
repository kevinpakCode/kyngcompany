<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class App_model extends CI_Model {
  /*
  |--------------------------------------------------------------------------
  | Get rows
  |--------------------------------------------------------------------------
  |
  */

  function get_rows($table,$array)
  {
    $this->db->where($array);
    $query = $this->db->get($table);
    return $query->result();
  }

  function get_rows_order($table,$array,$column,$order)
  {
    $this->db->order_by($column,$order);
    $this->db->where($array);
    $query = $this->db->get($table);
    return $query->result();
  }

  function get_rows_limit($table,$array,$limit)
  {
    $this->db->limit($limit);
    $this->db->where($array);
    $query = $this->db->get($table);
    return $query->result();
  }

  function get_Double_Table($fistTable,$secondTable,$as,$lien,$array,$column,$order)
  {
    $this->db->select($as);
    $this->db->from($fistTable);
    $this->db->join($secondTable, $lien);
    $this->db->order_by($column,$order);
    $this->db->where($array);
    $query = $this->db->get();
    return $query->result();
  }


  /*
  |--------------------------------------------------------------------------
  | add in table
  |--------------------------------------------------------------------------
  |
  */
  function add_item($table,$dataAdd)
  {
    $this->db->insert($table,$dataAdd);
  }


  /*
  |--------------------------------------------------------------------------
  | Update in table
  |--------------------------------------------------------------------------
  |
  */
  function update_item($table,$dataItem,$array)
  {
    $this->db->where($array);
    $this->db->update($table,$dataItem);
  }



  /*
  |--------------------------------------------------------------------------
  | Delete in table
  |--------------------------------------------------------------------------
  |
  */

  function delate_item($table,$array)
  {
    $this->db->where($array);
    $this->db->delete($table);
  }


  /*
  |--------------------------------------------------------------------------
  | Get sum columns
  |--------------------------------------------------------------------------
  |
  */
  function sum_columns($table,$array,$column)
  {
    $this->db->select_sum($column);
    $this->db->from($table);
    $this->db->where($array);
    $query = $this->db->get();
    return  $query->row()->$column;
  }


  /*
  |--------------------------------------------------------------------------
  | Last id insert
  |--------------------------------------------------------------------------
  |
  */
  //Last id insert
  function last_id_insert($table)
  {
    return  $this->db->insert_id($table);
  }


  /*
  |--------------------------------------------------------------------------
  | uploadFiles
  |--------------------------------------------------------------------------
  |
  */
  function uploadFiles($destination, $userfile)
  {
    $config['upload_path']          = $destination;
    $config['allowed_types']        = 'pdf|csv|docx|gif|jpg|png|jpeg';
    $config['max_size']             = 2000;
    $config['max_width']            = 2000;
    $config['max_height']           = 2000;
    $config['remove_spaces']           = TRUE;
    $config['encrypt_name']           = TRUE;
    $this->upload->initialize($config);
    $this->load->library('upload', $config);
  
    if(!isset($userfile)){$userfile='userfile';}

    if($this->upload->do_upload($userfile))
    {
      $NewImg = $this->upload->data();
      $NewImgName  = $NewImg['file_name'];
    }else{
      $NewImgName   = "error";
      $error = array('error' => $this->upload->display_errors());
      var_dump($error);
      exit();
    }
    return $NewImgName;
  }


}//End
?>