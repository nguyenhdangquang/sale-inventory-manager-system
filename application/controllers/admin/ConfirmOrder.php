<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ConfirmOrder extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('admin/Admin_model');
		$data = $this->Admin_model->Order_ConfirmYet();

		$data1 = $this->Admin_model->Order_Confirmed();

		$this->data['listTicketConfirmYet'] = $data;
		$this->data['listTicketConfirmed'] = $data1;


		$this->load->view('admin/ticket-confirm/index', $this->data);
	}

	public function Confirm($id)
	{
		$this->load->model('admin/Admin_model');

		if($this->Admin_model->UpdateConfirmByID($id)){
			redirect(base_url('repository/Confirm'));
		}
	}
	// public function huy($idNhandc)
	// {
	// 	$this->load->model('Home_model');
	// 	if($this->Home_model->HuybyIDinProfile($idNhandc)){
	// 		redirect(base_url('admin/Ticket_Confirm'));
	// 	}
	// }

}

/* End of file ConfirmOrder.php */
/* Location: ./application/controllers/ConfirmOrder.php */