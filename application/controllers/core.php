<?php
class core extends CI_Controller
{
	public function index()
	{

	}

	public function getview()
	{
       $this->load->model('core_model');
       $data=$this->core_model->gethead();
       $this->session->set_userdata('users',$data);
       $this->load->view('core_view');

	}

	public function registration()
    {
    
        //set validation rules
         $this->load->model('core_model');

        $this->form_validation->set_rules('fname', 'First Name', 'trim|required|alpha|min_length[3]|max_length[30]');
        $this->form_validation->set_rules('lname', 'Last Name', 'trim|required|alpha|max_length[30]');
        $this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('team', 'team', 'trim|required');
       // $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required');
        
        //validate form input
        if ($this->form_validation->run() == FALSE)
        {
            // fails
            $this->load->model('core_model');
             $data=$this->core_model->gethead();
           // $this->session->set_userdata('task',$task);
           // $data=$this->company_model->getmembers();
            $this->session->set_userdata('users',$data);
            $this->load->view('core_view');
        }
        else
        {
            //insert the user registration details into database
            $data = array(

                'username' => $this->input->post('fname'),
               // 'lname' => $this->input->post('lname'),
               // 'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'team' => $this->input->post('team'),
                'type'=>'h'
               // 'class' => $this->input->post('class'),
               // 'region' => $this->input->post('region'),
               // 'phone' => $this->input->post('phone'),
            );
            
            // insert form data into database
            if ($this->core_model->inserthead($data))
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
                redirect('index.php/core');
            }
            else
            {
                // error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
                redirect('index.php/core/registration');
            }
        }
    }




}

?>
