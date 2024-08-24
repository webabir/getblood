<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_login extends CI_Model
{
    public function admin_login_info($phone)
    {
        $this->db->select('*');
        $this->db->from('tbl_blood');
        $this->db->where('phone', $phone);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }



    public function administrator_login_info($phone, $password)
    {
        $this->db->select('*');
        $this->db->from('tbl_blood');
        $this->db->where('phone', $phone);
        $this->db->where('password', $password);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
}
