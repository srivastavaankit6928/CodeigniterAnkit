<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardControl extends CI_Controller {

  
    public function index()
    {
    $this->load->view('Dashboard');
    }

} 