<?php
class Home extends CI_Controller {    

    function index (){
        $data['pagetitle'] = 'Home page';
        $data['module'] = 'frontpage';
        $data['submodule'] = '';        

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
        $this->load->model('read_record');

        $per_page        = 10;  
        $total_rows      = $this->read_record->get_count('entry');      
        $number_of_page  = ceil ($total_rows / $per_page);          
        $page            = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        if ($page == 0) {
            $page_first_result = 0;  
        } else {
            $page_first_result = ($page - 1) * $per_page;
        }

        $data['entrylist'] = $this->read_record->get_record($page_first_result, $per_page);
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

        $this->load->view('header', $data);
        $this->load->view('calendar');
        $this->load->view('footer');
    }
}