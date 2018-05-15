<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends Admin_Controller 
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('repository/model_auth');
	}

	/* 
		Check if the login form is submitted, and validates the user credential
		If not submitted it redirects to the login page
	*/
	public function login()
	{

		$this->logged_in();

		$this->form_validation->set_rules('email', 'Email', 'required');
        	$this->form_validation->set_rules('password', 'Password', 'required');

	        if ($this->form_validation->run() == TRUE) {
	            // true case
	        	$a_UserInfo['email'] = $this->input->post('email');
			$a_UserInfo['pass'] = $this->input->post('password');
	           	$email_exists = $this->model_auth->check_email($a_UserInfo['email']);

	           	if($email_exists == TRUE) {
	           		$login = $this->model_auth->login($a_UserInfo);

	           		if($login) {
	           			$logged_in_sess = array(
	           				'admin' => $this->model_auth->login($a_UserInfo),
					        'logged_in' => TRUE
						);

					$this->session->set_userdata($logged_in_sess);
					// $this->session->set_userdata('user_repository', $this->model_auth->login($a_UserInfo));
	           			redirect('repository/dashboard', 'refresh');
	           		}
	           		else {
	           			$this->data['errors'] = 'Incorrect username/password combination';
	           			$this->load->view('repository/login', $this->data);
	           		}
	           	}
	           	else {
	           		$this->data['errors'] = 'Email does not exists';

	           		$this->load->view('repository/login', $this->data);
	           	}	
	        }
	        else {
	            // false case
	            $this->load->view('repository/login');
	        }	
	}

	/*
		clears the session and redirects to login page
	*/
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('repository/auth/login', 'refresh');
	}




	//Viet
	// public function index()
	// {
	// 	if($this->input->post())
	// 	{
	// 		$this->form_validation->set_rules('email', 'Email', 'required');
 //         		$this->form_validation->set_rules('password', 'Password', 'required');
	// 		$this->form_validation->set_rules('login','login','callback_check_login');
	// 		if($this->form_validation->run())
	// 		{
	// 			//$this->session->set_userdata('login',true);
	// 			redirect(Base_url('repository/Dashboard'));
	// 		}
	// 	}
	// 	$this->load->view('repository/login');
	// }
	// public function check_login()
	// {
	// 	$a_UserInfo['email'] = $this->input->post('email');
	// 	$a_UserInfo['pass'] = $this->input->post('password');
		
	// 	$this->load->model('site/Home_model');
	// 	//$a_UserChecking = $this->Admin_model->checkLogin($a_UserInfo);
	// 	if($this->model_auth->login($a_UserInfo))
	// 	{
	// 		$this->session->set_userdata('user_repository', $this->model_auth->login($a_UserInfo));
	// 		$this->form_validation->set_message(__FUNCTION__,'Đăng nhập thành công');
	// 		return true;
	// 	}
	// 	$this->form_validation->set_message(__FUNCTION__,'Đăng nhập không thành công');
	// 	return false;
	// }
	/*
		clears the session and redirects to login page
	*/

}
