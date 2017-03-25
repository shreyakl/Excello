<?php

class initiatives_cont extends CI_Controller
{
	public function index()
	{

		
	}
	public function loadinitiatives($user)
	{
		
		$this->load->model('ideas');
		//$this->session->set_userdata('idea',$getidea);
		$getidea['idea']=$this->ideas->fetchidea();
		$this->session->set_userdata('user',$user);
		$this->load->view('initiatives',$getidea);
	
	}
	public function addIdea()
	{
		$user=5;
		$this->load->model('ideas');
		$idea=$this->input->post('idea');
		$data=array('idea'=>$idea);
		//$getidea['idea']=
		$this->ideas->addidea($data);
		
		$getidea['idea']=$this->ideas->fetchidea();
		$this->session->set_userdata('user',$user);
		$this->load->view('initiatives',$getidea);
	}
	public function voteinc($user,$idea)
	{
		
		$this->load->model('ideas');
		if($this->ideas->checklike($user,$idea)==true)
			{
				//echo "true";
				$data=array(
					'idea'=>$idea,
					'user'=>$user,
					'likes'=>1
					);
				$this->ideas->incvote($data);
			}
		
		$getidea['idea']=$this->ideas->fetchidea();
		$this->session->set_userdata('user',$user);
		$this->load->view('initiatives',$getidea);
	}
}


?>