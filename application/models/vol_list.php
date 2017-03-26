<?php
 
class vol_list extends CI_Model
{
     

      public function  getlist($userid)
      {
      	
        $data=$this->db->query('SELECT Name,Region,Address FROM Company,Users WHERE company.Region=users.area AND users.id=\''.$userid.'\'');
        return $data;
      } 
      public function gettask($userid)
      {
      	$task=$this->db->query('SELECT action,region,done,tid FROM task,Users WHERE task.region=users.area AND users.id=\''.$userid.'\'');
      	return $task->result();
      }	
      public function setdone($tid)
      {
      	$this->db->query('UPDATE task SET done=\'1\' WHERE task.tid=\''.$tid.'\'' );
      }
}











?>