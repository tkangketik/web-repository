<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Enkripsi_model extends CI_Model
{

    public $table = 'enkripsi';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    function get_by_user()
    {
        $ida = $this->session->userdata['username'];
        $this->db->select('*');
        $this->db->from('enkripsi');
        $this->db->where('username', $ida);
        $query = $this->db->get();
        return $query->result();
    }

    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }
}