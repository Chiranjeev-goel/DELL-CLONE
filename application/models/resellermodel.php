<?php defined('BASEPATH') OR exit('No direct script access allowed');

class resellermodel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}
	
		
	

	function index(){

		if( !empty($where_array) ) { $this->db->where($where_array); }
		$query = $this->db->get('reseller');
	
		return $query->result_array();
	}
	
	function all_data($limit, $start, $col, $dir){

		$this->db->select('*');
		$where_array = $this->where();
		if( !empty($where_array) ) { $this->db->where($where_array); }
		$query = $this
				->db
				->limit($limit, $start)
				->order_by($col, $dir)
				->get('reseller');
		if( $query->num_rows()>0 ) {
			return $query->result(); 
		} else {
			return array();
		}
	}
   
	function data_search($limit, $start, $search, $col, $dir){
		$this->db->select('*');
		$where_array = $this->where();
		if( !empty($where_array) ) { $this->db->where($where_array); }
		$query = $this
				->db
				->group_start()
				->like('user_id', $search)
				->or_like('username', $search)
				->or_like('name', $search)
				->or_like('company_name', $search)
				->or_like('pan_no', $search)
				->or_like('gst_no', $search)
				->or_like('mobile', $search)
				->or_like('email', $search)
				->or_like('created_at', $search)
				->or_like('status', $search)
				->group_end()
				->limit($limit, $start)
				->order_by($col, $dir)
				->get('users');
	   
		if( $query->num_rows()>0 ) {
			return $query->result();  
		} else {
			return array();
		}
	}

	function data_search_count($search) {
		$where_array = $this->where();
		if( !empty($where_array) ) { $this->db->where($where_array); }
		$query = $this
				->db
				->group_start()
			->like('user_id', $search)
				->or_like('username', $search)
				->or_like('name', $search)
				->or_like('company_name', $search)
				->or_like('pan_no', $search)
				->or_like('gst_no', $search)
				->or_like('mobile', $search)
				->or_like('email', $search)
				->or_like('created_at', $search)
				->or_like('status', $search)
				->group_end()
				->get('reseller');
	
		return $query->num_rows();
	}
	
	function download() {
		$this->db->select('*');
      
		$this->db->from('reseller');
		return $query = $this->db->get();
	}
	


}