<?php
class CareersModel extends CI_Model
{

    public function getOpenings()
    {
        $this->db->select("*");
        $this->db->from('careers');
        $query = $this->db->get();
        return $query->result();
    }

}
