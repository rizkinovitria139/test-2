<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Invent_model extends CI_Model
{

    private $_table = 'inventory';

    public function get_invent()
    {
        $this->db->select('*');
        $this->db->from('inventory');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function delete_inventory($id)
    {
        return $this->db->delete('inventory', array('inventory_id' => $id));
    }

    public function add_inventory($data)
    {
        return $this->db->insert($this->_table, $data);
    }

    public function update_stok($id)
    {
    }
}

/* End of file Invent_model.php */
