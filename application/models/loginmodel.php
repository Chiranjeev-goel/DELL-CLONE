<?php
    class loginmodel extends CI_Model
{
    public function isvalidate($username,$password)
    {
        $q=$this->db->where(['username'=>$username,'password'=>$password])
                ->get('users');
                // for checking debuging
                // echo "<pre>";
                // print_r($q);
                // for structure
                

                if ($q->num_rows())
                {
                            return $q->row()->id;
                }
                        else
                        {
                             return false;
                        }

        // ("select*from users where username=$username and password=$password");
        //     if (count($q->rows()))
        //     {
        //         return true
        //     }
        //     else{
        //         false
        //     }
    }
}

?>