<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registermodel extends CI_Model {


              
     
     public function index(){

        if( !empty($where_array) ) { $this->db->where($where_array); }
        $query = $this->db->get('register',);

        return $query->result_array();
}


function insert_data($insert) {

        $query =$this->db->insert('register',$insert);
        if($query) {
                return true;
        } else {
            return false;
        }

}

// function check_email_exist() {
//         $this->db->where('email', $this->input->post('email'));
//         $query = $this->db->get('register');
//         if( $query->num_rows() > 0 ) {
//                 return true;
//         } else {
//             return false;
//         }
        
}



?>