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

    public function register(){
        if (!$this->session->has_userdata('username')) {
            redirect(base_url('login'));
        }
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('nama_user','Nama','required');
        $this->form_validation->set_rules('alamat_user','Alamat','required');
        $this->form_validation->set_rules('telp_user','Alamat','required');
        
        if($this->form_validation->run()){
            $input = $this->input->post();
            $username = $input['username'];
            $getUsername = $this->user->get_user("username='$username'");
            if($getUsername){
                redirect(base_url('/register?telah=dipakai'));
            }else{
                $input['password'] = md5($input['password']);
                if($this->user->addUser($input)){
                    redirect(base_url('index.php?sukses=tambahuser'));
                }
                else die('gagal');
            }
        }
        $this->load->view('register');
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
