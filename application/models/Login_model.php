<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Login_model extends CI_Model{

    public function cek_user($email)
    {
        return $this->db->get_where('login',['email' =>$email]);
    }

    

        
}
        
    /* End of file  Login.php */
        
                            