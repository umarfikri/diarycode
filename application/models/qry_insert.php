<?php

class Qry_insert extends CI_Model {

    function newcomplaint(){
        $a = $this->input->post();
        $name  = $this->input->post('name');
        $tajuk     = $this->input->post('tajuk');
        $tarikhaduan     = $this->input->post('tarikhaduan'); 
        $deskripsi   = $this->input->post('deskripsi'); 
        $justifikasi = $this->input->post('justifikasi');

        if ($this->input->post('status')) {
            $status = 1;
        } else {
            $status = 0;
        }
        $year = date("Y");
        $path = 'uploads/mbj/'.$year;
        $path = 'uploads/mbj/'.$year;
        if(!is_dir($path)) //create the folder if it's not exists
        {
            mkdir($path,0755,TRUE);
        }

        $directory =  base_url().'uploads/mbj/'.$year;
        $config['upload_path'] = $path;
        $config['allowed_types'] = 'pdf|PDF|doc|docx';
        $config['max_size']     = '12000';
        $config['max_width'] = '0';
        $config['max_height'] = '0';
        $this->upload->initialize($config); 

        if ( ! $this->upload->do_upload('attachment')){
            $removefront = str_replace("<p>","",$this->upload->display_errors());
            $final = str_replace("</p>","",$removefront);
            $returnval['rtnerror'] = $final;

            print_r("<pre>");
            print_r($returnval['rtnerror']);
            die();
            return $returnval;  
        }else{
            $data = $this->upload->data();   
            $filename = $data['file_name'];
            $file_path = $data['file_path'];
            // print_r("<pre>");
            // print_r($data);
            // die();
            $datainfo = array(
            
                'title' => $tajuk,
                'description' => $deskripsi,
                'justification' => $justifikasi,
                'attachment_url' => $path.'/',
                'attachment' => $filename,
                'location' => 'test location',
                'staffid' => 'test staffid',
                'staffgrade' => 'test staff grade',
                'status' => $status
            );
            $this->db->insert('complaint', $datainfo);
            $insertid = $this->db->insert_id(); 
            return $insertid;
        }
    }
}