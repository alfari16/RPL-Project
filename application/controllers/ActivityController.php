<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ActivityController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('logs');
    }

    public function index(){
        $this->validate_user();
        $data=array(
            'data' => $this->logs->getLog(),
            'title' => 'Log Aktivitas - Ayam Nelongso Admin'
        );
        //test
        $this->load->view('partials/header');
        $this->load->view('log', $data);
    }

    function testSession(){
        var_dump($this->session->username);
    }

    public function validate_user()
    {
        if (!$this->session->has_userdata('username')) {
            redirect(base_url('login'));
        }
    }
}