<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Destacadas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database('default');
        $this->load->model('mdestacadas');
        $this->load->model('mfiles');
        $this->load->model('mprovincias');
        is_logged_in() ? true : redirect('admin');
    }

	public function index($provid = 1) {
		redirect('destacadas/lista');
	}

	public function lista($provid = 1) {
		if ( $_POST )
			$provid = $this->input->post('provincia');
		$data['provid'] = $provid;
		$data['data'] = $this->mdestacadas->destacadas_entrys($provid);
		$data['provincias'] = $this->mprovincias->provincias_entrys();
		$data['ndestacadas'] = $this->mprovincias->provincias_get_ndestacadas($provid);
		$this->load->view('admin/destacadas', $data);
	}

	public function form($id) {
		$data['data'] = $this->mdestacadas->destacadas_promocion($id);
        $this->load->view('admin/destacadasedit', $data);
	}

	public function sort() {
		$order = explode(',', $_POST['order']);
		$this->mdestacadas->destacadas_sort($order, $_POST['provid']);
	}

	public function edit($id) {
		$config['upload_path'] = './uploads/destacadas';
		$config['allowed_types'] = 'jpg|png';

		$this->load->library('upload', $config);
		
		if ( $this->upload->do_upload('imagen') ) {
			$dataimg = $this->upload->data();
			$imagenid = $this->mfiles->insert_file( array('nombre' => $dataimg['file_name'], 'fecha' => strtotime("now")) );
		}
		else
			$imagenid = $this->input->post('imagen'); 

		$formdata = array(
			'id' => $id,
			'imagen' => $imagenid ? $imagenid : 0
		);
		$this->mdestacadas->destacadas_update($formdata);
		redirect('destacadas/lista/' . $this->input->post('provid'));
	}

	public function delete($id) {
		$this->mdestacadas->destacadas_delete($id);
		redirect('destacadas');
	}
}