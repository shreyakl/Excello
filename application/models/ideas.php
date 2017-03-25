<?php

class ideas extends CI_Model
{

	public function addidea($data)
	{
		$this->db->insert('ideas',$data);
		
	}

	public function fetchidea()
	{
		$idea=$this->db->query('SELECT idea,id FROM ideas');
		return $idea->result();
	}

	public function incvote($data)
	{
		$this->db->insert('vote',$data);
		//$data=$this->db->query('INSERT  WHERE user=\''.$usernum.'\' AND idea=\''.$ideanum.'\'');
		
	}
	public function checklike($usernum,$ideanum)
	{
		$idea=$this->db->query('SELECT idea,user,likes FROM vote ');
		foreach ($idea->result() as $row)
		{
			# code...
			
			//echo $row->idea;
			//echo $ideanum;
			if($row->idea==$ideanum  AND $row->user==$usernum AND $row->likes==1)
			{	echo "string";
				return false;
				
			}
		}
			return true;

	}







}

















?>