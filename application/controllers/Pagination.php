<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pagination extends CI_Controller {

    public function __construct() {
        parent:: __construct();

        $this->load->model('read_record');
        $this->load->library("pagination");
    }

    public function index() {
        $config = array();
        $config["base_url"] = base_url() . "entry";
        $config["total_rows"] = $this->read_record->get_count();
        $config["per_page"] = 10;
        $config["uri_segment"] = 2;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        $data["links"] = $this->pagination->create_links();

        $data['entry'] = $this->read_record->get_authors($config["per_page"], $page);

        $this->load->view('diaryentry', $data);
    }
}