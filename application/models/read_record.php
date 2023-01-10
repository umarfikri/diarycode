<?php

class read_record extends CI_Model {

    protected $table = 'entry';

    public function __construct() {
        parent::__construct();
    }

    public function get_count() {
        return $this->db->count_all($this->table);
    }

    public function get_authors($limit, $start) {
        if ($limit==10) {
            $this->db->limit($start);
            $query = $this->db->get($this->table);
        } else {
            $this->db->limit($limit, $start);
            $query = $this->db->get($this->table);
        }
        
        // $this->db->limit($limit, $start);
        // $query = $this->db->get($this->table);
        // print_r($start);
        // die();

        return $query->result();
    }
}