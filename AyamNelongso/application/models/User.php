<?php

class User extends CI_Model{


    public function verify()
    {
        $uname = $this->input->post('uname');
        $pass = $this->input->post('pass');
        
        $where="username = '$uname'";
        
        if($user=$this->get_user($where)){
            
            if($user['password']===md5($pass)){
                return $user;
            }
        }
        return false;
    }

    public function get_user($where)
    {

        $this->db->where($where);
        return $this->db->get('user')->row_array();
        // return $this->db->last_query();
        
    }

    public function new($param)
    {
        $this->db->insert('user', $param['data']);
    }

}