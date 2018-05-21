<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('site/Register_view');
	}

	public function register()
	{
		$username = $this->input->post('username');
		$pass = $this->input->post('password');
		$email = $this->input->post('email');
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$phone = $this->input->post('phone');
		$gender = $this->input->post('gender');

		$this->load->model('site/Home_model');
		if($this->Home_model->register($username, $pass, $email, $fname, $lname, $phone, $gender)){
			redirect(base_url('site/Login'));
		}
	}

}

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */