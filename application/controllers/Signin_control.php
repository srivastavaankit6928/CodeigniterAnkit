<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin_control extends CI_Controller {

public function __construct()
{
    parent::__construct();
    $this->load->model('SignInData');
}    
    public function index()
    {
    $this->load->view('SignIN');
    }

    public function loginAction()
    {
        $this->form_validation->set_rules('email', 'Email id', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password',"required|max_length[10]");
        if (!$this->form_validation->run())
                {
                        $this->load->view('index');
                }
                else
                {
                    $post = $this->input->post();
                    $userValue = array(
                        'email' => $post['email'], 
                        'password' =>  $post['password']
                    );
                    
                    $userData = $this->SignInData->userLogin($userValue);
                    if($userData){
                        redirect('Dashboard');
                    }else{
                        redirect('Registration');
                    }
                }     
        
    }
}