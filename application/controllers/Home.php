<?php
class Home extends CI_Controller {    

    function index (){
        $data['pagetitle'] = 'Home page';
        $data['module'] = 'frontpage';
        $data['submodule'] = ''; 
        $data['uID'] = $this->session->userdata('uID');        
        $data['profile'] = $this->qry_retrieve->qry_profile($data['uID']);

        $this->load->view('header', $data);
        $this->load->view('frontpage');
        $this->load->view('footer');
    }
    
    function diarynew (){
        $data['pagetitle'] = 'New Diary';
        $data['module'] = 'diarynew';
        $data['submodule'] = 'newdiary';        

        // $a = $this->input->post();
        // print_r($a);
        // die();
        if($this->input->post('submit')){

            $insertid = $this->qry_insert->entry();
            if ($insertid) {
                $this->session->set_flashdata('success', $this->input->post('title'));
				redirect('home/diaryentry/1');
			}
			else {
                $this->session->set_flashdata('fail', $this->input->post('title'));
				redirect('home/diaryentry/1');
			}
                        
        }

        $this->load->view('header', $data);
        $this->load->view('diarynew');
        $this->load->view('footer');
    }

    function diaryentry (){
        $data['pagetitle'] = 'Diary Entry';
        $data['module'] = 'diaryentry';
        $data['submodule'] = 'entrydiary';     
        // $data['entrylist'] = $this->qry_retrieve->qry_listentry();    
        $this->load->model('qry_retrieve');

        $per_page        = 10;  
        $total_rows      = $this->qry_retrieve->get_count('entry');      
        $number_of_page  = ceil ($total_rows / $per_page);          
        $page            = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        if ($page == 0) {
            $page_first_result = 0;  
        } else {
            $page_first_result = ($page - 1) * $per_page;
        }

        $data['entrylist'] = $this->qry_retrieve->get_record($page_first_result, $per_page);
        // print_r("<pre>");
        // print_r($page_first_result);
        // print_r($data['entrylist']);
        // die();

        $this->load->view('header', $data);
        $this->load->view('diaryentry');
        $this->load->view('footer');
    }

    function calendar (){
        $data['pagetitle'] = 'Mood Calendar';
        $data['module'] = 'calendar';
        $data['submodule'] = '';        
        $data['entrylist'] = $this->qry_retrieve->get_mood();

        $this->load->view('header', $data);
        $this->load->view('calendar');
        $this->load->view('footer');
    }

    function profile (){
        $data['pagetitle'] = 'Profile Page';
        $data['module'] = 'Profile';
        $data['submodule'] = 'profile';        

        // $a = $this->input->post();
        // print_r($a);
        // die();
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

        $this->load->view('header', $data);
        $this->load->view('profilepage');
        $this->load->view('footer');
    }

    function logout (){
        $this->session->sess_destroy();
		redirect('login');
    }
}