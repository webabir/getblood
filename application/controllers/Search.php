<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Search extends CI_Controller
{
     public function ab_negetive()
     {

          $data['table_title'] = 'Blood Group : AB-';
          $this->load->model('Search_user');
          //load the method of model  
          $data['user_data'] = $this->Search_user->show_ab_neg();
          //return the data in view  
          $this->load->view('table', $data);
     }

     public function ab_positive()
     {
          $data['table_title'] = 'Blood Group : AB+';
          $this->load->model('Search_user');
          //load the method of model  
          $data['user_data'] = $this->Search_user->show_ab_positive();
          //return the data in view  
          $this->load->view('table', $data);
     }

     public function a_negetive()
     {
          $data['table_title'] = 'Blood Group : A-';
          $this->load->model('Search_user');
          //load the method of model  
          $data['user_data'] = $this->Search_user->show_a_negetive();
          //return the data in view  
          $this->load->view('table', $data);
     }

     public function a_positive()
     {
          $data['table_title'] = 'Blood Group : A+';
          $this->load->model('Search_user');
          //load the method of model  
          $data['user_data'] = $this->Search_user->show_a_positive();
          //return the data in view  
          $this->load->view('table', $data);
     }


     public function b_negetive()
     {
          $data['table_title'] = 'Blood Group : B-';
          $this->load->model('Search_user');
          //load the method of model  
          $data['user_data'] = $this->Search_user->show_b_negetive();
          //return the data in view  
          $this->load->view('table', $data);
     }

     public function b_positive()
     {
          $data['table_title'] = 'Blood Group : B+';
          $this->load->model('Search_user');
          //load the method of model  
          $data['user_data'] = $this->Search_user->show_b_positive();
          //return the data in view  
          $this->load->view('table', $data);
     }

     public function o_negetive()
     {
          $data['table_title'] = 'Blood Group : O-';
          $this->load->model('Search_user');
          //load the method of model  
          $data['user_data'] = $this->Search_user->show_o_negetive();
          //return the data in view  
          $this->load->view('table', $data);
     }

     public function o_positive()
     {
          $data['table_title'] = 'Blood Group : O+';
          $this->load->model('Search_user');
          //load the method of model  
          $data['user_data'] = $this->Search_user->show_o_positive();
          //return the data in view  
          $this->load->view('table', $data);
     }


     // search city

     public function user_khulna()
     {
          $data['table_title'] = 'City : Khulna';
          $this->load->model('Search_user');
          //load the method of model  
          $data['user_data'] = $this->Search_user->show_user_khulna();
          //return the data in view  
          $this->load->view('table', $data);
     }

     public function user_dhaka()
     {
          $data['table_title'] = 'City : Dhaka';
          $this->load->model('Search_user');
          //load the method of model  
          $data['user_data'] = $this->Search_user->show_user_dhaka();
          //return the data in view  
          $this->load->view('table', $data);
     }

     public function user_barishal()
     {
          $data['table_title'] = 'City : Barishal';
          $this->load->model('Search_user');
          //load the method of model  
          $data['user_data'] = $this->Search_user->show_user_barishal();
          //return the data in view  
          $this->load->view('table', $data);
     }

     public function user_chattogram()
     {
          $data['table_title'] = 'City : chattogram';
          $this->load->model('Search_user');
          //load the method of model  
          $data['user_data'] = $this->Search_user->show_user_chattogram();
          //return the data in view  
          $this->load->view('table', $data);
     }

     public function user_mymensingh()
     {
          $data['table_title'] = 'City : Mymensingh';
          $this->load->model('Search_user');
          //load the method of model  
          $data['user_data'] = $this->Search_user->show_user_mymensingh();
          //return the data in view  
          $this->load->view('table', $data);
     }

     public function user_rajshahi()
     {
          $data['table_title'] = 'City : Rajshahi';
          $this->load->model('Search_user');
          //load the method of model  
          $data['user_data'] = $this->Search_user->show_user_rajshahi();
          //return the data in view  
          $this->load->view('table', $data);
     }

     public function user_sylhet()
     {
          $data['table_title'] = 'City : Sylhet';
          $this->load->model('Search_user');
          //load the method of model  
          $data['user_data'] = $this->Search_user->show_user_sylhet();
          //return the data in view  
          $this->load->view('table', $data);
     }

     public function user_rangpur()
     {
          $data['table_title'] = 'City : Rangpur';
          $this->load->model('Search_user');
          //load the method of model  
          $data['user_data'] = $this->Search_user->show_user_rangpur();
          //return the data in view  
          $this->load->view('table', $data);
     }
}
