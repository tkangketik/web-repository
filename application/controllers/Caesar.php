<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Caesar extends CI_Controller{
    
    public function index()
    {
        $this->template->load('template','caesar_encrypt');
    }

    public function decrypt()
    {
        $this->template->load('template','caesar_decrypt');
    }
}