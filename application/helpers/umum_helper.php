<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// $CI = & get_instance();  //get instance, access the CI superobject

function is_login($menu_id)
{ 
    $CI = & get_instance();  //get instance, access the CI superobject
    if( $CI->session->userdata('logged_in')){
        $qry= $CI->user_m->user_autorized(user()['name'],$menu_id);
        if($qry->num_rows()>0){  // Memastikan user punya otoritas untuk menu terkait    
            return true;
        }else{ 
            // Kalau user ambil jalan pintas  
            redirect('not_autorized', 'refresh'); 
        }                                       
    } else {    
        // Kalau session sudah expired
        redirect('expired'); 
    }        
}

function user() 
{
    $CI = & get_instance();  //get instance, access the CI superobject

    $data = [];
    foreach ($CI->session->userdata() as $rows) {
        $data['name'] = $rows['user_name'];
        $data['full_name'] = $rows['full_name'];
        $data['level'] = $rows['user_level'];
        $data['branch_id'] = $rows['branch_id'];
        $data['branch_nm'] = $rows['branch_nm'];
    }
    return $data;
}