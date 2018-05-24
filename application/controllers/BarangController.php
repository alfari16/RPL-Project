<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BarangController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

         $this->load->model(array('Barang_model','logs'));
         define('ENDPOINT', 'http://localhost:8080/api/resources/');

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
        $api_result = null;

        if($this->form_validation->run()){
            $input = $this->input->post();   
            $kode = $input['kode_barang'];
            if($res = $this->Barang_model->cek_kode_barang($kode)) $error='kodesudahada';
            else{
                if($this->Barang_model->tambah($input)){
                  $error="berhasil";
                  
                  // post barang
                  $api_result = $this->addBarang();
                  $log_data = array(
                        'nama_event'=>'Menambahkan Barang',
                        'kode_barang'=>$input['kode_barang'],
                        'username'=>$this->session->userdata('username'),
                        'jumlah'=>$input['stok']
                  );
                  $this->logs->addLog($log_data);

                } 
                else $error="gagal";
            }
        }
        redirect(base_url('manajemen-barang?result='.$error.'&api_result='.$api_result));
    }

    public function hapus(){
        $id = $this->input->post('modal_delete');
        $error = null;
        if($this->Barang_model->hapus_data($id)){
            $error='berhasilhapus';
            $log_data = array(
                        'nama_event'=>'Menghapus Barang',
                        'kode_barang'=>$id,
                        'username'=>$this->session->userdata('username'),
                        'jumlah'=>0
                  );
                  $this->logs->addLog($log_data);
        }
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
        $api_result = null;
        if($this->Barang_model->edit_data($data)){
            $error='berhasiledit';
              //edit api
            $api_result = $this->editBarang();
            $log_data = array(
                        'nama_event'=>'Mengedit Barang',
                        'kode_barang'=>$data['kode_barang'],
                        'username'=>$this->session->userdata('username'),
                        'jumlah'=>$data['stok']
                  );
                  $this->logs->addLog($log_data);

        } 
        else $error="gagaledit";
        redirect(base_url('manajemen-barang?result='.$error.'&api_result='.$api_result));
    }

    public function validate_user()
    {
        if (!$this->session->has_userdata('username')) {
            redirect(base_url('login'));
        }
    }


    public function test()
    {
        echo $this->getHistoryHarga('DAY');
    }

    


    ////////API/////////

   
    // pake untuk nambah barang
    private function addBarang(){
        $this->load->library('curl');
        $param = array(
            'kode'=> $this->input->post('kode_barang'),
            'nama'=> $this->input->post('nama_barang'),
            'jumlah'=> $this->input->post('stok'),
            'harga'=> $this->input->post('satuan')
        );
        return $this->curl->simple_post(ENDPOINT.'add_barang', $param, array(CURLOPT_BUFFERSIZE => 10)); 
    }

    // pake untuk edit barang
    private function editBarang(){
        $this->load->library('curl');

        $param = array(
            'kode'=> $this->input->post('edit-kode-barang'),
            'nama'=> $this->input->post('edit-nama-barang'),
            'jumlah'=> $this->input->post('edit-stok'),
            'harga'=> $this->input->post('edit-satuan')
        );

        return $this->curl->simple_post(ENDPOINT.'edit_barang', $param, array(CURLOPT_BUFFERSIZE => 10)); 
    }

    // pake untuk list harga terkini
    // return json
    private function getBarang(){
        $this->load->library('curl');
        return $this->curl->simple_get(ENDPOINT . 'dashboard');
    }



}
