<?php
class Home extends CI_Controller {    

    function index (){
        $data['pagetitle'] = 'Home page';
        $data['module'] = 'frontpage';
        $data['submodule'] = '';        

        $this->load->view('header');
        $this->load->view('frontpage', $data);
        $this->load->view('footer');
    }

    function diarynew (){
        $data['pagetitle'] = 'New Diary';
        $data['module'] = 'diarynew';
        $data['submodule'] = '';        

        $this->load->view('header');
        $this->load->view('diarynew', $data);
        $this->load->view('footer');
    }
}