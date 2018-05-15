<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// $this->load->model('Admin_model');
	 //    	$data = $this->Admin_model->ChartHome();
  // 		$totalEmp = $this->Admin_model->getTotalEmp();
  // 		$totalCus = $this->Admin_model->getTotalCus();
  // 		$totalRevenue= $this->Admin_model->getTotalRevenue();
  // 		$totalFilm = $this->Admin_model->getTotalFilm();
  // 		$numTicketYet = $this->Admin_model->getNumTicketYet();
  // 		$numTicketConfirm = $this->Admin_model->getNumTicketConfirm();


  		/*var_dump($data);
	    die();*/


  		// $this->data['listHOME'] = $data;
  		// $this->data['totalEmp'] = $totalEmp;
  		// $this->data['totalCus'] = $totalCus;
  		// $this->data['totalRevenue'] = $totalRevenue;
  		// $this->data['totalFilm'] = $totalFilm;
  		// $this->data['totalNumYet'] = $numTicketYet;
  		// $this->data['numTicketConfirm'] = $numTicketConfirm;

	    $this->data['temp'] = 'admin/home/content';
	    /*var_dump($this->data);
	    die();*/
	    $this->load->view('admin/layout',$this->data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */