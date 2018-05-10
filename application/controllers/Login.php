<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// created by Ading --- firliyadi@gmail.com

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('v_login');
	}
}
