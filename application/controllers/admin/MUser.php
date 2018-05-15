<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MUser extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('admin/Admin_model');
		$data = $this->Admin_model->getListAllUser();

		$this->data['listUser'] = $data;

		/*var_dump($data);*/

		$this->data['temp'] = 'admin/m-user/content';

		$this->load->view('admin/m-user/index',$this->data);
	}

}

/* End of file MUser.php */
/* Location: ./application/controllers/MUser.php */