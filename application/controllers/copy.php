<?php

class copy extends CI_Controller
{

	
public function getview($usid)
{
    $this->load->model('publicity_model');
    $task=$this->publicity_model->gettask();
     $this->session->set_userdata('ptask',$task);
    
    $data=$this->publicity_model->getmembers();
    $this->session->set_userdata('users',$data);
    $this->session->set_userdata('userid',$usid);
	$this->load->view('publicity_view');

}
public function loadcompanylist()
{
	$this->load->model('publicity_model');
	$data['result']=$this->publicity_model->getdata();
	$this->load->view('institutelist',$data);
}
public function editcompanylist()
{
    $this->load->model('publicity_model');
    $data['result']=$this->publicity_model->getdata();
    $this->load->view('editinstitution',$data);
}
public function updatevisit()
{
    $this->load->model('publicity_model');
    $visited=1;
    $this->publicity_model->updatevisited(['visited' => $visited],$id);
    $this->load->view('editinstitution');
    redirect('index.php/copy/editcompanylist/');
}
public function registration($usid)
  {
    {
        //set validation rules
         $this->load->model('publicity_model');

        $this->form_validation->set_rules('fname', 'First Name', 'trim|required|alpha|min_length[3]|max_length[30]');
        $this->form_validation->set_rules('lname', 'Last Name', 'trim|required|alpha|max_length[30]');
        $this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
       // $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required');
        
        //validate form input
        if ($this->form_validation->run() == FALSE)
        {
            // fails
            $this->load->model('publicity_model');
             $task=$this->publicity_model->gettask();
            $this->session->set_userdata('ptask',$task);
            $data=$this->publicity_model->getmembers();
            $this->session->set_userdata('users',$data);
            $this->load->view('publicity_view');
        }
        else
        {
            //insert the user registration details into database
            $data = array(

                'username' => $this->input->post('fname'),
               // 'lname' => $this->input->post('lname'),
               // 'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'team' => 'publicity'
               // 'class' => $this->input->post('class'),
               // 'region' => $this->input->post('region'),
               // 'phone' => $this->input->post('phone'),
            );
            
            // insert form data into database
            if ($this->publicity_model->insertUser($data))
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
                redirect('index.php/copy/getview/'.$usid);
            }
            else
            {
                // error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
                redirect('index.php/copy/registration');
            }
        }
    }
    
    function verify($hash=NULL)
    {
        if ($this->user_model->verifyEmailID($hash))
        {
            $this->session->set_flashdata('verify_msg','<div class="alert alert-success text-center">Your Email Address is successfully verified! Please login to access your account!</div>');
            redirect('index.php/copy/registration');
        }
        else
        {
            $this->session->set_flashdata('verify_msg','<div class="alert alert-danger text-center">Sorry! There is error verifying your Email Address!</div>');
            redirect('index.php/copy/registration');
        }
    }
  }
 public function addtask()
  {
    {
        //set validation rules
         $this->load->model('publicity_model');

        $this->form_validation->set_rules('action', 'Task', 'required');
        $this->form_validation->set_rules('team', 'Team Name', 'required');
        if ($this->form_validation->run() == FALSE)
        {
            // fails
            $this->load->model('publicity_model');
             $task=$this->publicity_model->gettask();
            $this->session->set_userdata('ptask',$task);
            $data=$this->publicity_model->getmembers();
            $this->session->set_userdata('users',$data);
            $this->load->view('publicity_view');
        }
        else
        {
            //insert the user registration details into database
            $data = array(

                'action' => $this->input->post('action'),
               
                'team' => $this->input->post('team'),

          
            );
            
           
            if ($this->publicity_model->inserttask($data))
            {
              
                redirect('index.php/copy');
            }
            else
            {
              
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
                redirect('index.php/copy/addtask');
            }
        }
    }
    
    
  }
  public function company_reg()
  {
    
        $this->load->model('publicity_model');
        //set validation rules
        $this->form_validation->set_rules('Name', 'Institute Name', 'trim|required');
        $this->form_validation->set_rules('Region', 'Region', 'trim|required|alpha');
        $this->form_validation->set_rules('Email', 'Email ID', 'trim|valid_email');
        $this->form_validation->set_rules('Address','Contact Details','required');
       // $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required');
        
        //validate form input
        if ($this->form_validation->run() == FALSE)
        {
            // fails
            $this->load->view('publicity_view');
        }
        else
        {
            //insert the user registration details into database
            $data = array(
                'Name' => $this->input->post('Name'),
                'Region' => $this->input->post('Region'),
                'Email' => $this->input->post('Email'),
                'Address' => $this->input->post('Addres'),
                'Event'=>$this->input->post('Event')
            );
            
            // insert form data into database
            if ($this->publicity_model->insertCompany($data))
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
                redirect('index.php/copy');
            }
            else
            {
                // error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
                redirect('index.php/copy/company_reg');
            }
        }
    }
    
    function verify($hash=NULL)
    {
        if ($this->user_model->verifyEmailID($hash))
        {
            $this->session->set_flashdata('verify_msg','<div class="alert alert-success text-center">Your Email Address is successfully verified! Please login to access your account!</div>');
            redirect('copy/company_reg');
        }
        else
        {
            $this->session->set_flashdata('verify_msg','<div class="alert alert-danger text-center">Sorry! There is error verifying your Email Address!</div>');
            redirect('index.php/copy/company_reg');
        }
    }

   
  




   }
   ?>

