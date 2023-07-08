<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class forgotpassword extends CI_Controller {

	
	public function index()
	{
		$this->load->view('v_forgot-password');
	}
}
