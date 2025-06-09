<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url'); // agar base_url() bisa digunakan di view
        $this->load->model('Menu_model');
    }

    // Tampilkan semua data menu
    public function index() {
        $data['menu'] = $this->Menu_model->getAll();
        $this->load->view('menu/index', $data);
    }

    // Tampilkan form tambah
    public function tambah() {
        $this->load->view('menu/tambah');
    }

    // Simpan data menu baru
    public function simpan() {
        $data = [
            'nama_menu' => $this->input->post('nama_menu'),
            'kategori' => $this->input->post('kategori'),
            'harga' => $this->input->post('harga'),
            'stok' => $this->input->post('stok')
        ];
        $this->Menu_model->insert($data);
        redirect('menu');
    }

    // Tampilkan form edit
    public function edit($id) {
        $data['menu'] = $this->Menu_model->getById($id);
        $this->load->view('menu/edit', $data);
    }

    // Update data menu
    public function update() {
        $id = $this->input->post('id_menu');
        $data = [
            'nama_menu' => $this->input->post('nama_menu'),
            'kategori' => $this->input->post('kategori'),
            'harga' => $this->input->post('harga'),
            'stok' => $this->input->post('stok')
        ];
        $this->Menu_model->update($id, $data);
        redirect('menu');
    }

    // Hapus data menu
    public function hapus($id) {
        $this->Menu_model->delete($id);
        redirect('menu');
    }
}
