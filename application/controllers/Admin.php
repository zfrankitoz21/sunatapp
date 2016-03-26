<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database('default');
    }

	public function index() {
		$this->load->view('admin');
	}

	public function categorias() {
        $this->load->model('mcategorias');
        $data['data'] = $this->mcategorias->categorias_entrys();
		$this->load->view('admin/categorias', $data);
	}
}
