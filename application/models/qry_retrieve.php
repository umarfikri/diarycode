<?php

class Qry_retrieve extends CI_Model {
    
    protected $table = 'entry';

    public function __construct() {
        parent::__construct();
    }

    public function get_count() {
        $count =  $this->db->count_all($this->table);
        return $count;
        // print_r($count);
        // die();
    }

    public function get_record($offset, $limit) {
        $query = $this->db->query("SELECT * FROM entry ORDER BY date_created DESC LIMIT $offset, $limit");
        // print_r($offset);
        // print_r("<br>");
        // print_r($limit);
        // print_r("<br>");
        // print_r("<pre>");
        // print_r($query->result());
        // die();
        return $query->result();  
    }
    
    function qry_listentry(){
        $query = $this->db->query("SELECT * FROM entry ORDER BY entry.date_created desc");
        return $query->result();
    }    
}