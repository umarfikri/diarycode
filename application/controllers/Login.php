<?php
class Login extends CI_Controller {    

    function index (){
        $data['pagetitle'] = 'Login';
        $data['module'] = 'login';
        $data['submodule'] = '';  
        
        if($this->input->post('submit')){
            print_r($this->input->post());
            $userid = $this->input->post('username');
            $password = $this->input->post('password');
            $userinfo = $this->db->query("SELECT * FROM profile WHERE username = '$userid'")->row();
            $this->load->library('encryption');
            // print_r("<pre>");
            // print_r($password);
            // print_r($this->encryption->decrypt($userinfo->password));      
            // die();      
			
            if (!empty($userinfo)) {
                if ($this->encryption->decrypt($userinfo->password) == $password) {
                    $variable_session = array(
                        'uID'  => $userinfo->username,
                    );
                    $this->session->set_userdata($variable_session);
                    redirect('home');
                } else {
                    $this->session->set_flashdata('fail', 'Kata Laluan Tidak Sama');
                    redirect('login');
                }
                
				
			}
			else {
                $this->session->set_flashdata('fail', 'Username Tidak Wujud');
                redirect('login');
			}
		}

        $this->load->view('headerlogin', $data);
        $this->load->view('login');
    }

    function register (){
        $data['pagetitle'] = 'Register';
        $data['module'] = 'register';
        $data['submodule'] = '';           
        
        if($this->input->post('submit')){
            $insertid      = $this->qry_insert->addprofile();
            $insertgallery = $this->qry_insert->addgallery();
            $inserthealth  = $this->qry_insert->addhealth();
            if ($insertid && $insertgallery) {            
                $this->session->set_flashdata('success', $this->input->post('nickname'));
				redirect('login');
			}
			else {
                $this->session->set_flashdata('fail', $this->input->post('nickname'));
				redirect('login');
			}                        
        }

        $this->load->view('headerlogin', $data);
        $this->load->view('register');
    }

    function forgotpass (){
        $data['pagetitle'] = 'Forgot Password';
        $data['module'] = 'forgot';
        $data['submodule'] = '';           
        
        if($this->input->post('submit')){

            $config['protocol']  = 'smtp';
            $config['smtp_host'] = 'ssl://smtp.googlemail.com';
            $config['smtp_user'] = 'umarfikri1712@gmail.com';
            $config['smtp_pass'] = '';
            $config['smtp_port'] = 465;
            $config['charset']   = 'utf-8';
            $config['mailtype']  = 'html';
            $config['newline']   = "\r\n"; 

            $this->load->library('email');
            
            $this->email->initialize($config);

            $this->email->from("umarfikri1712@gmail.com");
            $this->email->to("ahmadumar1700@gmail.com");
            $this->email->message("Hello");
            $this->email->subject("Test");

            if ($this->email->send()) {
                echo 'Your Email has successfully been sent.';
            } else {
                show_error($this->email->print_debugger());
            }

            die();


            $email = $this->input->post('email');
            mail($email, "subject", "This is test message", "header");
            // $insertid      = $this->qry_insert->addprofile(); //Change this for send email
                                            
        }

        $this->load->view('headerlogin', $data);
        $this->load->view('forgotpass');
    }

    function about (){
        $data['pagetitle'] = 'About';
        $data['module'] = 'about';
        $data['submodule'] = '';                            

        $this->load->view('headerlogin', $data);
        $this->load->view('about');
    }
}