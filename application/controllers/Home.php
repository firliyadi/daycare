<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// created by Ading 10 May 2018 --- firliyadi@gmail.com

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('v_home');
	}
}
