<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	// get list 4 products
	public function get4List_topproducts()
	{
		$this->db->select('COUNT(`rating`.`qty`), `products`.`name`, `products`.`id`, `products`.`price`, `products`.`image`');
		$this->db->from('rating');
		$this->db->join('products', 'products.id = rating.product_id', 'left');
		$this->db->group_by('`rating`.`product_id`');
		$this->db->limit('4');
		$dulieu = $this->db->get();

		

		//bien du lieu thanh mang
		$dulieu = $dulieu->result_array();

		/*echo '<pre>';
		var_dump($dulieu);*/
		return $dulieu;

	}
	// get list 4 products
	public function getProductsbyIDCate($IDCate)
	{
		$this->db->select('*');
		$this->db->where('category_id', $IDCate);
		$dulieu = $this->db->get('products', 4);
		

		//bien du lieu thanh mang
		$dulieu = $dulieu->result_array();

		/*echo '<pre>';
		var_dump($dulieu);*/
		return $dulieu;

	}
	// get list 6 products
	public function get6List_products()
	{
		$this->db->select('*');
		$dulieu = $this->db->get('products', 6);
		

		//bien du lieu thanh mang
		$dulieu = $dulieu->result_array();

		/*echo '<pre>';
		var_dump($dulieu);*/
		return $dulieu;

	}
	// get list all products
	public function getAllList_products()
	{
		$this->db->select('*');
		$dulieu = $this->db->get('products');
		

		//bien du lieu thanh mang
		$dulieu = $dulieu->result_array();

		/*echo '<pre>';
		var_dump($dulieu);*/
		return $dulieu;

	}
	// get list catalogies
	public function get_list_catalogies()
	{
		$this->db->select('*');
		$dulieu = $this->db->get('categories');
		

		//bien du lieu thanh mang
		$dulieu = $dulieu->result_array();

		/*echo '<pre>';
		var_dump($dulieu);*/
		return $dulieu;

	}
	// get list one for detail
	public function getFindOne($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$dulieu = $this->db->get('products');
		//bien du lieu thanh mang
		$dulieu = $dulieu->result_array();
		return $dulieu;
	}
	// get list cac Film ten gan dung
	public function ListAllbytheSameWord($str)
	{
		$this->db->select('*');
		$this->db->where("name LIKE '%$str%'");
		$dulieu = $this->db->get('products');

		$dulieu = $dulieu->result_array();

		return $dulieu;
	}
	// check login
	public function checkLogin($a_UserInfo)
	{
		$this->db->select('*');
		$this->db->where('email', $a_UserInfo['email']);
		$this->db->where('password', md5($a_UserInfo['pass']));

		$dulieu = $this->db->get('users');

		//bien du lieu thanh mang
		$dulieu = $dulieu->result_array();

		/*var_dump($dulieu);*/

		if(count($dulieu) >0){
    			return $dulieu;
	    	} 
	    	else {
	    		return false;
	    	}
	}

	public function register($username, $pass, $email, $fname, $lname, $phone, $gender){
		$data = array(
			'username' => $username,
			'password' => md5($pass),
			'email' => $email,
			'firstname' => $fname,
			'lastname' => $lname,
			'phone' => $phone,
			'gender' => $gender
			);
		return $this->db->insert('users', $data);
	}

	//add vao transaction
	public function Orders($bill_no, $name, $phone, $created, $amount, $id)
	{
		$data = array(
	    		'bill_no' => $bill_no,
	    		'customer_name' => $name,
	    		'customer_address' => 'Quang Nam',
	    		'customer_phone' => $phone,
	    		'date_time' => $created,
	    		'gross_amount' => '199999999',
	    		'service_charge_rate' => '12',
	    		'service_charge' => '200000333',
	    		'vat_charge_rate' => '10',
	    		'vat_charge' => '19000000',
	    		'net_amount' => $amount,
	    		'discount' => '10',
	    		'paid_status' => 2,
	    		'user_id' => $id
	    	);

		return $this->db->insert('orders', $data);
	}
	//add vao order
	public function Orders_item($trans_id, $product_id, $qty, $rate, $amount)
	{
		$data = array('order_id' => $trans_id, 'product_id' => $product_id, 'qty' => $qty, 'rate' => $rate,'amount' =>$amount);

		return $this->db->insert('orders_item', $data);
	}
	// add rating
	public function AddRating($product_id, $qty, $total)
	{
		$data = array('product_id' => $product_id, 'qty' => $qty, 'temp' => $total);

		return $this->db->insert('rating', $data);
	}

	// get id trans cuoi cung
	public function GetIdMaxOrders()
	{

		$this->db->select_max('id');
     		$result= $this->db->get('orders')->row_array();
		return $result['id'];

	}

	// get orders yet by id user
	public function getOrderConfirmYet($user_id)
	{
		$this->db->select('orders_item.qty, orders_item.rate, products.price, products.sku, products.image, orders.date_time, orders_item.amount');
		$this->db->from('orders');
		$this->db->join('orders_item', 'orders_item.order_id = orders.id', 'left');
		$this->db->join('products', 'products.id = orders_item.product_id', 'left');
		$this->db->where('orders.user_id', $user_id);
		$this->db->where('orders.paid_status', 2);
		$dulieu = $this->db->get();

		//bien du lieu thanh mang
		$dulieu = $dulieu->result_array();

		/*echo '<pre>';
		var_dump($dulieu);
		die();*/

		return $dulieu;
	}
	public function getOrderConfirmed($user_id)
	{
		$this->db->select('orders_item.qty, orders_item.rate, products.price, products.sku, products.image, orders.date_time, orders_item.amount');
		$this->db->from('orders');
		$this->db->join('orders_item', 'orders_item.order_id = orders.id', 'left');
		$this->db->join('products', 'products.id = orders_item.product_id', 'left');
		$this->db->where('orders.user_id', $user_id);
		$this->db->where('orders.paid_status', 1);
		$dulieu = $this->db->get();

		//bien du lieu thanh mang
		$dulieu = $dulieu->result_array();

		/*echo '<pre>';
		var_dump($dulieu);
		die();*/

		return $dulieu;
	}

	// update qty for product
	public function UpdateQTYforPR($product_id, $qty_total, $qty)
	{
		$data = array('qty' => ($qty_total-$qty));
		$this->db->where('id', $product_id);
		return $this->db->update('products', $data);
	}

	public function Sum_Qty_byID($product_id)
	{
		$this->db->select('qty');
		$this->db->where('id', $product_id);
		$data = $this->db->get('products')->row_array();;
		return $data['qty'];
	}
	// get current order
	public function OrderSuccess($idmax_trans){
		$this->db->select('orders_item.qty, orders_item.rate, products.price, products.sku, products.image, orders.date_time, orders_item.amount');
		$this->db->from('orders');
		$this->db->join('orders_item', 'orders_item.order_id = orders.id', 'left');
		$this->db->join('products', 'products.id = orders_item.product_id', 'left');
		$this->db->where('orders_item.order_id', $idmax_trans);

		$dulieu = $this->db->get();

		//bien du lieu thanh mang
		$dulieu = $dulieu->result_array();

		// echo '<pre>';
		// var_dump($dulieu);
		// die();

		return $dulieu;
	}

	//check exist account
	public function checkAccountExist($email)
	{
		$this->db->select('*');
		//$this->db->where('Email', $email);
		$this->db->where('email', $email);

		$dulieu = $this->db->get('users');

		//bien du lieu thanh mang
		$dulieu = $dulieu->result_array();

		/*var_dump($dulieu);*/

		if(count($dulieu) >0){
    			return true;
	    	} else {
	    		return false;
	    	}
	}



}

/* End of file Home.php */
/* Location: ./application/models/Home.php */