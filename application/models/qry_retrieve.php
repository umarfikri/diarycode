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
        $query = $this->db->query("SELECT * FROM entry WHERE username = '$uID' ORDER BY date DESC, time DESC LIMIT $offset, $limit");
        // print_r($offset);
        // print_r("<br>");
        // print_r($limit);
        // print_r("<br>");
        // print_r("<pre>");
        // print_r($query->result());
        // die();
        return $query->result();  
    }
    
    function qry_listentry(){//Tak Guna function ni dlm controller
        $query = $this->db->query("SELECT * FROM entry ORDER BY entry.date desc");
        return $query->result();
    }   
    
    function get_mood($uID){ //get all data in 365 day in a year where mood equal to null or not
        $query = $this->db->query("SELECT date_data.daymonthyear AS date, MAX(entry.time) AS time, entry.mood FROM date_data LEFT JOIN entry ON date_data.daymonthyear = entry.date AND username = '$uID' GROUP BY date_data.daymonthyear ORDER BY date_data.daymonthyear ASC;");
        // SELECT mood, date, MAX(time) AS time FROM `entry` WHERE username = '$uID' GROUP BY date ORDER BY date DESC;      
        // print_r("<pre>");
        // print_r($query->result());   
        // print_r("<br>");     
        // die;
        return $query->result();
    }

    function qry_profile($uID){
        $query = $this->db->query("SELECT * FROM profile LEFT JOIN gallery on gallery.username = profile.username 
        LEFT JOIN health on health.username = profile.username WHERE profile.username = '$uID'");        
        // print_r("<pre>");
        // print_r($query->row());
        // die();
        return $query->row();
    }   

    // SELECT date_data.daymonthyear AS 'HARI', CASE WHEN MONTH(entry.date) = 01 THEN entry.mood END AS 'January', CASE WHEN MONTH(entry.date) = 02 THEN entry.mood END AS 'February', CASE WHEN MONTH(entry.date) = 03 THEN entry.mood END AS 'Mac', CASE WHEN MONTH(entry.date) = 04 THEN entry.mood END AS 'April', CASE WHEN MONTH(entry.date) = 05 THEN entry.mood END AS 'May', CASE WHEN MONTH(entry.date) = 06 THEN entry.mood END AS 'Jun', CASE WHEN MONTH(entry.date) = 07 THEN entry.mood END AS 'Julai', CASE WHEN MONTH(entry.date) = 08 THEN entry.mood END AS 'August', CASE WHEN MONTH(entry.date) = 09 THEN entry.mood END AS 'September' FROM date_data LEFT JOIN entry ON DATE_FORMAT(entry.date, '%d') = date_data.daymonthyear AND entry.username = 'hide123' GROUP BY date_data.daymonthyear ORDER BY date_data.daymonthyear ASC
    // SELECT date_data.daymonthyear AS 'HARI', CASE WHEN MONTH(entry.date) = 01 THEN entry.mood END AS 'January', CASE WHEN MONTH(entry.date) = 02 THEN entry.mood END AS 'February', CASE WHEN MONTH(entry.date) = 03 THEN entry.mood END AS 'Mac', CASE WHEN MONTH(entry.date) = 04 THEN entry.mood END AS 'April', CASE WHEN MONTH(entry.date) = 05 THEN entry.mood END AS 'May', CASE WHEN MONTH(entry.date) = 06 THEN entry.mood END AS 'Jun', CASE WHEN MONTH(entry.date) = 07 THEN entry.mood END AS 'Julai', CASE WHEN MONTH(entry.date) = 08 THEN entry.mood END AS 'August', CASE WHEN MONTH(entry.date) = 09 THEN entry.mood END AS 'September', entry.time FROM date_data LEFT JOIN entry ON DATE_FORMAT(entry.date, '%d') = date_data.daymonthyear AND entry.username = 'hide123' GROUP BY date_data.daymonthyear , MONTH(entry.date) ORDER BY date_data.daymonthyear ASC
}