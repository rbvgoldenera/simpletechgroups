<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authorization extends CI_Controller {

	public function register()
	{
		$this->load->view('common/header');
		$this->load->view('authorization/register');
		$this->load->view('common/footer');
	}
	public function login()
	{
		$this->load->view('common/header');
		$this->load->view('authorization/login');
		$this->load->view('common/footer');
	}
}
