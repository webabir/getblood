<?php 
    $this->load->view('common/header');
    $this->load->view('common/sidebar');
    
    $this->load->view($view_path);
    $this->load->view('common/footer');
     $this->load->view('sweetalert');
    
?>

