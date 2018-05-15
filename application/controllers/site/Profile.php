<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('site/Home_model');
		$user_id = 0;
		$user = $this->session->userdata('user');
		foreach ($user as $value) {
			$user_id = $value["id"];
		}
		$data = $this->Home_model->getOrderConfirmYet($user_id);
		$data1 = $this->Home_model->getOrderConfirmed($user_id);
		$this->data['listOrderYetByID'] = $data;
		$this->data['listOrderedByID'] = $data1;



		$this->load->view('site/profile/index', $this->data);

	}

}

/* End of file Profile.php */
/* Location: ./application/controllers/Profile.php */