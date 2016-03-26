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

	public function categorias($id = false) {
        $this->load->model('mcategorias');
		$data['data'] = $this->mcategorias->categorias_entrys($id);
        if ( $id )
        	$this->load->view('admin/categoriasedit', $data);
        else
			$this->load->view('admin/categorias', $data);
	}
	public function categoriasEdit($id) {
		$this->load->model('mcategorias');
		$data = array (
			'id' => $id,
			'categoria' => $this->input->post('categoria'),
			'color' => $this->input->post('color') 
		);
		$data['data'] = $this->mcategorias->categorias_update($data);
	}
}