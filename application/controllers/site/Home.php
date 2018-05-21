<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
	}

	public function index()
	{
		$this->load->model('site/Home_model');
		$carts = $this->cart->contents();
		$data = $this->Home_model->get4List_topproducts();
		$data2 = $this->Home_model->get6List_products();
		$list_catalog = $this->Home_model->get_list_catalogies();

		$this->data['list4topproducts'] = $data;
		$this->data['list6products'] = $data2;
		$this->data['listcatalogies'] = $list_catalog;
		$this->data['listcart'] = $carts;

		$this->load->view('site/home/index', $this->data);
	}
	public function detail($ProductID)
	{
		$this->load->model('site/Home_model');
		$data = $this->Home_model->getFindOne($ProductID);

		$this->data['detail_desc'] = $data;
		$this->load->view('site/detail/index', $this->data);
	}
	public function cart()
	{

		$this->load->view('site/cart/index');
	}
	public function productsbyID($CateID)
	{
		$this->load->model('site/Home_model');
		$data = $this->Home_model->getProductsbyIDCate($CateID);

		$data2 = $this->Home_model->get6List_products();
		$list_catalog = $this->Home_model->get_list_catalogies();
		$this->data['list4products'] = $data;
		$this->data['list6products'] = $data2;
		$this->data['listcatalogies'] = $list_catalog;

		$this->load->view('site/home/index', $this->data);
	}
	public function Search(){
		$str = $this->input->post('txtSearch');
		$this->load->model('site/Home_model');
		$data = $this->Home_model->ListAllbytheSameWord($str);
		$data2 = $this->Home_model->get6List_products();
		$list_catalog = $this->Home_model->get_list_catalogies();

		$this->data['list4products'] = $data;
		$this->data['list6products'] = $data2;
		$this->data['listcatalogies'] = $list_catalog;

		$this->load->view('site/home/index', $this->data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/site/Home.php */