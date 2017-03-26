<?php

class loadtemplate extends CI_Controller
{
public function index()
{
    
}
	
public function getview($usid)
{
    $this->load->model('company_model');
    $task=$this->company_model->gettask();
     $this->session->set_userdata('task',$task);
    
    $data=$this->company_model->getmembers();
    $this->session->set_userdata('users',$data);
	$this->load->view('template');

}
public function loadcompanylist()
{
	$this->load->model('company_model');
	$data['result']=$this->company_model->getdata();
	$this->load->view('companylist',$data);
}
public function registration()
  {
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
            // fails
            $this->load->model('company_model');
             $task=$this->company_model->gettask();
            $this->session->set_userdata('task',$task);
            $data=$this->company_model->getmembers();
            $this->session->set_userdata('users',$data);
            $this->load->view('template');
        }
        else
        {
            //insert the user registration details into database
            $data = array(

                'username' => $this->input->post('fname'),
               // 'lname' => $this->input->post('lname'),
               // 'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'team' => 'marketing',
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
                redirect('index.php/loadtemplate');
            }
            else
            {
                // error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
                redirect('index.php/loadtemplate/registration');
            }
        }
    }
    
    function verify($hash=NULL)
    {
        if ($this->user_model->verifyEmailID($hash))
        {
            $this->session->set_flashdata('verify_msg','<div class="alert alert-success text-center">Your Email Address is successfully verified! Please login to access your account!</div>');
            redirect('index.php/loadtemplate/registration');
        }
        else
        {
            $this->session->set_flashdata('verify_msg','<div class="alert alert-danger text-center">Sorry! There is error verifying your Email Address!</div>');
            redirect('index.php/loadtemplate/registration');
        }
    }
  }
 public function addtask()
  {
    {
        //set validation rules
         $this->load->model('company_model');

        $this->form_validation->set_rules('action', 'Task', 'required');
        $this->form_validation->set_rules('team', 'Team Name', 'required');
        if ($this->form_validation->run() == FALSE)
        {
            // fails
            $this->load->model('company_model');
             $task=$this->company_model->gettask();
            $this->session->set_userdata('task',$task);
            $data=$this->company_model->getmembers();
            $this->session->set_userdata('users',$data);
            $this->load->view('template');
        }
        else
        {
            //insert the user registration details into database
            $data = array(

                'action' => $this->input->post('action'),
               
                'region' => $this->input->post('team'),

          
            );
            
           
            if ($this->company_model->inserttask($data))
            {
              
                redirect('index.php/loadtemplate');
            }
            else
            {
              
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
                redirect('index.php/loadtemplate/addtask');
            }
        }
    }
    
    
  }
  public function company_reg()
  {
    
        $this->load->model('company_model');
        //set validation rules
        $this->form_validation->set_rules('Name', 'Company Name', 'trim|required');
        $this->form_validation->set_rules('Region', 'Region', 'trim|required|alpha');
        $this->form_validation->set_rules('Email', 'Email ID', 'trim|valid_email');
        $this->form_validation->set_rules('Address','Contact Details','required');
       // $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required');
        
        //validate form input
        if ($this->form_validation->run() == FALSE)
        {
            // fails
            $this->load->view('template');
        }
        else
        {
            //insert the user registration details into database
            $data = array(
                'Name' => $this->input->post('Name'),
                'Region' => $this->input->post('Region'),
                'Email' => $this->input->post('Email'),
                'Address' => $this->input->post('Address')
                
            );
            
            // insert form data into database
            if ($this->company_model->insertCompany($data))
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
                redirect('index.php/loadtemplate');
            }
            else
            {
                // error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
                redirect('index.php/loadtemplate/company_reg');
            }
        }
    }
    
    function verify($hash=NULL)
    {
        if ($this->user_model->verifyEmailID($hash))
        {
            $this->session->set_flashdata('verify_msg','<div class="alert alert-success text-center">Your Email Address is successfully verified! Please login to access your account!</div>');
            redirect('loadtemplate/company_reg');
        }
        else
        {
            $this->session->set_flashdata('verify_msg','<div class="alert alert-danger text-center">Sorry! There is error verifying your Email Address!</div>');
            redirect('index.php/loadtemplate/company_reg');
        }
    }

   
  




   }
   ?>

