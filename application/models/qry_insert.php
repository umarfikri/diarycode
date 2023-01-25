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
        $config['upload_path'] = './uploads/img';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']     = '5242880';
        $config['max_width'] = '0';
        $config['max_height'] = '0';
        // $config['file_name'] = $newname; *changename
        $this->upload->initialize($config); 

        $path = 'uploads/img';
        if(!is_dir($path)) //create the folder if it's not exists
        {
            mkdir($path,0755,TRUE);
        }        

        if($mood==null){
            $mood = 0;
        }                

        if(empty($_FILES['imagefile']['name'])){
            $datainfo = array(            
                'title' => $title,
                'content' => $content,
                'mood' => $mood                                          
            );
        }
        else{
            if ( !$this->upload->do_upload('imagefile')){
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
                // print_r("<pre>");
                // print_r($data);
                // die();

                //$imgname = md5($filename.date('Y-m-d H:i:s:u'));
                //print_r($imgname);
                //die();
                
                $datainfo = array(            
                    'title' => $title,
                    'content' => $content,
                    'mood' => $mood,
                    'alt_img' => $img_title,
                    'img_url' => $path.'/',
                    'image' => $filename,                                
                );                
            }
        }
        $this->db->insert('entry', $datainfo);
        $insertid = $this->db->insert_id(); 
        return $insertid;
    }

    function profile(){
        $a = $this->input->post();
        $fullname     = $this->input->post('fullname');
        $nickname     = $this->input->post('nickname');
        $birthday     = $this->input->post('birthday'); 
        $description  = $this->input->post('description');
        $motto        = $this->input->post('motto');
        $profileimg   = $this->input->post('profileimage');
        $homeimg      = $this->input->post('homeimage');
        $otherimg     = $this->input->post('otherimage');
        $username     = $this->input->post('username');
        $password     = $this->input->post('password');

        $config['upload_path'] = './uploads/profile';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']     = '5242880';
        $config['max_width'] = '0';
        $config['max_height'] = '0';
        // $config['file_name'] = $newname; *changename
        $this->upload->initialize($config); 

        $path = 'uploads/profile';

        if(!is_dir($path)) //create the folder if it's not exists
        {
            mkdir($path,0755,TRUE);
        }        

        $data = $this->upload->data();   
        $filename = $data['file_name'];
        $file_path = $data['file_path'];            
        // print_r("<pre>");
        // print_r($data);
        // die();

        //$imgname = md5($filename.date('Y-m-d H:i:s:u'));
        //print_r($imgname);
        //die();
        
        $datainfo = array(            
            'username'      => $username,
            'password'      => $password,
            'fullname'      => $fullname,
            'nickname'      => $nickname,
            'birthday'      => $birthday,
            'description'   => $description,
            'path'          => $path.'/',
            'profile_img'   => $profileimg,
            'home_img'      => $homeimg,
            'other_img'     => $otherimg,                                                      
        );    

        $this->db->insert('profile', $datainfo);
        $insertid = $this->db->insert_id(); 
        return $insertid;            
    }
}