<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Post extends CI_Controller
{
    public function opinion()
    {
        $sdata['opinion'] = "active";
        $this->session->set_userdata($sdata);
        $this->load->model('Post_model');
        $data['user_comment'] = $this->Post_model->user_comment();
        $data['view_path'] = 'user-opinion';
        $this->load->view('template', $data);

    }

    public function insert_post()
    {
        $user_post = $this->input->post('user_post');
        if(strlen($user_post) < 120){
            $_SESSION['OpenFormBox'] = [TRUE];
            $sdata['message'] = "<span class='text-danger'>Comment must be at least 120 characters</span>";
            $this->session->set_userdata($sdata);
            redirect('opinion');
        }else{
            $this->load->model('Post_model');
            $this->Post_model->insert_comment();
            $this->session->set_flashdata('success', 'Your Comment has been successfully added. Thanks for your Feedback :)');
            redirect('opinion');
        }
        
    }

    // request post


    public function request()
    {
        if(isset($_SESSION['username'])){
            $sdata['request'] = "active";
            $this->session->set_userdata($sdata);
            $this->load->model('Post_model');
            $data['user_request'] = $this->Post_model->user_request();
            $data['view_path'] = 'request';
            $this->load->view('template', $data);
        }else {
			redirect(base_url());
		}
        
    }

    public function insert_request()
    {
      $phone = $this->input->post('user_phone', true); 
      $request_text = $this->input->post('request_text', true); 
        if(strlen($phone) == 11){
            if(strlen($request_text) < 120){
                $_SESSION['OpenFormBox'] = [TRUE];
                $sdata['message'] = "<span class='text-danger'>Description must be at least 120 characters</span>";
                $this->session->set_userdata($sdata);
                redirect('request');
            }else{
                $this->load->model('Post_model');
                $this->Post_model->insert_request();
                $this->session->set_flashdata('success', 'Your request has been successfully added. It will be deleted automatically after 7 days.');
                redirect('request');
            }
            
        }else{
            $this->session->set_flashdata('error', 'Invalid number');
			redirect('request');
        }
    }

    public function request_auto_delete()
    {
        $this->load->model('Post_model');
        $this->Post_model->request_auto_delete();
      
    }

}

