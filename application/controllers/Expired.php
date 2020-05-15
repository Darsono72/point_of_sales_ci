<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expired extends CI_Controller {

	public function index()
	{
		$data=[
			'title'		=>'Expired',
			'page'		=>'expired_v'
		];
		$this->load->view('template',$data);
	}

}

/* End of file Expired.php */
/* Location: ./application/controllers/Expired.php */