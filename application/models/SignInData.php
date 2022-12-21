<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignInData extends CI_Model {

    public function userLogin($userValue)
    {
        $query =$this->db->select()
        ->where(['Email'=>$userValue['email'],'Password'=>$userValue['password']])
                    ->get('users');
       if($query->result_array() == "")
       {
        return false;
       }
       else
       {
        return $query->result_array();
       }
    }
}