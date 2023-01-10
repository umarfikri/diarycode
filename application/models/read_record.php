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
            $query = $this->db->query("SELECT * FROM entry ORDER BY entry.date_created desc LIMIT $limit");
            return $query->result();
        } else {
            $query = $this->db->query("SELECT * FROM entry ORDER BY entry.date_created desc LIMIT $start, $limit");
            return $query->result();
        }
        
        // $this->db->limit($limit, $start);
        // $query = $this->db->get($this->table);
        // print_r($start);
        // die();

        return $query->result();
    }
}