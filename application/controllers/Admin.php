<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function admin_login_page()
	{

		if (isset($_SESSION['username'])) {
			redirect('dashboard');
		} else {
			$this->load->view('admin-login');
		}
	}

	// admin 

	public function admin_login()
	{

		$phone = $this->input->post('phone', true);
		$password = $this->input->post('password', true);
		$this->load->model('Admin_login');
		$result = $this->Admin_login->administrator_login_info($phone, $password);
		$sdata = array();
		if ($result && $phone != null && $password != null) {

			$_SESSION['admin'] = true;
			$_SESSION['username'] = $result->name;
			$_SESSION['city'] = $result->city;
			$_SESSION['id'] = $result->id;
			redirect('dashboard');
		} else {
			$sdata['message'] = "<span class='text-danger'>Invalid Number or Password</span>";
			$this->session->set_userdata($sdata);
			redirect('login-page');
		}
	}




	// user login

	public function login()
	{

		$phone = $this->input->post('phone', true);
		$this->load->model('Admin_login');
		$result = $this->Admin_login->admin_login_info($phone);
		$sdata = array();
		if ($result && $phone != null) {
			$_SESSION['username'] = $result->name;
			$_SESSION['city'] = $result->city;
			$_SESSION['id'] = $result->id;
			redirect('dashboard');
		} else {
			$sdata['message'] = "<span class='text-danger'>Number Invalid</span>";
			$this->session->set_userdata($sdata);
			redirect('login-page');
		}
	}



	public function admin_logout()
	{
		unset($_SESSION['admin']);
		unset($_SESSION['username']);
		unset($_SESSION['city']);
		unset($_SESSION['config-pro-btn']);
		unset($_SESSION['id']);
		$this->session->set_flashdata('success', 'Log out successfully ');
		redirect(base_url());
	}

	public function signup()
	{

		if (isset($_SESSION['username'])) {
			redirect('dashboard');
		} else {
			$this->load->view('signup');
		}
	}

	public function add_user()
	{
		if (isset($_SESSION['username'])) {
			$sdata['adduser'] = "active";
			$this->session->set_userdata($sdata);
			$data['view_path'] = 'add-user';
			$this->load->view('template', $data);
		} else {
			redirect(base_url());
		}
	}

	public function add_member()
	{
		$phone = $this->input->post('phone', true);
		if (strlen($phone) == 11) {
			$this->load->model('Admin_model');
			$this->Admin_model->add_admin_data($phone);
			$this->session->set_flashdata('success', 'Member added successfully ');
			redirect('add-user');
		} else {
			$this->session->set_flashdata('error', 'Invalid number');
			redirect('add-user');
		}
	}



	public function insert()
	{
		$phone = $this->input->post('phone', true);
		if (strlen($phone) == 11) {
			$this->load->model('Admin_model');
			$this->Admin_model->save_admin_data($phone);
			$this->session->set_flashdata('success', 'SignUp Successfully, Please login');
			redirect(base_url());
		} else {
			$this->session->set_flashdata('error', 'Invalid number');
			redirect('signup');
		}
	}


	public function user_profile($id)
	{
		if (isset($_SESSION['username'])) {
			$this->load->model('Admin_model');
			$data['table_title'] = 'My Profile';
			$data['admin_data_id'] = $this->Admin_model->admin_data_id($id);
			$data['userNumber'] = true;
			$data['view_path'] = 'user-profile';
			$_SESSION['config-pro-btn'] = true;
			$this->load->view('template', $data);
		} else {
			redirect(base_url());
		}
	}

	public function	donor_profile($id)
	{
		if (isset($_SESSION['username'])) {
			$this->load->model('Admin_model');
			$data['table_title'] = 'Donor Profile';
			$data['admin_data_id'] = $this->Admin_model->admin_data_id($id);
			$result = $this->Admin_model->admin_data_id($id);
			$data['view_path'] = 'user-profile';
			if (isset($_SESSION['admin'])) {
				$_SESSION['config-pro-btn'] = true;
			} else {
				$_SESSION['config-pro-btn'] = false;
			}
			if ($result->status == 'Available') {
				$data['userNumber'] = true;
			} else {
				isset($_SESSION['admin']) ? $data['userNumber'] = true : $data['userNumber'] = false;
			}
			$this->load->view('template', $data);
		} else {
			redirect(base_url());
		}
	}


	public function update_profile()
	{
		$phone = $this->input->post('phone', true);
		$id = $this->input->post('id', true);
		$city = $this->input->post('city', true);
		$this->load->model('Admin_model');
		$this->Admin_model->update_profile($id, $phone, $city);
		redirect('profile-update/' . $id);
	}



    public function profile_update_page($id)
    	{
    		if (isset($_SESSION['username'])) {
    			$this->load->model('Admin_model');
    			$data['admin_data_id'] = $this->Admin_model->admin_data_id($id);
    			$data['view_path'] = 'update-profile';
    			$this->load->view('template', $data);
    		} else {
    			redirect(base_url());
    		}
    	}


	public function secure_number($id)
	{
		$this->load->model('Admin_model');
		$this->Admin_model->secure_number($id);
		redirect('user-profile/' . $id);
	}
}
