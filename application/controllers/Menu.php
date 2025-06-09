<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Menu_model');
    }

    public function index() {
        $data['menu'] = $this->Menu_model->getAll();
        $this->load->view('menu/index', $data);
    }

    // tambahkan fungsi lain seperti tambah, simpan, edit, hapus
}