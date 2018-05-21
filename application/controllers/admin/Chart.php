<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chart extends CI_Controller {

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


  		$this->data['listCTV'] = $final_parking_data;


	    
	    	$this->data['temp'] = 'admin/chart/content2';
	    	$this->load->view('admin/chart/index',$this->data);
	}
	
	public function chartYear()
	{
		$this->load->model('Admin_model');
  		$data = $this->Admin_model->ChartCTVbyYear();

  		/*var_dump($data1);
	    die();*/
  		$this->data['ThongKeDHbyYear'] = $data;

	    
	    $this->data['temp'] = 'admin/chart/content';
	    $this->load->view('admin/chart/index',$this->data);
	}

}

/* End of file Chart.php */
/* Location: ./application/controllers/Chart.php */