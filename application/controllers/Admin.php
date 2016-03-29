<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

	public function index() {
		if ( is_logged_in() ) 
			redirect('promocion');
		else
			$this->load->view('login');
	}

	public function set_session() {
		if ( $this->input->post('session_value') == 'admin' && $this->input->post('session_pass') == 'admin' ) {
			$sess_array = array(
				'set_value' => $this->input->post('session_value')
			);
			$this->session->set_userdata('session_data', $sess_array);
			redirect('promocion');
		}
		else {
			redirect('admin');
		}
	}

	public function unset_session() {
		$sess_array = array('set_value' => '');
		$this->session->unset_userdata('session_data', $sess_array);
		redirect('admin');
	}
}