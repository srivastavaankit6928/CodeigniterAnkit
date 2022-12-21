<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignUP extends CI_Model {

    public function usersSignup($value)
    {
       return $this->db->insert('users', $value);
       
    }

    public function validUser($value)
    {
        $is_userValid = "";
        $query = $this->db->select()
                    ->where(['Email'=>$value])
                    ->get('users');
        
       if($query->num_rows()==0)
       {
        $is_userValid = 1;
       }
       else
       {
        $is_userValid = 0;
       }
       return $is_userValid ;
    }
    

    
    

}