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
				redirect('home/diaryentry');
			}
			else {
                $this->session->set_flashdata('fail', $this->input->post('title'));
				redirect('home/diaryentry');
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
        $this->load->library("pagination");
        $config                    = array();
        $config["base_url"]        = base_url() . "home/diaryentry";
        $config['total_rows']      = $this->read_record->get_count('entry');
        $config['per_page']        = 10;
        $config["uri_segment"]     = 2;
        $config["full_tag_open"]   = '<ul class="pagination justify-content-center">';
        $config["full_tag_close"]  = '</ul>';
        $config["first_tag_open"]  = '<li class="page-item page-link">';
        $config["first_tag_close"] = '</li>';
        $config["last_tag_open"]   = '<li class="page-item page-link">';
        $config["last_tag_close"]  = '</li>';
        $config["next_tag_open"]   = '<li class="page-item"><span aria-hidden="true">';
        $config["next_tag_close"]  = '</span></li>';
        $config["prev_tag_open"]   = '<li class="page-item"> <span aria-hidden="true">';
        $config["prev_tag_close"]  = '</span></li>';
        $config["num_tag_open"]    = '<li class="page-item ">';
        $config["num_tag_close"]   = '</li>';
        $config["cur_tag_open"]    = '<li class="page-item active"> <a>';
        $config["cur_tag_close"]   = '</a></li>';
        $config['first_link']      = "Previous";
        $config['last_link']       = "Next";
        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data["links"] = $this->pagination->create_links();

        $data['entrylist'] = $this->read_record->get_authors($page, $config["per_page"]);
        // print_r($page);
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