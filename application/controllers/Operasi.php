<?php
class Operasi extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model(array('Operasi_model','Barang_model','logs'));
        define('ENDPOINT', 'http://localhost:8080/api/resources/');
    }

    public function transaksi($option)
    {
    	$msg = "succes";
        $api_msg = null;
    	$data = null;
        switch ($option) {
            case 'keluar':
            	$data = array(
                    'username'=> $this->session->userdata('username'),
                    'kode_barang'=> $this->input->post('kode_barang'),
                    'jumlah_barang'=> $this->input->post('jumlah_barang')*-1
            	);

                break;
            	
            case 'masuk':
            	$data = array(
                    'username'=> $this->session->userdata('username'),
                    'kode_barang'=> $this->input->post('kode_barang'),
                    'jumlah_barang'=> $this->input->post('jumlah_barang')
            	);
            	
                break;
            
            default:
                break;
        }

        if(!$this->Operasi_model->addTransaksi($data)) $msg="error";
    	else{
        	$stok = $this->Barang_model->getLastStok($data['kode_barang']);
    		$edit = array(
    			'kode_barang'=> $data['kode_barang'],
    			'stok'=> $data['jumlah_barang'] + $stok
    		);
    		$this->Barang_model->stok($edit);

            $log_data = null;
            if($data['jumlah_barang']<0){
                $log_data = array(
                        'nama_event'=>'Transaksi keluar',
                        'kode_barang'=>$data['kode_barang'],
                        'username'=>$this->session->userdata('username'),
                        'jumlah'=>$data['jumlah_barang']
                  );
            }else{
                $log_data = array(
                        'nama_event'=>'Transaksi masuk',
                        'kode_barang'=>$data['kode_barang'],
                        'username'=>$this->session->userdata('username'),
                        'jumlah'=>$data['jumlah_barang']
                  );
            }
            

            $this->logs->addLog($log_data);

            $api_msg = $this->editBarang($edit);
    	}
        redirect(base_url('manajemen-barang?result='.$msg.'&api_msg='.$api_msg));
        
    }

    private function editBarang($data){
        $this->load->library('curl');

        $param = array(
            'kode'=> $data['kode_barang'],
            'jumlah'=> $data['stok'],
            'nama'=> "",
            'harga'=> ""
        );

        return $this->curl->simple_post(ENDPOINT.'edit_barang', $param, array(CURLOPT_BUFFERSIZE => 10)); 
    }



}