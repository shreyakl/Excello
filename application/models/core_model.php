<?php
class core_model extends CI_Model
{

  public function gethead()
  {
  	  $data=$this->db->query('SELECT username,team FROM users WHERE  type=\'h\'');
  	  return $data->result();
  }
 public function inserthead($data)
 {
 	$this->db->insert('users',$data);
	
 }





}














?>