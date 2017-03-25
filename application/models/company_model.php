<?php
class Company_model  extends CI_Model
{
	public function getdata()
	{
		$data=$this->db->query('SELECT id,Name,Region,Address FROM company');
		return $data->result();
	}
	public function getmembers()
	{
		$data=$this->db->query('SELECT id,username FROM users');
		return $data->result();
	}
    public function gettask()
    {
    	$data=$this->db->query('SELECT action,team,done FROM task');
		return $data->result();
    }

	public function insertCompany($data)
	{
		return $this->db->insert('company',$data);
	}
	public function insertUser($data)
	{
	   $this->db->insert('users',$data);
	}
	public function inserttask($data)
	{
		$this->db->insert('task',$data);
	}
}
?>