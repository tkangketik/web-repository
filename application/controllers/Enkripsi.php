<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Enkripsi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        chek_session();
        $this->load->model('Enkripsi_model');
        //error_reporting(0);
    }

    public function index()
    {
        if ($_SESSION['level'] == 'admin') {
            redirect(site_url('enkripsi/list'));
        }
        $enkripsi = $this->Enkripsi_model->get_all();
        $data = array(
            'enkripsi_data' => $enkripsi
        );
        $this->template->load('template', 'enkripsi_list', $data);
    }

    public function list()
    {
        $enkripsi = $this->Enkripsi_model->get_by_user();
        $data = array(
            'enkripsi_data' => $enkripsi
        );
        $this->template->load('template', 'enkripsi_list', $data);
    }

    public function read($id)
    {
        $row = $this->Enkripsi_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id' => $row->id,
                'username' => $row->username,
                'hasil' => $row->hasil,
                'kunci' => $row->kunci,
                'tgl' => $row->tgl,
            );
            $this->template->load('template', 'enkripsi_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('enkripsi'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('enkripsi/create_action'),
            'id' => set_value('id'),
            'username' => set_value('username'),
            'hasil' => set_value('hasil'),
            'kunci' => set_value('kunci'),
            'tgl' => set_value('tgl'),
        );
        $this->template->load('template', 'enkripsi_add', $data);
    }

    public function create_action()
    {
        $data  = array(
            'username' => $this->input->post('username', TRUE),
            'hasil' => $this->input->post('hasil', TRUE),
            'kunci' => $this->input->post('kunci', TRUE),
            'tgl' => $this->input->post('tgl', TRUE),
        );
        $this->Enkripsi_model->insert($data);
        $this->session->set_flashdata('message', 'Create Record Success');
        if ($_SESSION['level'] == 'master') {
            redirect(site_url('enkripsi'));
        } else {
            redirect(site_url('enkripsi/list'));
        }
    }

    public function delete($id)
    {
        $row = $this->Enkripsi_model->get_by_id($id);
        if ($row) {
            $this->Enkripsi_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            if ($_SESSION['level'] == 'master') {
                redirect(site_url('enkripsi'));
            } else {
                redirect(site_url('enkripsi/list'));
            }
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            if ($_SESSION['level'] == 'master') {
                redirect(site_url('enkripsi'));
            } else {
                redirect(site_url('enkripsi/list'));
            }
        }
    }
}

/* End of file Enkripsi.php */
/* Location: ./application/controllers/Enkripsi.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-05-06 09:34:01 */
/* http://harviacode.com */