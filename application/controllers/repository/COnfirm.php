<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class COnfirm extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->data['page_title'] = 'Order Confirm';
	}

	public function index()
	{
		if(!in_array('viewReports', $this->permission)) {
	            redirect('repository/dashboard', 'refresh');
	        }
	        $this->load->model('admin/Admin_model');
		$data = $this->Admin_model->Order_ConfirmYet();

		$data1 = $this->Admin_model->Order_Confirmed();

		$this->data['listTicketConfirmYet'] = $data;
		$this->data['listTicketConfirmed'] = $data1;

	        $this->render_template('repository/orderconfirm/index', $this->data);
	}
	public function Confirm($id)
	{
		$this->load->model('admin/Admin_model');

		if($this->Admin_model->UpdateConfirmByID($id)){
			redirect(base_url('repository/Confirm'));
		}
	}
	public function huy($idNhandc)
	{
		$this->load->model('Home_model');
		if($this->Home_model->HuybyIDinProfile($idNhandc)){
			redirect(base_url('admin/Ticket_Confirm'));
		}
	}

}

/* End of file COnfirm.php */
/* Location: ./application/controllers/COnfirm.php */