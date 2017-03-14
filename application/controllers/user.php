<?php

class User extends CI_Controller
{

	/*public function show()
	{

			//$this->load->model('user_model');
			


			$username="William";
			$password="secret";

			$this->user_model->insert_users(
				[

					'username'=> $username,
					'password'=> $password

				]);


			$data['r']=$this->user_model->get_user(1);
		$this->load->view('user_view',$data);
	}

	public function delete()
	{
		$id="William";

		$this->user_model->delete_users($id);
	}
*/

	public function login()
	{
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');

		if($this->form_validation->run() == FALSE)
		{
			$data=array(
							'errors' => validation_errors()
						);
			$this->session->set_flashdata($data);
			redirect('home');
		}

		else
		{

							$username = $this->input->post('username');
							$password = $this->input->post('password');
					
			
						$user_id=$this->user_model->login_user($username,$password);
						
						if($user_id)
						{

							$user_data = array(

													'user_id' => $user_id,
													'username' => $username,
													'logged_in'=> TRUE
											   );
							$this->session->set_userdata($user_data);
							$this->load->view('basic_form');

						}
						else
						{
							redirect('home');
						}

		}

	}
}



?>