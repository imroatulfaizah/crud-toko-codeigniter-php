<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('view_home', FALSE);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */