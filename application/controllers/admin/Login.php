<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		#Tải thư viện  và helper của Form trên CodeIgniter
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
				redirect(Base_url('admin/home'));
			}
		}
		$this->load->view('admin/login/index');
	}

	function check_login()
	{
		$a_UserInfo['username'] = $this->input->post('username');
		$a_UserInfo['password'] = $this->input->post('password');

		
		$this->load->model('admin/Admin_model');

		//$a_UserChecking = $this->Admin_model->checkLogin($a_UserInfo);
		if($this->Admin_model->checkLogin($a_UserInfo))
		{
			//$this->session->sess_expiration = 14400; // 4 Hours
			$this->session->set_userdata('Employee', $this->Admin_model->checkLogin($a_UserInfo));
			return true;
		}
		$this->form_validation->set_message(__FUNCTION__,'không đăng nhập thành công');
		return false;
	}

	public function logout()
	{
		$this->session->unset_userdata('Employee');
        	$this->session->sess_destroy();
        	redirect(base_url('admin/Login'));
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */