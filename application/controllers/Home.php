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

        if($this->input->post('submit')){

            $insertid = $this->qry_insert->newcomplaint();
            if ($insertid) {
                $this->session->set_flashdata('success', $this->input->post('tajuk'));
				redirect('home/complaintlist');
			}
			else {
                $this->session->set_flashdata('fail', $this->input->post('tajuk'));
				redirect('home/complaintlist');
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