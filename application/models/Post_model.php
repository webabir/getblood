<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post_model extends CI_Model
{

// comment
    public function user_comment()
    {
        $query = $this->db->get('tbl_post');
        return $query;
    }


    public function insert_comment()
    {
        $data = array();
        $data['user_name'] = $this->input->post('user_name', true);
        $data['user_post'] = $this->input->post('user_post', true);
        $data['profile_id'] = $this->input->post('profile_id', true);
        $this->db->insert('tbl_post', $data);
    }

    // request


    

    public function user_request()
    {   
        $query = $this->db->get('tbl_request');
        return $query;
    }


    public function insert_request()
    {
        $data = array();
        $data['user_name'] = $this->input->post('user_name', true);
        $data['group_name'] = $this->input->post('group_name', true);
        $data['city'] = $this->input->post('city', true);
        $data['district'] = $this->input->post('district', true);
        $data['request_text'] = $this->input->post('request_text', true);
        $data['user_phone'] = $this->input->post('user_phone', true);
        $data['user_facebook'] = $this->input->post('user_facebook', true);
        $data['user_address'] = $this->input->post('user_address', true);
        $data['profile_id'] = $this->input->post('profile_id', true);
        $this->db->insert('tbl_request', $data);
    }

    function request_auto_delete(){
        $this->db->query("DELETE FROM tbl_request WHERE date < DATE_SUB(NOW(), INTERVAL 7 DAY)");
    }
}
