<?php
class Company_model  extends CI_Model
{
	public function getdata()
	{
		$data=$this->db->query('SELECT id,Name,Region,Address FROM company');
		return $data->result();
	}


	public function insertCompany($data)
	{
		return $this->db->insert('company',$data);
	}
}
?>