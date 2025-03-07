<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

	// signup
	public function save_admin_data($phone)
	{
		$this->db->SELECT('*');
		$this->db->FROM('tbl_blood');
		$this->db->WHERE('phone', $phone);
		$query_result = $this->db->get();
		$result = $query_result->row();


		if ($result) {
			$this->session->set_flashdata('error', 'Number already used');
			redirect('signup');
		} else {
			$data = array();
			$data['name'] = $this->input->post('name', true);
			$data['age'] = $this->input->post('age', true);
			$data['group_name'] = $this->input->post('group_name', true);
			$data['city'] = $this->input->post('city', true);
			$data['district'] = $this->input->post('district', true);
			$data['gender'] = $this->input->post('gender', true);
			$data['street'] = $this->input->post('street', true);
			$data['phone'] = $this->input->post('phone', true);
			$this->db->insert('tbl_blood', $data);
		}
	}

	// add member

	public function add_admin_data($phone)
	{
		$this->db->SELECT('*');
		$this->db->FROM('tbl_blood');
		$this->db->WHERE('phone', $phone);
		$query_result = $this->db->get();
		$result = $query_result->row();


		if ($result) {
			$this->session->set_flashdata('error', 'Number already used');
			redirect('add-user');
		} else {
			$data = array();
			$data['name'] = $this->input->post('name', true);
			$data['age'] = $this->input->post('age', true);
			$data['group_name'] = $this->input->post('group_name', true);
			$data['city'] = $this->input->post('city', true);
			$data['district'] = $this->input->post('district', true);
			$data['street'] = $this->input->post('street', true);
			$data['gender'] = $this->input->post('gender', true);
			$data['phone'] = $this->input->post('phone', true);
			isset($_SESSION['admin']) ? $data['type'] = $this->input->post('type', true) : "";
			$this->db->insert('tbl_blood', $data);
		}
	}



	public function admin_data_id($id)
	{
		$this->db->SELECT('*');
		$this->db->FROM('tbl_blood');
		$this->db->WHERE('id', $id);
		$query_result = $this->db->get();
		$user_info = $query_result->row();
		return $user_info;
	}


	public function update_profile($id, $phone, $city)
	{

		$data = array();
		$data['id'] = $this->input->post('id', true);
		$data['name'] = $this->input->post('name', true);
		$data['age'] = $this->input->post('age', true);
		$data['group_name'] = $this->input->post('group_name', true);
		if ($city == '') {
		} else {
			$data['city'] = $this->input->post('city', true);
		}
		$data['district'] = $this->input->post('district', true);
		$data['street'] = $this->input->post('street', true);
		$data['type'] = $this->input->post('type', true);
		$data['gender'] = $this->input->post('gender', true);
		$data['status'] = $this->input->post('status', true);
		$data['phone'] = $this->input->post('phone', true);
		$data['facebook'] = $this->input->post('facebook', true);
		$data['last_donate_date'] = $this->input->post('last_donate_date', true);

		$this->db->SELECT('*');
		$this->db->FROM('tbl_blood');
		$this->db->WHERE('id', $id);
		$query_result = $this->db->get();
		$result = $query_result->row();

		if (strlen($phone) == 11) {
			if ($result->phone == $phone) {

				$this->db->SELECT('*');
				$this->db->FROM('tbl_blood');
				$this->db->WHERE('id', $id);
				$this->db->update('tbl_blood', $data);
				$this->session->set_flashdata('success', 'Profile Updated Successfully');
				$_SESSION['username'] = $data['name'];
				if($city == ''){
				    
				}else{
				    $_SESSION['city'] = $data['city'];
				}
			} else if ($result->phone != $phone) {
				$this->db->SELECT('*');
				$this->db->FROM('tbl_blood');
				$this->db->WHERE('phone', $phone);
				$query_result = $this->db->get();
				$result = $query_result->row();

				if ($result) {
					$this->session->set_flashdata('error', 'Number already used');
				} else {

					$this->db->SELECT('*');
					$this->db->FROM('tbl_blood');
					$this->db->WHERE('id', $id);
					$this->db->update('tbl_blood', $data);
					$this->session->set_flashdata('success', 'Profile Updated Successfully');
					$_SESSION['username'] = $data['name'];
				    if($city == ''){
				    
    				}else{
    				    $_SESSION['city'] = $data['city'];
    				}
				}
			}
		} else {
			$this->session->set_flashdata('error', 'Invalid Number');
		}
	}


	public function secure_number($id)
	{
		$data = array();
		$data['number_security'] = $this->input->post('number_security', true);
		$this->db->SELECT('*');
		$this->db->FROM('tbl_blood');
		$this->db->WHERE('id', $id);
		$this->db->update('tbl_blood', $data);
	}
}
