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
			redirect('index.php/home');
		}

		else
		{

							$username = $this->input->post('username');
							$password = $this->input->post('password');
					
			
						$user=$this->user_model->login_user($username,$password);
						echo $user->type;
						if($user->id)
						{
							echo "string";
							$user_data = array(

													'user_id' => $user->id,
													'username' => $username,
													'logged_in'=> TRUE
											   );
							$this->session->set_userdata('user',$user_data);
							if($user->type=='c')
								redirect('index.php/core/getview'.$user->id);
							elseif ($user->type=='h'&&$user->team=='marketing')
							{
								redirect('index.php/loadtemplate/getview/'.$user->id);
							}
							elseif ($user->type=='h'&&$user->team=='initiatives')
							{
								redirect('index.php/initiatives_cont/loadinitiatives/'.$user->id);
							}
							elseif ($user->type=='v'&&$user->team=='marketing')
							{
								redirect('index.php/marketing/getview/'.$user->id);
							}
							elseif ($user->type=='v'&&$user->team=='initiatives')
							{
								//redirect('marketing/getview');
							}
							elseif ($user->type=='h'&&$user->team=='publicity')
							{
								redirect('index.php/copy/getview/'.$user->id);
							}
							elseif ($user->type=='v'&&$user->team=='publicity')
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