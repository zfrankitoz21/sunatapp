<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mfiles extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert_file($data) {
        $this->db->insert('files', $data);
        return $this->db->insert_id();
    }

    public function get_file($id) {
        $query = $this->db->query("SELECT nombre FROM files WHERE id = $id");

        if ($query->num_rows() > 0)
           return $query->row(0);
        else
            return 0;
    }

}