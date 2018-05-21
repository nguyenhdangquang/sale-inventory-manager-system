<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	private $b_Check = false;

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	public function index()
	{
		if($this->input->post())
		{
			$this->form_validation->set_rules('login','login','callback_check_login');
			if($this->form_validation->run())
			{
				//$this->session->set_userdata('login',true);
				redirect(Base_url('site/Home'));
			}
		}
		$this->load->view('site/login');
	}
	public function check_login()
	{
		$a_UserInfo['email'] = $this->input->post('email');
		$a_UserInfo['pass'] = $this->input->post('password');
		
		$this->load->model('site/Home_model');
		//$a_UserChecking = $this->Admin_model->checkLogin($a_UserInfo);
		if($this->Home_model->checkLogin($a_UserInfo))
		{
			$this->session->set_userdata('user', $this->Home_model->checkLogin($a_UserInfo));
			$this->form_validation->set_message(__FUNCTION__,'Đăng nhập thành công');
			return true;
		}
		$this->form_validation->set_message(__FUNCTION__,'<p style="color:red">Đăng nhập không thành công<p/>');
		return false;
	}
	
	public function logout()
	{
		$this->session->unset_userdata('user');
        	$this->session->sess_destroy();
        	redirect(base_url('site/Login'));
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */