<?php

class Careers extends MY_Controller
{
    //$this->load->model('helloworld_model');
    //  $data['result'] = $this->helloworld_model->getData();
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('CareersModel');
        $this->load->library("pagination");

    }

    public function index()
    {

        $config = array();
        $config["base_url"] = base_url() . "careers";
        $config["total_rows"] = $this->CareersModel->get_count();
        $config["per_page"] = 5;
        $config["uri_segment"] = 2;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        $data["links"] = $this->pagination->create_links();

        $data['jobs'] = $this->CareersModel->getOpenings($config["per_page"], $page);

        /*$this->data['jobs'] = $this->CareersModel->getOpenings();*/
        $this->load->view('careers/career', $data);
    }

}
