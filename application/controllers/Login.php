<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function index()
	{

		if (isset($_SESSION['username'])) {
			redirect('dashboard');
		} else {
			$this->load->view('login');
		}
	}
}
