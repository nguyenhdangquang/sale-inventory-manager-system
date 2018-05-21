<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
	}

	public function index()
	{
		$str = $this->input->post('txtSearch');
		$this->load->model('site/Home_model');
		$data = $this->Home_model->ListAllbytheSameWord($str);
		$carts = $this->cart->contents();
		$data2 = $this->Home_model->get4List_topproducts();
		$data1 = $this->Home_model->getAllList_products();

		$this->data['byWord'] = $data;
		


		$this->data['List4products'] = $data2;
		$this->data['List4products_temp'] = $data2;
		$this->data['ListAllproducts'] = $data1;
		$this->data['ListAllproducts_temp'] = $data1;
		$this->data['listcart'] = $carts;

		$this->load->view('site/search/index', $this->data);
	}

}

/* End of file Search.php */
/* Location: ./application/controllers/Search.php */