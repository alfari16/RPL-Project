<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BarangController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        $this->validate_user();
        
        $this->load->view('partials/header', array('title'=>'Dashboard - Ayam Nelongso Admin'));
        $this->load->view('index');
    }

    public function manage()
    {
        $this->load->view('partials/header',array('title'=>'Manajemen Barang - Ayam Nelongso Admin'));
        $this->load->view('data_barang');   
    }


    public function validate_user()
    {
        if (!$this->session->has_userdata('username')) {
            redirect(base_url('login'));
        }
    }

}