<?php
class Activity_model extends CI_Model{
    public function insertLog($data){
        $this->db->insert('log',$data);
    }
    public function getLog(){
        $result = $this->db->get('log');
        return $result->result();
    }
}