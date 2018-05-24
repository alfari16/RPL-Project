<?php

class Dashboard extends CI_Controller{
    function index(){
        $this->load->view('partials/header');
        $this->load->view('index');
    }
}