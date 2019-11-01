<?php

class StaffingServices extends MY_Controller
{
    //$this->load->model('helloworld_model');
    //  $data['result'] = $this->helloworld_model->getData();
    public function __construct()
    {
        parent::__construct();
    }

    public function consulting_work_force()
    {
        $this->load->view('staffing-services/consulting_work_force');
    }

    public function hybrid_model()
    {
        $this->load->view('staffing-services/hybrid_model');
    }
    public function msp()
    {
        $this->load->view('staffing-services/msp');
    }
    public function permenant_placement()
    {
        $this->load->view('staffing-services/permenant_placement');
    }

}
