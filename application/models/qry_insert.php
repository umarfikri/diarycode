<?php

class Qry_insert extends CI_Model {

    function entry(){
        $a = $this->input->post();
        $title  = $this->input->post('title');
        $content     = $this->input->post('content');
        $mood     = $this->input->post('mood'); 
        $img   = $this->input->post('image'); 
        $img_title   = $this->input->post('imagetitle');

        // print_r($a);
        // die();
        if($mood==null){
            $mood = 0;
        }
        $datainfo = array(
            
            'title' => $title,
            'content' => $content,
            'mood' => $mood,
            'img' => 'testimg',
            'img_title' => 'test attendance',                  

        );

        $this->db->insert('entry', $datainfo);
        $insertid = $this->db->insert_id(); 
        return $insertid;
    }
}