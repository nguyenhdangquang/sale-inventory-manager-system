<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('admin/post-film/index');
	}

}

/* End of file Post.php */
/* Location: ./application/controllers/Post.php */