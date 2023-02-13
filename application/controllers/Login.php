<?php
class Login extends CI_Controller {    

    function index (){
        $data['pagetitle'] = 'Login';
        $data['module'] = 'login';
        $data['submodule'] = '';        

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