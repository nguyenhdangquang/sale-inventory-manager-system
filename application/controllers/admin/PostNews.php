<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PostNews extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('admin/post-news/index');
	}

}

/* End of file PostNews.php */
/* Location: ./application/controllers/PostNews.php */