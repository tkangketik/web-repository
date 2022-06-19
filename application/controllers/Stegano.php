<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stegano extends CI_Controller{
    
    public function index()
    {
        $this->template->load('template','repo_stegano');
    }
}