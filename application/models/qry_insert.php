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
        $config['upload_path'] = "./uploads/$username/entry";
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']     = '5242880';
        $config['max_width'] = '0';
        $config['max_height'] = '0';
        // $config['file_name'] = $newname; *changename
        $this->upload->initialize($config); 

        $path = "uploads/$username/entry";
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
        $email        = $this->input->post('email');
        $password     = $this->input->post('password');
        $all          = $this->input->post();        
       
        $this->load->library('encryption');
        $key = bin2hex($this->encryption->create_key(16));

        $datainfo = array(            
            'username'      => $username,
            'email'         => $email,
            'password'      => $this->encryption->encrypt($password),
            'fullname'      => $fullname,
            'nickname'      => $nickname,
            'birthday'      => $birthday,
            'description'   => $description,
            'motto'         => $motto,
            'facebook'      => $facebook,
            'twitter'       => $twitter,
            'insta'         => $insta,                                                         
        );    

        // print_r("<pre>");
        // print_r($datainfo);
        // die();

        $this->db->insert('profile', $datainfo);
        $insertid = $this->db->insert_id(); 
        return $insertid;            
    }

    function addgallery(){
        $profileimg   = $this->input->post('profileimage');
        $homeimg      = $this->input->post('homeimage');
        $otherimg     = $this->input->post('otherimage');
        $bgmsc        = $this->input->post('bgmsc');
        $username     = $this->input->post('username');

        $config['upload_path'] = "./uploads/$username/gallery";
        $config['allowed_types'] = 'gif|jpg|png|mp3';
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

        if (! $this->upload->do_upload('bgmsc')) {
      
        } else {
            $data = $this->upload->data();   
            $bgmsc = $data['file_name'];
            $file_pathbgmsc = $data['file_path'];  
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
            'bgmsc'         => $bgmsc,
            'username'      => $username,                                                      
        );    

        $this->db->insert('gallery', $datainfo);
        $insertid = $this->db->insert_id(); 
        return $insertid;     
    }

    function addhealth(){
        $a = $this->input->post();
        $height     = $this->input->post('height');
        $weight     = $this->input->post('weight');
        $aimweight  = $this->input->post('aimweight');
        $gender     = $this->input->post('gender');         
        $username   = $this->input->post('username');
        $all        = $this->input->post();
        // print_r("<pre>");
        // print_r($all);
        // die();
       
        $datainfo = array(    
            'height'        => $height,
            'weight'        => $weight,
            'aimweight'     => $aimweight,
            'gender'        => $gender,
            'username'      => $username,                                                              
        );    

        $this->db->insert('health', $datainfo);
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
        $email        = $this->input->post('email');
        $password     = $this->input->post('password');
        $all          = $this->input->post();
        // print_r("<pre>");
        // print_r($all);
        // die();

        $this->load->library('encryption');
        $key = bin2hex($this->encryption->create_key(16)); 
       
        // $epassword = $this->encryption->encrypt($password);
        // print_r("<pre>");
        // print_r($epassword);
        // die();

        $datainfo = array(          
            'password'      => $this->encryption->encrypt($password),  
            'fullname'      => $fullname,
            'nickname'      => $nickname,
            'birthday'      => $birthday,
            'description'   => $description,
            'motto'         => $motto,
            'facebook'      => $facebook,
            'twitter'       => $twitter,
            'insta'         => $insta,
            'email'         => $email,                                                
        );    

        $this->db->update('profile', $datainfo, array('username' => $uID));
        $insertid = $this->db->insert_id(); 
        return $insertid;            
    }

    function editgallery($uID){
        $gallery = $this->qry_retrieve->qry_profile($uID);
        
        $gallery->profile_img;
        $gallery->home_img;
        $gallery->other_img;
        $profileimg   = $this->input->post('profileimage');
        $homeimg      = $this->input->post('homeimage');
        $otherimg     = $this->input->post('otherimage');
        $bgmsc        = $this->input->post('bgmsc');       
        $username     = $uID;                           

        $config['upload_path'] = "./uploads/$username/gallery";
        $config['allowed_types'] = 'gif|jpg|png|mp3';
        $config['max_size']     = '5242880';
        $config['max_width'] = '0';
        $config['max_height'] = '0';
        // $config['file_name'] = $newname; *changename
        $this->upload->initialize($config); 

        $path = "uploads/$username/gallery";
        $pathprofileimg = $gallery->path.$gallery->profile_img;
        $pathhomeimg = $gallery->path.$gallery->home_img;
        $pathotherimg = $gallery->path.$gallery->other_img;
        $pathbgmsc= $gallery->path.$gallery->bgmsc;

        // print_r("<pre>");
        // print_r($pathprofileimg);
        // die();

        if(!is_dir($path)) //create the folder if it's not exists
        {
            mkdir($path,0755,TRUE);
        } 

        if (empty($_FILES['profileimage']['name'])) {
            // echo "blanks";
            $profileimg = $gallery->profile_img;
        } else {
            // echo "ada file";
            if (! $this->upload->do_upload('profileimage')) {

            } else {
                unlink($pathprofileimg);
                $data = $this->upload->data();   
                $profileimg = $data['file_name'];
                $file_pathprofileimg = $data['file_path'];  
                print_r($data);
            }
        }

        if (empty($_FILES['homeimage']['name'])) {
            // echo "blanks";
            $homeimg = $gallery->home_img;
        } else {
            // echo "ada file";
            if (! $this->upload->do_upload('homeimage')) {
         
            } else {
                unlink($pathhomeimg);
                $data = $this->upload->data();   
                $homeimg = $data['file_name'];
                $file_pathhomeimg = $data['file_path'];  
                print_r($data);            
            }
        }

        if (empty($_FILES['otherimage']['name'])) {
            // echo "blanks";
            $otherimg = $gallery->other_img;
        } else {
            // echo "ada file";
            if (! $this->upload->do_upload('otherimage')) {
      
            } else {
                unlink($pathotherimg);
                $data = $this->upload->data();   
                $otherimg = $data['file_name'];
                $file_pathotherimg = $data['file_path'];  
                print_r($data);
            }    
        }

        if (empty($_FILES['bgmsc']['name'])) {
            // echo "blanks";
            $bgmsc = $gallery->bgmsc;
        } else {
            // echo "ada file";
            if (! $this->upload->do_upload('bgmsc')) {
      
            } else {
                unlink($pathbgmsc);
                $data = $this->upload->data();   
                $bgmsc = $data['file_name'];
                $file_pathbgmsc = $data['file_path'];  
                print_r($data);
            }    
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
            'bgmsc'         => $bgmsc,            
            'username'      => $username,                                                      
        );    

        $this->db->update('gallery', $datainfo, array('username' => $uID));
        $insertid = $this->db->insert_id(); 
        return $insertid;     
    }

    function edithealth($uID){
        $a = $this->input->post();
        $height     = $this->input->post('height');
        $weight     = $this->input->post('weight');
        $aimweight  = $this->input->post('aimweight');
        $gender     = $this->input->post('gender');         
        $username   = $uID;
        $all        = $this->input->post();
        // print_r("<pre>");
        // print_r($all);
        // die();
       
        $datainfo = array(    
            'height'        => $height,
            'weight'        => $weight,
            'aimweight'     => $aimweight,
            'gender'        => $gender,
            'username'      => $username,                                                              
        );    

        $this->db->update('health', $datainfo, array('username' => $uID));
        $insertid = $this->db->insert_id(); 
        return $insertid;   
    }
}