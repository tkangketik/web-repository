<?php

defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set('Asia/Kolkata');

class dashboard extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        chek_session();
        date_default_timezone_set("Asia/Bangkok");
    }

    function index(){
        
        $username = $this->session->userdata('username');
        
        $query1 = $this->db->query("SELECT username from repo GROUP BY username");  
        $num1   = $query1->num_rows();

        $query2 = $this->db->query("SELECT * from repo");  
        $num2   = $query2->num_rows();

        $query3 = $this->db->query("SELECT * from enkripsi");  
        $num3   = $query3->num_rows();

    	
        $this->template->load('template','dashboard', array(
        'pengguna' => $num1,
        'repo' => $num2,
        'enkripsi' => $num3,
		));

    }

        
    


}