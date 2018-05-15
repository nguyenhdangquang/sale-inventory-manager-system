<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('site/blog/index');
	}

}

/* End of file Blog.php */
/* Location: ./application/controllers/Blog.php */