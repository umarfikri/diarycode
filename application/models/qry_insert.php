<?php

class Qry_insert extends CI_Model {

    function entry($uID){
        $a          = $this->input->post();
        $title      = $this->input->post('title');
        $content    = $this->input->post('content');
        $mood       = $this->input->post('mood'); 
        $img        = $this->input->post('imagefile'); 
        $img_title  = $this->input->post('imagetitle');
        $username   = $uID;

        // print_r($username);
        // die();
        $config['upload_path'] = "./uploads/$username/img";
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']     = '5242880';
        $config['max_width'] = '0';
        $config['max_height'] = '0';
        // $config['file_name'] = $newname; *changename
        $this->upload->initialize($config); 

        $path = "uploads/$username/img";
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
                'mood' => $mood,
                'username' => $username,                                           
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
                    'username' => $username,                           
                );                
            }
        }
        $this->db->insert('entry', $datainfo);
        $insertid = $this->db->insert_id(); 
        return $insertid;
    }

    function addprofile(){
        $a = $this->input->post();
        $fullname     = $this->input->post('fullname');
        $nickname     = $this->input->post('nickname');
        $birthday     = $this->input->post('birthday'); 
        $description  = $this->input->post('description');
        $motto        = $this->input->post('motto');
        $facebook     = $this->input->post('facebook');
        $twitter      = $this->input->post('twitter');
        $insta        = $this->input->post('insta');
        $username     = $this->input->post('username');
        $password     = $this->input->post('password');
        $all          = $this->input->post();
        // print_r("<pre>");
        // print_r($all);
        // die();
       
        $datainfo = array(            
            'username'      => $username,
            'password'      => $password,
            'fullname'      => $fullname,
            'nickname'      => $nickname,
            'birthday'      => $birthday,
            'description'   => $description,
            'motto'         => $motto,
            'facebook'      => $facebook,
            'twitter'       => $twitter,
            'insta'         => $insta,                                                         
        );    

        $this->db->insert('profile', $datainfo);
        $insertid = $this->db->insert_id(); 
        return $insertid;            
    }

    function addgallery(){
        $profileimg   = $this->input->post('profileimage');
        $homeimg      = $this->input->post('homeimage');
        $otherimg     = $this->input->post('otherimage');
        $username     = $this->input->post('username');

        $config['upload_path'] = "./uploads/$username/gallery";
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']     = '5242880';
        $config['max_width'] = '0';
        $config['max_height'] = '0';
        // $config['file_name'] = $newname; *changename
        $this->upload->initialize($config); 

        $path = "uploads/$username/gallery";

        // print_r("<pre>");
        // print_r($path);
        // die();

        if(!is_dir($path)) //create the folder if it's not exists
        {
            mkdir($path,0755,TRUE);
        } 

        if (! $this->upload->do_upload('profileimage')) {

        } else {
            $data = $this->upload->data();   
            $profileimg = $data['file_name'];
            $file_pathprofileimg = $data['file_path'];  
            print_r($data);
        }

        if (! $this->upload->do_upload('homeimage')) {
         
        } else {
            $data = $this->upload->data();   
            $homeimg = $data['file_name'];
            $file_pathhomeimg = $data['file_path'];  
            print_r($data);            
        }

        if (! $this->upload->do_upload('otherimage')) {
      
        } else {
            $data = $this->upload->data();   
            $otherimg = $data['file_name'];
            $file_pathotherimg = $data['file_path'];  
            print_r($data);
        }    
                  
        // print_r("<pre>");
        // print_r($data);
        // die();

        //$imgname = md5($filename.date('Y-m-d H:i:s:u'));
        //print_r($imgname);
        //die();
        
        $datainfo = array(                                    
            'path'          => $path.'/',
            'profile_img'   => $profileimg,
            'home_img'      => $homeimg,
            'other_img'     => $otherimg,
            'username'      => $username,                                                      
        );    

        $this->db->insert('gallery', $datainfo);
        $insertid = $this->db->insert_id(); 
        return $insertid;     
    }

    function editprofile($uID){
        $a = $this->input->post();
        $fullname     = $this->input->post('fullname');
        $nickname     = $this->input->post('nickname');
        $birthday     = $this->input->post('birthday'); 
        $description  = $this->input->post('description');
        $motto        = $this->input->post('motto');
        $facebook     = $this->input->post('facebook');
        $twitter      = $this->input->post('twitter');
        $insta        = $this->input->post('insta');
        $password     = $this->input->post('password');
        $all          = $this->input->post();
        // print_r("<pre>");
        // print_r($all);
        // die();
       
        $datainfo = array(            
            'password'      => $password,
            'fullname'      => $fullname,
            'nickname'      => $nickname,
            'birthday'      => $birthday,
            'description'   => $description,
            'motto'         => $motto,
            'facebook'      => $facebook,
            'twitter'       => $twitter,
            'insta'         => $insta,                                                         
        );    

        $this->db->update('profile', $datainfo, array('username' => $uID));
        $insertid = $this->db->insert_id(); 
        return $insertid;            
    }

    function editgallery($uID){
        // $this->load->model('qry_retrieve');
        $gallery = $this->qry_retrieve->qry_profile($uID);
        // print_r("<pre>");
        // print_r($gallery->path);
        // die();

        $profileimg   = $this->input->post('profileimage');
        $homeimg      = $this->input->post('homeimage');
        $otherimg     = $this->input->post('otherimage');
        $username     = $uID;

        $config['upload_path'] = "./uploads/$username/gallery";
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']     = '5242880';
        $config['max_width'] = '0';
        $config['max_height'] = '0';
        // $config['file_name'] = $newname; *changename
        $this->upload->initialize($config); 

        $path = "uploads/$username/gallery";
        $pathprofileimg = $gallery->path.$gallery->profile_img;

        // print_r("<pre>");
        // print_r($pathprofileimg);
        // die();

        if(!is_dir($path)) //create the folder if it's not exists
        {
            mkdir($path,0755,TRUE);
        } 

        if (! $this->upload->do_upload('profileimage')) {

        } else {
            unlink($pathprofileimg);
            $data = $this->upload->data();   
            $profileimg = $data['file_name'];
            $file_pathprofileimg = $data['file_path'];  
            print_r($data);
        }

        if (! $this->upload->do_upload('homeimage')) {
         
        } else {
            $data = $this->upload->data();   
            $homeimg = $data['file_name'];
            $file_pathhomeimg = $data['file_path'];  
            print_r($data);            
        }

        if (! $this->upload->do_upload('otherimage')) {
      
        } else {
            $data = $this->upload->data();   
            $otherimg = $data['file_name'];
            $file_pathotherimg = $data['file_path'];  
            print_r($data);
        }    
                  
        // print_r("<pre>");
        // print_r($data);
        // die();

        //$imgname = md5($filename.date('Y-m-d H:i:s:u'));
        //print_r($imgname);
        //die();
        
        $datainfo = array(                                    
            'path'          => $path.'/',
            'profile_img'   => $profileimg,
            'home_img'      => $homeimg,
            'other_img'     => $otherimg,
            'username'      => $username,                                                      
        );    

        $this->db->update('gallery', $datainfo, array('username' => $uID));
        $insertid = $this->db->insert_id(); 
        return $insertid;     
    }
}