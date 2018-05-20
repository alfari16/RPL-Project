<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user');

    }

    public function login()
    {
        $this->load->view('login');
    }

    public function setlogin()
    {

        if ($user = $this->user->verify()) {
            $data = array(
                'username'    => $user['username'],
                'name'  => $user['nama_user']
            );
            
            $this->session->set_userdata($data);

            redirect(base_url());

        }else {
            $data['msg'] = "Username atau password salah!";
            $this->load->view('login', $data);
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username', 'name');
        redirect(base_url());
    }

    // ====================utils=================

    public function validate_user()
    {
        if (!$this->session->has_userdata('username')) {
            redirect(base_url('login'));
        }
    }


}
