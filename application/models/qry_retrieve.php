<?php

class Qry_retrieve extends CI_Model {
    
    function qry_listentry(){
        $query = $this->db->query("SELECT * FROM entry ORDER BY entry.date_created desc");
        return $query->result();
    }    
}