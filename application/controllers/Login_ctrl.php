<?php

/**
 * 
 */
class Login_ctrl extends CI_Controller
{
	public function index()
	{
		$this->load->view('login');
	}

	public function check()
	{
		$result = $this->Login_mdl->login();

		if ($result) 
		{
			$session_data = array(
				'id'		=>	$result['users_id'],
				'email'		=>	$result['users_email']
			);

			$this->session->set_userdata('logged_in', $session_data);

			redirect('category');
		}
		else
		{
			$data = array('error_message' => 'Invalid email or password.');

			$this->load->view('login',$data);
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		session_destroy();

		redirect('login');
	}











}
?>