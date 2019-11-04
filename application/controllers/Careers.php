<?php

class Careers extends MY_Controller
{
    //$this->load->model('helloworld_model');
    //  $data['result'] = $this->helloworld_model->getData();
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CareersModel');
    }

    public function index()
    {
        $this->data['jobs'] = $this->CareersModel->getOpenings();
        $this->load->view('careers/career', $this->data);
    }

}
