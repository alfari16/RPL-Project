<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ActivityController extends CI_Controller{
    public function index(){
        $this->validate_user();
        $this->load->view('partials/header',array('title'=>'Log Aktivitas - Ayam Nelongso Admin'));
        $this->load->view('log');
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