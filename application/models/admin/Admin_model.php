<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getListAllUser()
	{
		$this->db->select('*');
		$dulieu = $this->db->get('user');

		//bien du lieu thanh mang
		$dulieu = $dulieu->result_array();

		/*echo '<pre>';
		var_dump($dulieu);*/
		return $dulieu;

	}

	public function checkLogin($a_UserInfo)
	{
		$this->db->select('*');
		$this->db->where('email', $a_UserInfo["username"]);
		$this->db->where('password', md5($a_UserInfo["password"]));

		$dulieu = $this->db->get('users');

		//bien du lieu thanh mang
		$dulieu = $dulieu->result_array();

		/*var_dump($dulieu);
		die();*/

		if(count($dulieu) >0){
    			return $dulieu;
	    	} 
	    	else
	    	{
    			return false;
	    	}
    		
	}
	// get orders yet
	public function Order_ConfirmYet()
	{
		$this->db->select('orders_item.qty, orders_item.id, orders_item.rate, products.price, products.sku, products.image, orders.date_time, orders_item.amount,orders_item.order_id');
		$this->db->from('orders');
		$this->db->join('orders_item', 'orders_item.order_id = orders.id', 'left');
		$this->db->join('products', 'products.id = orders_item.product_id', 'left');
		$this->db->where('orders.paid_status', 2);
		$dulieu = $this->db->get();

		//bien du lieu thanh mang
		$dulieu = $dulieu->result_array();

		/*echo '<pre>';
		var_dump($dulieu);
		die();*/

		return $dulieu;
	}
	// get orders confirmed
	public function Order_Confirmed()
	{
		$this->db->select('orders_item.qty, orders_item.id, orders_item.rate, products.price, products.sku, products.image, orders.date_time, orders_item.amount, orders_item.order_id');
		$this->db->from('orders');
		$this->db->join('orders_item', 'orders_item.order_id = orders.id', 'left');
		$this->db->join('products', 'products.id = orders_item.product_id', 'left');
		$this->db->where('orders.paid_status', 1);
		$dulieu = $this->db->get();

		//bien du lieu thanh mang
		$dulieu = $dulieu->result_array();

		/*echo '<pre>';
		var_dump($dulieu);
		die();*/

		return $dulieu;
	}

	public function UpdateConfirmByID($id)
	{
		$data = array('paid_status' => 1);

		$this->db->where('id', $id);

		return $this->db->update('orders', $data);
	}

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */