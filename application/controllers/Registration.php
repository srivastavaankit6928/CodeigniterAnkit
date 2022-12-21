<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	public function __construct()
{
    parent::__construct();
    $this->load->model('SignUP');
}

	public function index()
	{
		$this->load->view('Index');
	}
	public function registrationAction()
	{
		$this->form_validation->set_rules('name', 'name', 'required|min_length[3]');
		$this->form_validation->set_rules('phone', 'phone',"required|max_length[10]|numeric");
		$this->form_validation->set_rules('email', 'email',"required|valid_email");
		$this->form_validation->set_rules('password', 'password',"required");
		$this->form_validation->set_rules('cpassword', 'cpassword',"required|matches[password]");
		$this->form_validation->set_rules('address', 'address',"required");

		if(!$this->form_validation -> run())
		{
			$this->load->view('Index');
		}
		else{
			$post=$this->input->post();
			$value = array(
				'Name' =>$post['name'] , 
				'Email' => $post['email'], 
				'Phone_no' => $post['phone'], 
				'Password' =>$post['password'] , 
				'Address' =>$post['address'] , 
				'Status' =>0,		
		        );
				$validUser= $this->SignUP->validUser($value['Email']);
				if($validUser == 1)
				{
				     $usercheck = $this->SignUP->usersSignup($value);
				     if($usercheck)
					 {
					 redirect('SignIN');
				     }
					 else
					 {
					 redirect('Registration');
				     }
				}	
				else{
					redirect('Registration');
				}

		}
	}
}
