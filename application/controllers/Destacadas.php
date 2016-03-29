<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Destacadas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database('default');
        $this->load->model('mdestacadas');
        $this->load->model('mfiles');
        $this->load->model('mprovincias');
    }

	public function index($provid = 1) {
		$data['data'] = $this->mdestacadas->destacadas_entrys($provid);
		$data['provincias'] = $this->mprovincias->provincias_entrys();
		$data['ndestacadas'] = $this->mdestacadas->destacadas_get_conf('ndestacadas');
		$data['provid'] = $provid;
		$this->load->view('admin/destacadas', $data);
	}

	public function lista($provid = 1) {
		if ( $_POST ) {
			$provid = $this->input->post('provincia');
			$this->mdestacadas->destacadas_save_conf(array('value' => $this->input->post('conf_items')));
		}
		$data['provid'] = $provid;
		$data['data'] = $this->mdestacadas->destacadas_entrys($provid);
		$data['provincias'] = $this->mprovincias->provincias_entrys();
		$data['ndestacadas'] = $this->mdestacadas->destacadas_get_conf('ndestacadas');
		$this->load->view('admin/destacadas', $data);
	}

	public function form($id) {
		$data['data'] = $this->mdestacadas->destacadas_promocion($id);
        $this->load->view('admin/destacadasedit', $data);
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