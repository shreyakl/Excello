<?php

class User_model extends CI_Model
{
public function insertUser($data)
{
	$config['hostname']="localhost";
	$config['username']="root";
	$config['password']="";
	$config['database']="errand";
	$config['dbdriver'] = 'mysqli';

	
	$db1=$this->load->database($config,TRUE);
	//$this->db->query('INSERT id,username,password VALUES '' INTO users');

	//$db1->insert('users',$data);

	return true;
}

/*
public function get_user($user_id)
{
	$config['hostname']="localhost";
	$config['username']="root";
	$config['password']="";
	$config['database']="errand";
	$config['dbdriver'] = 'mysqli';


	
	$db1=$this->load->database($config,TRUE);
	//$db1->where('id',$user_id);

	$db1->where( [

		'id' => $user_id
		//,'username' => $username

		]);
	
	$q=$db1->get('users');


	//$q=$db1->query("SELECT * FROM users WHERE id = $user_id");
	
	return $q->result();
	

}*/
/*
public function delete_users($id)
{
	$config['hostname']="localhost";
	$config['username']="root";
	$config['password']="";
	$config['database']="errand";
	$config['dbdriver'] = 'mysqli';

	
	$db1=$this->load->database($config,TRUE);

	$db1->where('username',$id);
	$db1->delete('users');
}
*/
public function login_user($username,$password)
{
	/*$query=$this->db->get('users');
	$object=$query->result();
	foreach($object as $usr)
	{
		if(($usr->username == $username)&&($usr->password == $password))
			return TRUE;
	}
	return FALSE;*/

	$this->db->where('username',$username);
	$this->db->where('password',$password);
	$result = $this->db->get('users');

	if($result->num_rows()==1)
	{
		 return $result->result();
		
	}
	//return false;
}

}
?>