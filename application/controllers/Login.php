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
   
        $this->load->view('register', $data);
    }
}