<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database('default');
        $this->load->model('mempresas');
        $this->load->model('mfiles');
    }

	public function index() {
		$data['data'] = $this->mempresas->empresas_entrys();
		$this->load->view('admin/empresas', $data);
	}

	public function form($id = false) {
        $this->load->model('mempresas');
		$data['data'] = $this->mempresas->empresas_entrys($id);
        if ( $id )
        	$this->load->view('admin/empresasedit', $data);
        else
			$this->load->view('admin/empresasedit');
	}

	public function edit($id) {
		$config['upload_path'] = './uploads/empresas';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		
		if ( $this->upload->do_upload('icon') ) {
			$dataimg = $this->upload->data();
			$iconid = $this->mfiles->insert_file( array('nombre' => $dataimg['file_name'], 'fecha' => strtotime("now")) );
		}
		else
			$iconid = $this->input->post('icon');

		if ( $this->upload->do_upload('logo') ) {
			$dataimg = $this->upload->data();
			$logoid = $this->mfiles->insert_file( array('nombre' => $dataimg['file_name'], 'fecha' => strtotime("now")) );
		}
		else
			$logoid = $this->input->post('logo');

		
		$data['data'] = $this->mempresas->empresas_entrys();
		$formdata = array (
			'id' => $id,
			'empresa' => $this->input->post('empresa'),
			'icon' => $iconid,
			'logo' => $logoid
		);
		$this->mempresas->empresas_update($formdata);
		redirect('empresas');
	}

	public function add() {
		$config['upload_path'] = './uploads/empresas';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		
		if ( $this->upload->do_upload('icon') ) {
			$dataimg = $this->upload->data();
			$iconid = $this->mfiles->insert_file( array('nombre' => $dataimg['file_name'], 'fecha' => strtotime("now")) );
		}
		if ( $this->upload->do_upload('logo') ) {
			$dataimg = $this->upload->data();
			$logoid = $this->mfiles->insert_file( array('nombre' => $dataimg['file_name'], 'fecha' => strtotime("now")) );
		}
		$formdata = array (
			'empresa' => $this->input->post('empresa'),
			'icon' => $iconid ? $iconid : 0,
			'logo' => $logoid ? $logoid : 0,
		);
		$this->mempresas->empresas_create($formdata);
		redirect('empresas');
	}

	public function delete($id) {
		$this->mempresas->empresas_delete($id);
		redirect('empresas');
	}
}