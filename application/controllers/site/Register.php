<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->model('site/Home_model');
		if($this->input->post())
		{
			$this->form_validation->set_rules('register','register','callback_check_register');
			//$this->form_validation->set_rules('namsinh', 'Date of birth', 'regex_match[(0[1-9]|1[0-9]|2[0-9]|3(0|1))-(0[1-9]|1[0-2])-\d{4}]');
			if($this->form_validation->run())
			{
				$username = $this->input->post('username');
				$pass = $this->input->post('password');
				$email = $this->input->post('email');
				$fname = $this->input->post('fname');
				$lname = $this->input->post('lname');
				$phone = $this->input->post('phone');
				$gender = $this->input->post('gender');
	        		$create = $this->Home_model->register($username, $pass, $email, $fname, $lname, $phone, $gender);
		        	if($create == true) {
		        		$this->session->set_flashdata('success', 'Successfully created');
		        		redirect(base_url('site/Login'));
		        	}
			}
		}
		$this->load->view('site/register_view');
	}

	// public function register()
	// {
	// 	$username = $this->input->post('username');
	// 	$pass = $this->input->post('password');
	// 	$email = $this->input->post('email');
	// 	$fname = $this->input->post('fname');
	// 	$lname = $this->input->post('lname');
	// 	$phone = $this->input->post('phone');
	// 	$gender = $this->input->post('gender');

	// 	$this->load->model('site/Home_model');
	// 	if($this->Home_model->register($username, $pass, $email, $fname, $lname, $phone, $gender)){
	// 		redirect(base_url('site/Login'));
	// 	}

		
	// }
	public function register()
	{
		$this->form_validation->set_rules('groups', 'Group', 'required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]|is_unique[users.username]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('confirmpassword', 'Confirm password', 'trim|required|matches[password]');
		$this->form_validation->set_rules('fname', 'First name', 'trim|required');
		$this->load->model('site/Home_model');

	        if ($this->form_validation->run() == TRUE) {
	            // true case
	        	$data = array(
	        		'username' => $this->input->post('username'),
	        		'password' => $this->input->post('password'),
	        		'email' => $this->input->post('email'),
	        		'firstname' => $this->input->post('fname'),
	        		'lastname' => $this->input->post('lname'),
	        		'phone' => $this->input->post('phone'),
	        		'gender' => $this->input->post('gender'),
	        	);

	        	$create = $this->Home_model->register($username, $password, $email, $fname, $lname, $phone, $gender);
	        	if($create == true) {
	        		$this->session->set_flashdata('success', 'Successfully created');
	        		redirect(base_url('site/Login'));
	        	}
	        }
	        else {
	            redirect(base_url('site/Register'));
	        }

		
	}

	public function check_register()
	{
		$email = $this->input->post('email');
		// $namsinh = $this->input->post('namsinh');
		// $username = $this->input->post('username');
		// $date = DateTime::createFromFormat('m/d/Y', $namsinh);
		// $year = $date->format('Y');
		// $year = (int)$year;
		// $year2 = true;
		// if ( $year>1899 && $year<2017) {
		// 	$year2 = false;
		// }
		// else{
		// 	$year2 = true;
		// }
		$this->load->model('site/Home_model');
		if ($this->Home_model->checkAccountExist($email)==true) {
			$this->form_validation->set_message(__FUNCTION__,'Tài khoản đã tồn tại, hãy kiểm tra lại !!!');
			return false;
		}
		else {
			return true;
		}
	}
}

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */