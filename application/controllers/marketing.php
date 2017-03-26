<?php

   class marketing extends CI_Controller
   {
       
       public function index()
       {
          //$this->load->view('mark_volunteer');
       }
       public function getview()
       {
        $this->load->model('vol_list');
        $data=$this->vol_list->gettask(4);
        $this->session->set_userdata('task',$data);
       	$this->load->view('mark_volunteer');
       }
        public function setdone($tid)
       {

        $this->load->model('vol_list');
        //$this->load->controller('marketing');
        $this->vol_list->setdone($tid);
        redirect(base_url().'index.php/marketing/getview');
        //$data=$this->vol_list->gettask(4);
        //$this->session->set_userdata('task',$data);
        //$this->load->view('mark_volunteer');
        
       }



       public function companylist_vol()
       {
        
       	$this->load->model('vol_list');
       	$data=$this->vol_list->getlist(4);
       $this->session->set_userdata('companylist',$data);
       	$this->load->view('companylistview_vol');
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
            $this->load->view('mark_volunteer');
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
                redirect('index.php/marketing/getview');
            }
            else
            {
                // error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
                redirect('index.php/marketing/company_reg');
            }
        }
    }
    


   }


?>