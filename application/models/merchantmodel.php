<?php defined('BASEPATH') OR exit('No direct script access allowed');

class merchantmodel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}
	 
	function all_data_count(){
 
		if( !empty($where_array) ) { $this->db->where($where_array); }
		$query = $this->db->get('merchant');
	
		return $query->result_array();
	}
	
	function all_data($limit, $start, $col, $dir){

		$this->db->select('*'); 
		if( !empty($where_array) ) { $this->db->where($where_array); }
		$query = $this
				->db
				->limit($limit, $start)
				->order_by($col, $dir)
				->get('merchant');
		if( $query->num_rows()>0 ) {
			return $query->result(); 
		} else {
			return array();
		}
	}
   
	function data_search($limit, $start, $search, $col, $dir){
		$this->db->select('*'); 
		if( !empty($where_array) ) { $this->db->where($where_array); }
		$query = $this
				->db
				->group_start()
				->like('merchantname', $search)
				->or_like('resellername', $search)
				->or_like('website', $search)
				->or_like('industry', $search)
				->or_like('country', $search)
				->or_like('payment_getway', $search) 
				->group_end()
				->limit($limit, $start)
				->order_by($col, $dir)
				->get('merchant');
	   
		if( $query->num_rows()>0 ) {
			return $query->result();  
		} else {
			return array();
		}
	}

	function data_search_count($search) { 
		if( !empty($where_array) ) { $this->db->where($where_array); }
		$query = $this
				->db
				->group_start()
			    ->like('merchantname', $search)
				->or_like('resellername', $search)
				->or_like('website', $search)
				->or_like('industry', $search)
				->or_like('country', $search)
				->or_like('payment_getway', $search)
				->group_end()
				->get('merchant');
	
		return $query->num_rows();
	}
	
	 function download() {
		$this->db->select('*'); 
		$this->db->from('merchant');
		return $query = $this->db->get();
	}
	


}