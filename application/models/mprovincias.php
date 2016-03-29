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
    public function provincias_entrys() {
        $rows = array();
        $this->db->select('c.*');
        $this->db->from('provincias c');
        $query = $this->db->get();
        if ( $query->num_rows() > 0 ) {
            return $query->result();
        }
    }

    public function provincias_promo($id) {
        $rows = array();
        $this->db->select('provid');
        $this->db->from('promociones_provincias');
        $query = $this->db->get();
        if ( $query->num_rows() > 0 ) {
            foreach ( $query->result() as $row ) {
                 $rows[$row->provid] = true;
             }
        }
        return $rows;
    }
}