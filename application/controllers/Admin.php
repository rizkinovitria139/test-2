<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }


    public function index()
    {
        $this->load->model('invent_model', 'inventory');
        $data['inventory'] = $this->inventory->get_invent();

        $this->load->view('admin/inventory', $data);
    }


    public function add_inventory()
    {
        $this->form_validation->set_rules('nama', 'Nama barang', 'required');
        $this->form_validation->set_rules('harga', 'Harga barang', 'required');
        $this->form_validation->set_rules('stok', 'Stok barang', 'required');

        if ($this->form_validation->run() == true) {
            $data['nama'] = $this->input->post('nama');
            $data['harga'] = $this->input->post('harga');
            $data['stok'] = $this->input->post('stok');

            $this->load->model('invent_model', 'inventory');
            $this->inventory->add_inventory($data);
            redirect('admin');
        } else {
            $this->load->view('admin/add_invent');
            $this->session->set_flashdata('inventory_message', '<div class="alert alert-danger" role="alert">Input inventory failed!</div>');
        }
    }

    public function delete_inventory($id)
    {
        $this->load->model('invent_model', 'inventory');
        $this->inventory->delete_inventory($id);
        // untuk flashdata mempunyai 2 parameter (nama flashdata/alias, isi dari flashdatanya)
        $this->session->set_flashdata('inventory_message', '<div class="alert alert-success" role="alert">Delete plant success!</div>');
        redirect('admin', 'refresh');
    }

    public function add_pembelian($id)
    {
        $this->db->update('inventory', ['stok' => $this->input->post('stok')], ['invent_id' => $id]);
    }
}

/* End of file Admin.php */
