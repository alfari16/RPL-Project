<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BarangController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

         $this->load->model('Barang_model');


    }

    public function index()
    {
        $this->validate_user();
        $data['barang'] = $this->Barang_model->ambil_data();
        $this->load->view('partials/header',array('title'=>'Manajemen Barang - Ayam Nelongso Admin'));
        $this->load->view('data_barang', $data);   
    }

    public function tambah()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('kode_barang','Username','required');
        $this->form_validation->set_rules('nama_barang','Password','required');
        $this->form_validation->set_rules('satuan','Nama','required');
        $this->form_validation->set_rules('stok','Alamat','required');
        $error = null;

        if($this->form_validation->run()){
            $input = $this->input->post();   
            $kode = $input['kode_barang'];
            if($res = $this->Barang_model->cek_kode_barang($kode)) $error='kodesudahada';
            else{
                if($this->Barang_model->tambah($input)) $error="berhasil";
                else $error="gagal";
            }
        }
        redirect(base_url('manajemen-barang?result='.$error));
    }

    public function hapus(){
        $id = $this->input->post('modal_delete');
        $error = null;
        if($this->Barang_model->hapus_data($id)) $error='berhasilhapus';
        else $error="gagalhapus";
        redirect(base_url('manajemen-barang?result='.$error));

    }

    public function edit(){
        $input = $this->input->post();
        $data = array(
            'kode_barang' => $input['edit-kode-barang'],
            'nama_barang' => $input['edit-nama-barang'],
            'satuan' => $input['edit-satuan'],
            'stok' => $input['edit-stok']
        );
        $error = null;
        if($this->Barang_model->edit_data($data)) $error='berhasiledit';
        else $error="gagaledit";
        redirect(base_url('manajemen-barang?result='.$error));
    }

    public function validate_user()
    {
        if (!$this->session->has_userdata('username')) {
            redirect(base_url('login'));
        }
    }

}