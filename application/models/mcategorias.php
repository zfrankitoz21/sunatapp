<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mcategorias extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    //obtenemos las entradas de todos o un usuario, dependiendo
    // si le pasamos le id como argument o no
    public function categorias_entrys($id = false)
    {
        if ( $id === false ) {
            $this->db->select('c.*, f.nombre');
            $this->db->from('categorias c');
            $this->db->join('files f', 'c.imagen = f.id', 'left');
        }
        else {
            $this->db->select('c.*, f.nombre');
            $this->db->from('categorias c');
            $this->db->join('files f', 'c.imagen = f.id', 'left');
            $this->db->where('c.id', $id);
        }
        $query = $this->db->get();
        if ( $query->num_rows() > 0 )
            return $query->result();
    }

    //obtenemos todos los comentarios de un usuario y sus datos si le pasamos
    //un id como argumento, y si no los cogemos todos
    public function users_coments($id = false)
    {
        if($id === false)
        {
            $this->db->select('u.username,c.titulo_comentario,c.comentario,c.comment_date');
            $this->db->from('comentarios c');
            $this->db->join('users u', 'c.id_user = u.id');
        }else{
            $this->db->select('u.username,c.titulo_comentario,c.comentario,c.comment_date');
            $this->db->from('comentarios c');
            $this->db->join('users u', 'c.id_user = u.id');
            $this->db->where('u.id',$id);
        }
        $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
    }

    public function consulta_encadendada($id)
    {
        $this->db->select('username')->from('users')->where('id >=', $id)->limit(0, 10);
        $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
    }

    public function search_users($string,$pos_comodin)
    {
        $this->db->like('username', $string, $pos_comodin);
        $query = $this->db->get('users');
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
    }

    //contamos todos los resultados de la tabla
    //que pasemos como argumento
    public function count_results($table)
    {
        return $this->db->count_all_results($table);
    }

    //obtenemos un usuario dependiendo del id que le pasemos
    public function consulta_get_where($id)
    {
        $query = $this->db->get_where('users',array('id' => $id));
        if($query->num_rows() > 0 )
        {
            //veamos que sólo retornamos una fila con row(), no result()
            return $query->row();
        }
    }
    
    //insertamos un nuevo usuario en la tabla users
    public function categorias_create($data) {
        $this->db->insert('categorias', $data);
    }
   
    //eliminamos al usuario con id = 1
    public function categorias_delete($id)
    {
        $this->db->delete('categorias', array('id' => $id));
    }

    //actualizamos los datos del usuario con id = 3
    public function categorias_update($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('categorias', $data);
    }
}