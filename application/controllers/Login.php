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
            // print_r("<pre>");
            // print_r($userinfo);      
            // die();      
			
            if (!empty($userinfo)) {
                if ($userinfo->password == $password) {
                    $variable_session = array(
                        'uID'  => $userinfo->username,
                    );
                    $this->session->set_userdata($variable_session);
                    redirect('home/index');
                } else {
                    $this->session->set_flashdata('fail', 'Kata Laluan Tidak Sama');
                    redirect('login/index');
                }
                
				
			}
			else {
                $this->session->set_flashdata('fail', 'Username Tidak Wujud');
                redirect('login/index');
			}
		}

        $this->load->view('login', $data);
    }

    function register (){
        $data['pagetitle'] = 'Register';
        $data['module'] = 'register';
        $data['submodule'] = '';   
        
        if($this->input->post('submit')){

            $insertid = $this->qry_insert->addprofile();
            if ($insertid) {
                $this->session->set_flashdata('success', $this->input->post('nickname'));
				redirect('home');
			}
			else {
                $this->session->set_flashdata('fail', $this->input->post('nickname'));
				redirect('home');
			}
                        
        }

        $this->load->view('register', $data);
    }
}