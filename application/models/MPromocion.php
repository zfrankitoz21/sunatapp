<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MPromocion
 *
 * @author Diego
 */
class MPromocion extends Model {
    
    // table name
    private $tbl_promociones= 'tbl_promociones';
    
    function MPromocion(){
        parent::Model();
    }
    
    // get number of persons in database
    function count_all(){
        return $this->db->count_all($this->tbl_promociones);
    }
    
    // get promociones with paging
    function get_paged_list($limit = 12, $offset = 0){
        $this->db->order_by('id','asc');
        return $this->db->get($this->tbl_promociones, $limit, $offset);
    }
    
    // get promocion by id
    function get_by_id($id){
        $this->db->where('id', $id);
        return $this->db->get($this->tbl_promociones);
    }
    
    // add new promocion
    function save($promocion){
        $this->db->insert($this->tbl_promociones, $promocion);
        return $this->db->insert_id();
    }
    
    // update promocion by id
    function update($id, $promocion){
        $this->db->where('id', $id);
        $this->db->update($this->tbl_promociones, $promocion);
    }
    
    // delete promocion by id
    function delete($id){
        $this->db->where('id', $id);
        $this->db->delete($this->tbl_promociones);
    }
}
