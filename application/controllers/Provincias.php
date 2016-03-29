<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provincias extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database('default');
        $this->load->model('mprovincias');
        is_logged_in() ? true : redirect('admin');
    }

	public function index() {
		$data['data'] = $this->mprovincias->provincias_entrys();
		$this->load->view('admin/provincias', $data);
	}

	public function form($id = false) {
		$data['data'] = $this->mprovincias->provincias_entrys($id);
		if ( $id )
			$this->load->view('admin/provinciasedit', $data);
		else
			$this->load->view('admin/provinciasedit');
	}

	public function edit($id) {
		$formdata = array (
			'id' => $id,
			'nombre' => $this->input->post('nombre'),
			'ndestacadas' => $this->input->post('ndestacadas')
		);
		$this->mprovincias->provincias_update($formdata);
		redirect('provincias');
	}

	public function add() {
		$formdata = array (
			'nombre' => $this->input->post('nombre'),
			'ndestacadas' => $this->input->post('ndestacadas')
		);
		$this->mprovincias->provincias_create($formdata);
		redirect('provincias');
	}

	public function delete($id) {
		$this->mprovincias->provincias_delete($id);
		redirect('provincias');
	}
}