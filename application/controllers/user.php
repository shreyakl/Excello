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
						echo $user_id->type;
						if($user_id->id)
						{
							echo "string";
							$user_data = array(

													'user_id' => $user_id->id,
													'username' => $username,
													'logged_in'=> TRUE
											   );
							$this->session->set_userdata('user',$user_data);
							if($user_id->type=='c')
								redirect('index.php/core');
							elseif ($user_id->type=='h'&&$user_id->team=='marketing')
							{
								redirect('index.php/loadtemplate');
							}
							elseif ($user_id->type=='h'&&$user_id->team=='initiative')
							{
								redirect('index.php/initiatives_cont');
							}
							elseif ($user_id->type=='v'&&$user_id->team=='marketing')
							{
								redirect('index.php/marketing/getview');
							}
							elseif ($user_id->type=='v'&&$user_id->team=='initiatives')
							{
								//redirect('marketing/getview');
							}

						}
						else
						{
							redirect('index.php/home');
						}

		}

	}
}



?>