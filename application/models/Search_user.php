<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Search_user extends CI_Model
{
	public function show_ab_neg()
	{

		$this->db->where('group_name', 'AB-');
		$query = $this->db->get('tbl_blood');
		return $query;
	}

	public function show_ab_positive()
	{
		$this->db->where('group_name', 'AB+');
		$query = $this->db->get('tbl_blood');
		return $query;
	}

	public function show_a_negetive()
	{
		$this->db->where('group_name', 'A-');
		$query = $this->db->get('tbl_blood');
		return $query;
	}
	public function show_a_positive()
	{
		$this->db->where('group_name', 'A+');
		$query = $this->db->get('tbl_blood');
		return $query;
	}

	public function show_b_negetive()
	{
		$this->db->where('group_name', 'B-');
		$query = $this->db->get('tbl_blood');
		return $query;
	}
	public function show_b_positive()
	{
		$this->db->where('group_name', 'B+');
		$query = $this->db->get('tbl_blood');
		return $query;
	}


	public function show_o_negetive()
	{
		$this->db->where('group_name', 'O-');
		$query = $this->db->get('tbl_blood');
		return $query;
	}
	public function show_o_positive()
	{
		$this->db->where('group_name', 'O+');
		$query = $this->db->get('tbl_blood');
		return $query;
	}


	// search city

	public function show_user_khulna()
	{
		$this->db->where('city', 'khulna');
		$query = $this->db->get('tbl_blood');
		return $query;
	}


	public function show_user_dhaka()
	{
		$this->db->where('city', 'dhaka');
		$query = $this->db->get('tbl_blood');
		return $query;
	}

	public function show_user_barishal()
	{

		$this->db->where('city', 'barishal');
		$query = $this->db->get('tbl_blood');
		return $query;
	}

	public function show_user_chattogram()
	{

		$this->db->where('city', 'chattogram');
		$query = $this->db->get('tbl_blood');
		return $query;
	}

	public function show_user_mymensingh()
	{

		$this->db->where('city', 'mymensingh');
		$query = $this->db->get('tbl_blood');
		return $query;
	}

	public function show_user_rajshahi()
	{
		$this->db->where('city', 'rajshahi');
		$query = $this->db->get('tbl_blood');
		return $query;
	}

	public function show_user_sylhet()
	{
		$this->db->where('city', 'sylhet');
		$query = $this->db->get('tbl_blood');
		return $query;
	}

	public function show_user_rangpur()
	{
		$this->db->where('city', 'rangpur');
		$query = $this->db->get('tbl_blood');
		return $query;
	}

	public function user_list_data()
	{
		$query = $this->db->get('tbl_blood');
		return $query;
	}


	public function donor_list_data()
	{

		$this->db->where('type', 'donor');
		$query = $this->db->get('tbl_blood');
		return $query;
	}


	public function volunteer_list_data()
	{

		$this->db->where('type', 'volunteer');
		$query = $this->db->get('tbl_blood');
		return $query;
	}
}
