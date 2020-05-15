<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

	function user_autorized($user_name,$menu_id){
		$this->db->where('a.user_name',$user_name);
		$this->db->where('a.menu_id',$menu_id);
		$this->db->from('_user_permission a');
		return	$this->db->get();		
	}
	

}

/* End of file User_m.php */
/* Location: ./application/models/admin/User_m.php */