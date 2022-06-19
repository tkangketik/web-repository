<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Repo_model extends CI_Model
{

    public $table = 'repo';
    public $id = 'id';
    public $id_author = 'id_author';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    function get_by_user()
    {
        $ida = $this->session->userdata['username']; // dapatkan id user yg login
        $this->db->select('*');
        $this->db->from('repo');
        //$this->db->join('users', 'repo.id_author = users.username', 'left');
        $this->db->where('username', $ida);
        $query = $this->db->get();
        return $query->result();
        // $this->db->where($this->id_author, $_SESSION['id_author']);
        // return $this->db->get($this->table)->getResult();

        // $builder = $this->order;
        // $builder->select('order.*,themes.nama_theme,themes.kode_theme');
        // $builder->join('themes', 'themes.id = order.theme', 'left');
        // $builder->where('order.id_user', $_SESSION['id']);
        // $query = $builder->get();
        // return $query->getResult();
    }
        
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id', $q);
	$this->db->or_like('date', $q);
	$this->db->or_like('year', $q);
	$this->db->or_like('nama', $q);
	$this->db->or_like('tipe', $q);
	$this->db->or_like('id_prodi', $q);
	$this->db->or_like('title', $q);
	$this->db->or_like('description', $q);
	$this->db->or_like('file', $q);
	$this->db->or_like('thumbnail', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
	$this->db->or_like('date', $q);
	$this->db->or_like('year', $q);
	$this->db->or_like('nama', $q);
	$this->db->or_like('id_type', $q);
	$this->db->or_like('id_prodi', $q);
	$this->db->or_like('title', $q);
	$this->db->or_like('description', $q);
	$this->db->or_like('file', $q);
	$this->db->or_like('thumbnail', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file Repo_model.php */
/* Location: ./application/models/Repo_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-05-06 09:34:02 */
/* http://harviacode.com */