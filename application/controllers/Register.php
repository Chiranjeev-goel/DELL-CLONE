<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	
	public function index()
	{
        $this->load->library('form_validation');
        //set validation rules
        $this->form_validation->set_rules('fname', 'First Name', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
        $this->form_validation->set_rules('lname', 'Last Name', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
        $this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[cpassword]|md5');
        $this->form_validation->set_rules('city', 'City', 'required|alpha');
		$this->form_validation->set_rules('state', 'State', 'required|alpha');
		$this->form_validation->set_rules('pincode', 'Pincoode', 'required|alpha');
		$this->form_validation->set_rules('address', 'Address', 'required|alpha'); 
        $this->form_validation->set_rules('gander', 'Gander', 'required|alpha'); 
		$this->form_validation->set_rules('phone', 'phone', 'required|regex_match[/^[0-9]{10}$/]');
	
	
	
	
	
	





		if ($this->form_validation->run())
		{
			$post = $this->input->post();
			$insert = array(
				'user_f_name'=>$post['f_name'],
				'user_l_name'=>$post['l_name'],
				'user_email'=>$post['email'],
				'user_pass'=>md5($post['password']),
				'address'=>$post['address'],
				'city'=>$post['city'],
				'state'=>$post['state'],
				'pincode'=>$post['pincode'],
				'phone'=>$post['phone'],
				'gender'=>$post['gander']
			);

			$this->load->model('registermodel');
			$this->registermodel->index($insert);
									
		}
		else
		{	
			$this->load->view('admin/registor');
		}
    
       
    //     public function form()
	// {
       
	// 		$this->load->view('admin/registor');
	// 	}
		
	
	
	}
	function send_mail(){

		if(isset($_POST['submit'])) {
			$post = $this->input->post();
				//echo "<pre>"; print_r($_POST); die;
				$insert = array(
					'user_f_name'=>$post['f_name'],
					'user_l_name'=>$post['l_name'],
					'user_email'=>$post['email'],
					'user_pass'=>md5($post['password']),
					'address'=>$post['address'],
					'city'=>$post['city'],
					'state'=>$post['state'],
					'pincode'=>$post['pincode'],
					'phone'=>$post['phone'],
					'gender'=>$post['gander']
				);
	
				$this->load->model('registermodel');
				$insert_val = $this->registermodel->insert_data($insert);

				if($insert_val==1)
				{
				
				$this->load->library('email');
			
				$this->email->from(set_value('email'),set_value('fname')); 
				$this->email->to('monugoel@gmail.com');
				$this->email->subject('Email Test'); 
				$this->email->message('Testing the email class.'); 
			
				//Send mail 
				if($this->email->send()) 
				$this->session->set_flashdata("email_sent","Email sent successfully."); 
				else 
				$this->session->set_flashdata("email_sent","Error in sending Email."); 
				$this->load->view('admin/registor'); 
				}

		}
		else {

			echo "do again"; die;
		}

	 } 
}