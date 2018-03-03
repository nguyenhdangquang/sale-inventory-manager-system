<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('site/home/index');
	}
	public function detail()
	{
		$this->load->view('site/detail/index');
	}
	public function cart()
	{
		$this->load->view('site/cart/index');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/site/Home.php */