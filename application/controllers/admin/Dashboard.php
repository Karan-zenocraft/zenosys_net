<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('adid')) {
            redirect('admin/login');
        }

    }

    public function index()
    {
        $this->load->model('Admin_Dashboard_Model');
        $users = $this->Admin_Dashboard_Model->totalcount();
        $careers = $this->Admin_Dashboard_Model->totalcountCareers();
        $this->load->view('admin/dashboard', ['users' => $users, 'careers' => $careers]);

    }

}
