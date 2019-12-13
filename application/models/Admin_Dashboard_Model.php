<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin_Dashboard_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('adid')) {
            redirect('admin/login');
        }

    }

    public function totalcount()
    {
        $query = $this->db->select('id')
            ->get('tblusers');
        return $query->num_rows();
    }
    public function totalcountCareers()
    {
        $query = $this->db->select('id')
            ->get('careers');
        return $query->num_rows();
    }
}
