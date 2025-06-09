<?php
class Menu_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); // <<< INI WAJIB
    }

    public function getAll() {
        return $this->db->get('menu')->result();
    }

    public function getById($id) {
        return $this->db->get_where('menu', ['id_menu' => $id])->row();
    }

    public function insert($data) {
        return $this->db->insert('menu', $data);
    }

    public function update($id, $data) {
        $this->db->where('id_menu', $id);
        return $this->db->update('menu', $data);
    }

    public function delete($id) {
        return $this->db->delete('menu', ['id_menu' => $id]);
    }
}