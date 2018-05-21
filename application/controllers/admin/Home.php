<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('admin/Admin_model');
	    	$data = $this->Admin_model->ChartHome('2018');

	    	$final_parking_data = array();
		foreach ($data as $k => $v) {
			
			if(count($v) > 1) {
				$total_amount_earned = array();
				foreach ($v as $k2 => $v2) {
					if($v2) {
						$total_amount_earned[] = $v2['net_amount'];						
					}
				}
				$final_parking_data[$k] = array_sum($total_amount_earned);	
			}
			else {
				$final_parking_data[$k] = 0;	
			}
			
		}
	    	// var_dump($final_parking_data);
	    	// die();
  // 		$totalEmp = $this->Admin_model->getTotalEmp();
  // 		$totalCus = $this->Admin_model->getTotalCus();
  // 		$totalRevenue= $this->Admin_model->getTotalRevenue();
  // 		$totalFilm = $this->Admin_model->getTotalFilm();
  // 		$numTicketYet = $this->Admin_model->getNumTicketYet();
  // 		$numTicketConfirm = $this->Admin_model->getNumTicketConfirm();


  		/*var_dump($data);
	    die();*/


  		$this->data['listHOME'] = $final_parking_data;
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