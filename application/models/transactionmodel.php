<?php defined('BASEPATH') OR exit('No direct script access allowed');

class transactionmodel extends CI_Model {

	public function __construct() {
		parent::__construct();
		
	}

   
	  
		
    
	function order_history(){
        
		{

			if( !empty($where_array) ) { $this->db->where($where_array); }
			$query = $this->db->get('transaction');
		
			return $query->result_array();
		}
        
		$this->db->select('*');
		if(isset($_POST['device_serial_no']) && !empty($_POST['device_serial_no'])) {
			$this->db->where_in('serial_no', @$_POST['device_serial_no']);
		} else {
		    if(!empty($devices)){
		        $this->db->where_in('serial_no', $devices);
		    }
		}
	
		$query = $this->db->get('transaction');
        
		if( $query->num_rows() > 0 ){
			$result = $query->result_array();
		
			return $result;
		}
		return array();
	}
		
	function where(){
		$where_array = array();
		$devices = $this->devices();
		
		if(isset($_POST['device_serial_no']) && !empty($_POST['device_serial_no'])) {
		 
			$this->db->where_in('serial_no', explode(",",@$_POST['device_serial_no']));
		} else {
		 
		    if(!empty($devices)){
		        $this->db->where_in('serial_no', $devices);
		    }
		}
		if(get_session('role')!="admin"){
		    
		$this->db->where('user_id', get_session('user_id'));
		}
		return $where_array;
	}

	function all_data_count(){

		$where_array = $this->where();
		if( !empty($where_array) ) { $this->db->where($where_array); }
		$query = $this->db->get('orders');
	
		return $query->num_rows();
	}
	
	function all_data($limit, $start, $col, $dir){

		$this->db->select('*');
		$where_array = $this->where();
		if( !empty($where_array) ) { $this->db->where($where_array); }
		$query = $this
				->db
				->limit($limit, $start)
				->order_by($col, $dir)
				->get('transaction');
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
				->like('order_id', $search)
				->or_like('serial_no', $search)
				->or_like('total_pages', $search)
				->or_like('job_type', $search)
				->or_like('papersize', $search)
				->or_like('color', $search)
				->or_like('date', $search)
				->or_like('status', $search)
				->or_like('total_amount', $search)
				->group_end()
				->limit($limit, $start)
				->order_by($col, $dir)
				->get('transaction');
	   
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
					->like('order_id', $search)
				->or_like('serial_no', $search)
				->or_like('total_pages', $search)
				->or_like('job_type', $search)
				->or_like('papersize', $search)
				->or_like('color', $search)
				->or_like('date', $search)
				->or_like('status', $search)
				->or_like('total_amount', $search)
				->group_end()
				->get('orders');
	
		return $query->num_rows();
	}
	
	function transactiondownload() {
		$this->db->select('*');		

        
		$this->db->from('transaction');
		return $query = $this->db->get();
	}
	
	
  
}