<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User_Login_Model extends CI_Model
{

    public function validatelogin($emailId, $password, $status)
    {

        $query = $this->db->where(['emailId' => $emailId, 'userPassword' => $password]);
        $account = $this->db->get('tblusers')->row();
        if ($account != null) {
            $dbstatus = $account->isActive;

//verifying status
            if ($dbstatus == $status) {
                return $account->id;
            } else {
                return null;
                $this->session->set_flashdata('error', 'Your accounis is not active contact admin');
                redirect('user/login');
            }
        }
        return null;
    }
}
