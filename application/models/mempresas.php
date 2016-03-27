<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mempresas extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    //obtenemos las entradas de todos o un usuario, dependiendo
    // si le pasamos le id como argument o no
    public function empresas_entrys($id = false)
    {
        if ( $id === false ) {
            $this->db->select('c.*, f.nombre');
            $this->db->from('empresas c');
            $this->db->join('files f', 'c.imagen = f.id', 'left');
        }
        else {
            $this->db->select('c.*, f.nombre');
            $this->db->from('empresas c');
            $this->db->join('files f', 'c.imagen = f.id', 'left');
            $this->db->where('c.id', $id);
        }
        $query = $this->db->get();
        if ( $query->num_rows() > 0 )
            return $query->result();
    }
    
    //insertamos un nuevo usuario en la tabla users
    public function empresas_create($data) {
        $this->db->insert('empresas', $data);
    }
   
    //eliminamos al usuario con id = 1
    public function empresas_delete($id)
    {
        $this->db->delete('empresas', array('id' => $id));
    }

    //actualizamos los datos del usuario con id = 3
    public function empresas_update($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('empresas', $data);
    }
}