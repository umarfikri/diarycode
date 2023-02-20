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

    public function get_record($offset, $limit, $uID) {
        $query = $this->db->query("SELECT * FROM entry WHERE username = '$uID' ORDER BY date DESC LIMIT $offset, $limit");
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
        $query = $this->db->query("SELECT * FROM entry ORDER BY entry.date desc");
        return $query->result();
    }   
    
    function get_mood(){
        $query = $this->db->query("SELECT mood, date, MAX(time) as time FROM `entry` GROUP BY date ORDER BY date DESC");
        // SELECT mood, date_test, MAX(time_created) FROM `entry` GROUP BY date_test ORDER BY date_test DESC
        // SELECT mood, date_created FROM `entry` WHERE date_created = (SELECT MAX(date_created)) ORDER BY date_created DESC
        return $query->result();
    }

    function qry_profile($uID){
        $query = $this->db->query("SELECT * FROM profile LEFT JOIN gallery on gallery.username = profile.username WHERE profile.username = '$uID'");        
        // print_r("<pre>");
        // print_r($query->row());
        // die();
        return $query->row();
    }   
}