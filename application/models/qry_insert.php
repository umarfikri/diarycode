<?php

class Qry_insert extends CI_Model {

    function entry(){
        $a = $this->input->post();
        $title  = $this->input->post('title');
        $content     = $this->input->post('content');
        $mood     = $this->input->post('mood'); 
        $img   = $this->input->post('imagefile'); 
        $img_title   = $this->input->post('imagetitle');

        // print_r($a);
        // die();

        $directory =  base_url().'uploads/img';
        $config['upload_path'] = './uploads/img';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']     = '500000';
        $config['max_width'] = '0';
        $config['max_height'] = '0';
        $this->upload->initialize($config); 

        $path = 'uploads/img';
        if(!is_dir($path)) //create the folder if it's not exists
        {
            mkdir($path,0755,TRUE);
        }        

        if($mood==null){
            $mood = 0;
        }        

        if ( ! $this->upload->do_upload('imagefile')){
            $removefront = str_replace("<p>","",$this->upload->display_errors());
            $final = str_replace("</p>","",$removefront);
            $returnval['rtnerror'] = $final;

            //print_r("<pre>");
            //print_r($this->upload->display_errors());
            //die();
            return $returnval;  
        }else{
            $data = $this->upload->data();   
            $filename = $data['file_name'];
            $file_path = $data['file_path'];

            //print_r("<pre>");
            //print_r($data);
            //die();
            $datainfo = array(            
                'title' => $title,
                'content' => $content,
                'mood' => $mood,
                'alt_img' => $img_title,
                'img_url' => $path.'/',
                'image' => $filename,
                                
            );

            $this->db->insert('entry', $datainfo);
            $insertid = $this->db->insert_id(); 
            return $insertid;
        }
    }
}