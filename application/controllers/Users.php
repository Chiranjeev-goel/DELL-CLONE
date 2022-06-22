<?php
class Users extends MY_controller
{
    public function index()
   {
       $this->load->view('users/articles');
    //    $this->load->helper('url');

    // public function Forgetpassword()
    // {
    //     $this->load->view('Forgetpassword');
    // }

   }
   public function fogetpassword()
    {
        $this->load->view('admin/fogetpassword');

        
    }

    public function dashboard_controller()
    {
        $this->load->view('next/index');

        
    }



    public function contact()
    {
        $this->load->library('session');
        $this->load->view('next/contact');

        
    }





    public function Transactionhistory()
    {
        $this->load->model('transactionmodel');
        $this->load->library('session');
        
        $data['transaction']=$this->transactionmodel->order_history();
       
        $this->load->view('next/Transactionhistory1/transactionhistory',$data);
        
    }


    function transactiondownload(){
        $this->load->helper('csv');
        $this->load->model('transactionmodel');
        $query = $this->transactionmodel->transactiondownload();
        query_to_csv($query, TRUE, 'Transactionhistory.csv');
    }





    public function Merchent()
    {
        $this->load->model('merchantmodel');
        $this->load->library('session');

        $data['merchant']=$this->merchantmodel->all_data_count();
       // echo "<pre>"; print_r($data['merchant']); die();
        $this->load->view('next/merchent1/merchent',$data);
        
        
       
    
    }
    function download(){
        $this->load->helper('csv');
        $this->load->model('merchantmodel');
        $query = $this->merchantmodel->download();
        query_to_csv($query, TRUE, 'Merchant.csv');
    }
    

    public function reseller()
    {
        $this->load->model('resellermodel');
        $this->load->library('session');

        $data['reseller']=$this->resellermodel->index();
       
        $this->load->view('next/Reseller1/reseller',$data);
    }
        
      
	// function change_login($id){ 
	// 	$id = custom_decode($id);
	// 	$data = get_row('users', $id); 
	// 	if ($data['status'] == 'Active') { 
	// 		$admin_id = get_session('username');
	//         // $this->session->set_userdata('seller', 'yes');
	//         $this->session->set_userdata('seller_id', $admin_id);
	//         $this->session->set_userdata('login_id', $data['user_id']);
	//         $this->session->set_userdata('login_seller_name', $data['name']);
	//         set_login_sessions($data);
	//         redirect('dashboard');
    //     }  
    // }
// }
// public function revertToRegistration(){
//     $this->load->view('admin/registor');
// }

// public function Local_conveyance()
//     {
//         $this->load->view('admin/local_conveyance_view');

//     }
// // }




}
?>