<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mdestacadas extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    //obtenemos las entradas de todos o un usuario, dependiendo
    // si le pasamos le id como argument o no
    public function destacadas_entrys($provid) {
        $this->db->select('d.*, p.titulo');
        $this->db->from('destacadas d');
        $this->db->join('promociones p', 'd.promoid = p.id', 'left');
        $this->db->where('d.provid', $provid);
        $this->db->order_by("d.weight", "ASC"); 
        $query = $this->db->get();
        if ( $query->num_rows() > 0 ) {
            return $query->result();
        }
    }

    public function destacadas_promocion($id) {
        $this->db->select('d.*, f.nombre');
        $this->db->from('destacadas d');
        $this->db->join('files f', 'd.imagen = f.id', 'left');
        $this->db->where('d.id', $id);
        $query = $this->db->get();
        if ( $query->num_rows() > 0 ) {
            return $query->result();
        }
    }

    public function destacadas_promo($id) {
        $rows = array();
        $this->db->select('provid');
        $this->db->from('destacadas');
        $this->db->where('promoid', $id);
        $query = $this->db->get();
        if ( $query->num_rows() > 0 ) {
            foreach ( $query->result() as $row ) {
                 $rows[$row->provid] = true;
             }
        }
        return $rows;
    }

    public function destacadas_get_conf($variable) {
        $query = $this->db->query("SELECT value FROM variables WHERE variable = '$variable'");
        foreach ( $query->result() as $row ) {
            return $row->value;
        }
    }

    public function destacadas_update($data) {
        $this->db->where('id', $data['id']);
        $this->db->update('destacadas', $data);
    }

    public function destacadas_delete($id) {
        $this->db->delete('destacadas', array('id' => $id));
    }

    public function destacadas_delete_bypromo($promoid) {
        $this->db->delete('destacadas', array('promoid' => $id));
    }

    public function destacadas_sort($data) {
        $w = 0;
        foreach ( $data as $id ) {
            $this->db->where('id', $id);
            $this->db->update('destacadas', array('weight' => $w));
            $w++;
        }
    }
}