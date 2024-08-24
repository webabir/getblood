<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function index()
	{

		$data['user'] = $this->db->count_all_results('tbl_blood');

		$this->db->from('tbl_blood');
		$this->db->where('type', 'donor');
		$data['donors'] = $this->db->count_all_results();

		$this->db->from('tbl_blood');
		$this->db->where('type', 'volunteer');
		$data['volunteer'] = $this->db->count_all_results();

		$this->db->from('tbl_blood');
		$this->db->where('group_name', 'AB-');
		$data['blood_ab_neg'] = $this->db->count_all_results();

		$this->db->from('tbl_blood');
		$this->db->where('group_name', 'AB+');
		$data['blood_ab_pos'] = $this->db->count_all_results();

		$this->db->from('tbl_blood');
		$this->db->where('group_name', 'A-');
		$data['blood_a_neg'] = $this->db->count_all_results();

		$this->db->from('tbl_blood');
		$this->db->where('group_name', 'A+');
		$data['blood_a_pos'] = $this->db->count_all_results();

		$this->db->from('tbl_blood');
		$this->db->where('group_name', 'B-');
		$data['blood_b_neg'] = $this->db->count_all_results();

		$this->db->from('tbl_blood');
		$this->db->where('group_name', 'B+');
		$data['blood_b_pos'] = $this->db->count_all_results();

		$this->db->from('tbl_blood');
		$this->db->where('group_name', 'O-');
		$data['blood_o_neg'] = $this->db->count_all_results();

		$this->db->from('tbl_blood');
		$this->db->where('group_name', 'O+');
		$data['blood_o_pos'] = $this->db->count_all_results();

		$this->db->from('tbl_blood');
		$this->db->where('city', 'Khulna');
		$data['blood_khulna'] = $this->db->count_all_results();

		$this->db->from('tbl_blood');
		$this->db->where('city', 'Dhaka');
		$data['blood_dhaka'] = $this->db->count_all_results();

		$this->db->from('tbl_blood');
		$this->db->where('city', 'Barishal');
		$data['blood_barishal'] = $this->db->count_all_results();

		$this->db->from('tbl_blood');
		$this->db->where('city', 'chattogram');
		$data['blood_chattogram'] = $this->db->count_all_results();

		$this->db->from('tbl_blood');
		$this->db->where('city', 'Mymensingh');
		$data['blood_mymensingh'] = $this->db->count_all_results();

		$this->db->from('tbl_blood');
		$this->db->where('city', 'Rajshahi');
		$data['blood_rajshahi'] = $this->db->count_all_results();

		$this->db->from('tbl_blood');
		$this->db->where('city', 'Sylhet');
		$data['blood_sylhet'] = $this->db->count_all_results();

		$this->db->from('tbl_blood');
		$this->db->where('city', 'Rangpur');
		$data['blood_rangpur'] = $this->db->count_all_results();

		$sdata['dashboard'] = "active";
		$this->session->set_userdata($sdata);

		$data['view_path'] = 'dashboard';
		$this->load->view('template', $data);
	}


	public function user_list()
	{
		$data['table_title'] = 'User List';
		$this->load->model('Search_user');
		//load the method of model  
		$data['user_data'] = $this->Search_user->user_list_data();
		//return the data in view  
		$this->load->view('table', $data);
	}

	public function donor_list()
	{
		$data['table_title'] = 'Donor List';
		$this->load->model('Search_user');
		//load the method of model  
		$data['user_data'] = $this->Search_user->donor_list_data();
		//return the data in view  
		$this->load->view('table', $data);
	}

	public function volunteer_list()
	{
		$data['table_title'] = 'Volunteer List';
		$this->load->model('Search_user');
		//load the method of model  
		$data['user_data'] = $this->Search_user->volunteer_list_data();
		//return the data in view  
		$this->load->view('table', $data);
	}

	public function about_donation()
	{
		$sdata['about'] = "active";
		$this->session->set_userdata($sdata);

		$data['view_path'] = 'about';
		$this->load->view('template', $data);
	}
	public function maintainer()
	{
		$sdata['maintainer'] = "active";
		$this->session->set_userdata($sdata);

		$data['view_path'] = 'maintainer';
		$this->load->view('template', $data);
	}
	
}
