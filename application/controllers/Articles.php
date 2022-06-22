<?php
class Articles extends MY_controller
{
    public function index()

{
   $this->load->library('form_validation');
   $this->form_validation->set_rules('uname','username','required|alpha');
   $this->form_validation->set_rules('pass','password','required|max_length[12]');
   $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

   if($this->form_validation->run())
{
    $uname=$this->input->post('uname');
    $pass=$this->input->post('pass');
    // echo"Username is".$uname."</br>"."password is".$pass;
    $this->load->model('loginmodel');
     $login_id=($this->loginmodel->isvalidate($uname,$pass));
   
// {
//      $this->session->set_username('id',$uname);
//     return redirect('user');
// }
       if($login_id)
     {
      $this->load->library('session');
        $this->session->set_userdata('id',$login_id);
        $this->load->view('dashboard/index');
        // $this->load->view('templet/footer.php');
        // $this->load->view('templet/header.php');
        

        
      //   //     return redirect('user')

     }
     else{
        redirect ('Articles/index');
     }
}


else
{
    

    $this->load->view('admin/login');
    


}

}


public function logout(){
  $this->load->library('session');
// echo "hh"; die;
//$this->session->unset_userdata('id');
$this->session->sess_destroy();

redirect('Articles/index');

}

// $this->load->view('sidebar');

}






?>