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
		$this->session->set_userdata('usid',$user);
		$this->load->view('initiatives',$getidea);
	
	}
	public function addIdea($user)
	{
		//$user=5;
		$this->load->model('ideas');
		$idea=$this->input->post('idea');
		$data=array('idea'=>$idea);
		//$getidea['idea']=
		$this->ideas->addidea($data);
		
		$getidea['idea']=$this->ideas->fetchidea();
		$this->session->set_userdata('usid',$user);
		$this->load->view('initiatives',$getidea);
	}
	public function registration($user)
  	{
    
        //set validation rules
         $this->load->model('company_model');

        $this->form_validation->set_rules('fname', 'First Name', 'trim|required|alpha|min_length[3]|max_length[30]');
        $this->form_validation->set_rules('lname', 'Last Name', 'trim|required|alpha|max_length[30]');
        $this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
       // $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required');
        
        //validate form input
        if ($this->form_validation->run() == FALSE)
        {
        	$this->load->model('ideas');
			//$this->session->set_userdata('idea',$getidea);
			$getidea['idea']=$this->ideas->fetchidea();
			$this->session->set_userdata('usid',$user);
			$this->load->view('initiatives',$getidea);
		
            // fails
            
        }
        else
        {
            //insert the user registration details into database
            $data = array(

                'username' => $this->input->post('fname'),
               // 'lname' => $this->input->post('lname'),
               // 'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'team' => 'initiatives',
                'type'=>'v'
               // 'class' => $this->input->post('class'),
               // 'region' => $this->input->post('region'),
               // 'phone' => $this->input->post('phone'),
            );
            
            // insert form data into database
            if ($this->company_model->insertUser($data))
            {
                // send email
               /* if ($this->user_model->sendEmail($this->input->post('email')))
                {
                    // successfully sent mail
                    $this->session->set_flashdata('msg','<div class="alert alert-success text-center">You are Successfully Registered! Please confirm the mail sent to your Email-ID!!!</div>');
                    redirect('welcome/registration');
                }
                else
                {
                    // error
                    $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
                    redirect('welcome/registration');
                }*/
                redirect('index.php/initiatives_cont/getview'.$user);
            }
            else
            {
                // error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
                redirect('index.php/initiatives_cont/registration/'.$user);
            }
        }
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