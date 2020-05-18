<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		//TES PUSH .....
		parent::__construct();
		$this->load->model('admin/user_m');
		is_login('0');
	}

	public function index()
	{
		$data=[
			'title'		=>'Dashboard',
			'page'		=>'dashboard_v'
		];
		$this->load->view('template',$data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */