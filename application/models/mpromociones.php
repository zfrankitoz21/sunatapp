<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mpromociones extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    //obtenemos las entradas de todos o un usuario, dependiendo
    // si le pasamos le id como argument o no

    public function promociones_entrys($id = false)
    {
        if ( $id === false ) {
            $this->db->select('p.*, e.empresa, c.categoria, d.promoid');
            $this->db->from('promociones p');
            $this->db->join('empresas e', 'p.empresaid = e.id', 'left');
            $this->db->join('categorias c', 'p.categoriaid = c.id', 'left');
            $this->db->join('destacadas d', 'p.id = d.promoid', 'left');
            $this->db->group_by("p.id"); 
        }
        else {
            $this->db->select('p.*, e.empresa, c.categoria, f.nombre');
            $this->db->from('promociones p');
            $this->db->join('empresas e', 'p.empresaid = e.id', 'left');
            $this->db->join('categorias c', 'p.categoriaid = c.id', 'left');
            $this->db->join('files f', 'p.imagen = f.id', 'left');
            $this->db->where('p.id', $id);
        }
        $query = $this->db->get();
        if ( $query->num_rows() > 0 )
            return $query->result();
    }

    
    //insertamos un nuevo usuario en la tabla users
    public function promociones_create($data) {
        $this->db->insert('promociones', $data);
    }

    public function promociones_provincia_create($id, $provincias) {
        $this->db->delete('promociones_provincias', array('promoid' => $id));
        foreach ( $provincias as $provincia ) {
            $this->db->insert('promociones_provincias', array('promoid' => $id, 'provid' => $provincia));   
        }
    }

    public function promociones_destacadas($id, $provincias) {
        $this->db->delete('destacadas', array('promoid' => $id));
        foreach ( $provincias as $provincia ) {
            $this->db->insert('destacadas', array('promoid' => $id, 'provid' => $provincia));
        }
    }
   
    public function promociones_delete($id) {
        $this->db->delete('promociones', array('id' => $id));
    }

    //actualizamos los datos del usuario con id = 3
    public function promociones_update($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('promociones', $data);
    }
}