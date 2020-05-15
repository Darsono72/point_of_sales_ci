<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_m extends CI_Model {
	public function branch($branch_id)
	{
		$this->db->where('a.branch_id', $branch_id);
		$this->db->from('_users a');
		$this->db->join('_company b', 'a.branch_id = b.branch_id');
		return $this->db->get();

	}

	public function user_name($user_name,$branch_id)
	{
		$this->db->where('user_name', $user_name);
		$this->db->where('branch_id', $branch_id);
		return $this->db->get('_users');
	}

	public function user_pass($user_pass,$user_name)
	{
		$this->db->where('user_name', $user_name);
		$this->db->where('user_pass', md5(sha1($user_pass)));
		return $this->db->get('_users');	
	}
	

}

/* End of file Login_m.php */
/* Location: ./application/models/Login_m.php */