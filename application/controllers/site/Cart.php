<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
	}

	public function index()
	{

		$carts = $this->cart->contents();
		$this->data['carts'] = $carts;
		$this->data['listcart'] = $carts;

		$this->data['temp'] = 'site/cart/cart-page';

		$this->load->view('site/cart/index', $this->data);
	}
	
	// public function add($idNhandc)
	// {
	// 	$this->load->model('site/Home_model');
	// 	//$idNhandc = $this->uri->rsegment(3);
	// 	$product = $this->Home_model->getFindOne($idNhandc);


	// 	//$this->data['listDetail'] = $product;

	// 	foreach ($product as $key => $value) {
	// 		$id = $value['IDHangHoa'];
	// 		$name = $value['TenHangHoa'];
	// 	    	$image_link  = $value['Image'];
	// 	    	$price = $value['DonGiaBan'];
	// 	}

	// 	$data = array();

	// 	//tong so san pham
	//         $qty = 1;


	// 	$data['id'] = $id;
	// 	$data['qty'] = $qty;
	// 	$data['name'] = $name;
	//     	$data['image']  = $image_link;
	//     	$data['price'] = $price;

	// 	$this->cart->insert($data);

	// 	//chuyen sang trang danh sach san pham trong gio hang
 //        	redirect(base_url().'site/Home');
	// }

	// test ajax
	public function add()
	{	
		$qty = 1;
		$output = '';
		$data = array(
	            	'id' => $this->input->post('product_id'), 
	            	'name' => $this->input->post('product_name'), 
	            	'price' => $this->input->post('product_price'),
	            	'image' => $this->input->post('image'), 
	            	'qty' => $qty, 
	        );

	        $this->cart->insert($data);
	        // foreach ($this->cart->contents() as $value) {
	        //     	$output .='
	        //     	<li>
         //                    <div class="basket-item">
         //                        <div class="row">
         //                            <div class="col-xs-4 col-sm-4 no-margin text-center">
         //                                <div class="thumb">
         //                                    <img alt="" src="'.echo base_url().'/upload/assets/images/products/'.$value['image'].'" />
         //                                </div>
         //                            </div>
         //                            <div class="col-xs-8 col-sm-8 no-margin">
         //                                <div class="title">'.$value['name'].'</div>
         //                                <div class="price">'.$value['price'].'</div>
         //                            </div>
         //                        </div>
         //                        <a class="close-btn" href="#"></a>
         //                    </div>
         //                </li>
	        //     ';
	        // }
	        // echo $output;
	}

	public function remove($rowid)
	{
		$qty = 0;
	        $data = array(
	                'rowid' => $rowid,
	                'qty' => $qty,
	        );
	        if($this->cart->update($data)){
	        	redirect(base_url('site/Cart'));
	        }
	        
	}

	public function clear()
	{
		$this->cart->destroy();
		echo 1;
	}


	// Order
	public function order()
	{
		$id = $this->input->post('user_id');
		$name = $this->input->post('user_name');
		$phone = $this->input->post('user_phone');
		//$amount = $this->input->post('amount');
		$amount = $this->cart->format_number($this->cart->total());
		$bill_no = 'BILPR-'.strtoupper(substr(md5(uniqid(mt_rand(), true)), 0, 4));

		$created = strtotime(date('Y-m-d h:i:s a'));
		$carts = $this->cart->contents();

		$this->load->model('site/Home_model');
		if ($this->Home_model->Orders($bill_no, $name, $phone, $created, $amount, $id)) {
			$idmax_trans = $this->Home_model->GetIdMaxOrders();
			foreach ($carts as $key => $value) {
				$product_id = $value['id'];
				$qty = $value['qty'];
				$amount_product = $value['price'];
				$this->Home_model->Orders_item($idmax_trans, $product_id, $qty, $amount);
				$qty_total = $this->Home_model->Sum_Qty_byID($product_id);
				$this->Home_model->UpdateQTYforPR($product_id, $qty_total, $qty);
			}
			$this->cart->destroy();
			$data = $this->Home_model->OrderSuccess($idmax_trans);
			$this->data['successsss'] = $data;
			$this->data['temp'] = 'site/cart/success_01';
			// var_dump($this->data); die();
			$this->load->view('site/cart/success', $this->data);
		}
	}


	// xoa toan bo gio hang dung $this->cart->destroy();

}

/* End of file Cart.php */
/* Location: ./application/controllers/Cart.php */