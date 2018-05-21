<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
	}

	public function index()
	{
		$this->load->model('site/Home_model');
		$carts = $this->cart->contents();
		$data = $this->Home_model->get4List_products();
		$data1 = $this->Home_model->getAllList_products();


		$this->data['List4products'] = $data;
		$this->data['List4products_temp'] = $data;
		$this->data['ListAllproducts'] = $data1;
		$this->data['ListAllproducts_temp'] = $data1;
		$this->data['listcart'] = $carts;



		$this->load->view('site/products/index', $this->data);
	}

}

/* End of file Products.php */
/* Location: ./application/controllers/Products.php */