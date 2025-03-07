<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
	public function index()
	{
		$query = $this->db->get('tbl_blood');
		return $query;
	}
}
