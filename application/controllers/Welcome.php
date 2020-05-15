<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_m', 'login');
	}

	public function index()
	{
		$data=[
			'title'		=>'Welcome',
			'page'		=>'welcome_v'
		];
		$this->load->view('template',$data);
	}

	public function check_branch()
	{
		$qry=$this->login->branch($this->input->post('branch_id'));
		if ($qry->num_rows()>0){
			foreach ($qry->result() as $rows) {
				$branch_nm=$rows->branch_nm;
			}
			echo $branch_nm;
		}else{
			echo "no";
		}
	}

	public function check_user()
	{
		$qry=$this->login->user_name($this->input->post('user_name'),$this->input->post('branch_id'));
		if ($qry->num_rows()>0){
			foreach ($qry->result() as $rows) {
				$data = [
					'ress' 			=> 'ok',
					'full_name' 	=> $rows->full_name,
					'user_avatar' 	=> $rows->user_avatar,
				];
				echo json_encode($data);
			}
		}else{
			echo json_encode(['ress' => 'no']);
		}	
	}

	public function check_pass()
	{
		$qry=$this->login->user_pass($this->input->post('user_pass'),$this->input->post('user_name'));
		if ($qry->num_rows()>0){
			foreach($qry->result() as $rows){
				$data=[
					'user_name'=>$rows->user_name,
					'full_name'=>$rows->full_name,
					'branch_nm'=>$rows->branch_nm,
					'branch_id'=>$rows->branch_id,				
					'user_level'=>$rows->user_level,
					'user_phone'=>$rows->phone_no				 	
				];			
			}
			$this->session->set_userdata('logged_in',$data);
			echo "ok";
		}else{
			echo "no";
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('welcome','refresh');
	}
	

}

/* End of file Welcome.php */
/* Location: ./application/controllers/Welcome.php */