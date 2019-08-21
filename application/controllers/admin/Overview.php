<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Overview extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/overview');
	}

}

/* End of file Overview.php */
/* Location: ./application/controllers/admin/Overview.php */