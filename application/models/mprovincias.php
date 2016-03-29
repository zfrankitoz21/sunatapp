<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mprovincias extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	//obtenemos las entradas de todos o un usuario, dependiendo
	// si le pasamos le id como argument o no
	public function provincias_entrys($id = false) {
		if ( $id === false ) {
			$this->db->select('c.*');
			$this->db->from('provincias c');
		}
		else {
			$this->db->select('c.*');
			$this->db->from('provincias c');
			$this->db->where('c.id', $id);
		}
		$query = $this->db->get();
		if ( $query->num_rows() > 0 ) {
			return $query->result();
		}
	}

	public function provincias_get_ndestacadas($provid) {
		$query = $this->db->query("SELECT ndestacadas FROM provincias WHERE id = $provid");
		foreach ($query->result() as $row) {
			return $row->ndestacadas;
		}
	}

	public function provincias_promo($id) {
		$rows = array();
		$this->db->select('provid');
		$this->db->from('promociones_provincias');
		$this->db->where('promoid', $id);
		$query = $this->db->get();
		if ( $query->num_rows() > 0 ) {
			foreach ( $query->result() as $row ) {
				 $rows[$row->provid] = true;
			 }
		}
		return $rows;
	}

	public function provincias_update($data) {
		$this->db->where('id', $data['id']);
		$this->db->update('provincias', $data);
	}

	public function provincias_create($data) {
		$this->db->insert('provincias', $data);
	}

	public function provincias_delete($id) {
		$this->db->delete('provincias', array('id' => $id));
	}
}