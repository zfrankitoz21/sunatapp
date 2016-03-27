<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database('default');
        $this->load->helper(array('form', 'url'));
        $this->load->model('mcategorias');
    }

	public function index() {
		$data['data'] = $this->mcategorias->categorias_entrys();
		$this->load->view('admin/categorias', $data);
	}

	public function form($id = false) {
        $this->load->model('mcategorias');
		$data['data'] = $this->mcategorias->categorias_entrys($id);
        if ( $id )
        	$this->load->view('admin/categoriasedit', $data);
        else
			$this->load->view('admin/categoriasadd');
	}

	public function edit($id) {
		$this->load->model('mfiles');
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);
		$this->upload->do_upload();
		$dataimg = $this->upload->data();
		$data['data'] = $this->mcategorias->categorias_entrys();

		$dataimg = array('nombre' => $dataimg['file_name'], 'fecha' => strtotime("now"));

		$formdata = array (
			'id' => $id,
			'categoria' => $this->input->post('categoria'),
			'color' => $this->input->post('color'),
			'imagen' => $this->mfiles->insert_file($dataimg)
		);
		$this->mcategorias->categorias_update($formdata);
		//$this->load->view('admin/categorias', $data);
	}
}