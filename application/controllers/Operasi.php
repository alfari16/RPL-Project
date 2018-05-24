<?php
class Operasi extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Operasi_model');
    }
    public function pemasukan(){
        $input = $this->input->post();
    }
}