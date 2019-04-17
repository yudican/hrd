<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Biodata_referensi extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->model('Referensi_models','referensi');
        $this->load->helper('input');
        if (!$this->session->userdata('is_login') == true) {
            redirect('login');
        }
    }

    public function input()
    {
        $id = $this->uri->segment(4);
        $this->form_validation->set_rules('referensi_nama', 'Nama Referensi', 'required');
        $this->form_validation->set_rules('referensi_hubungan', 'Hubungan Refrensi', 'required');
        $this->form_validation->set_rules('referensi_bagian', 'Bagian Refrensi', 'required');
        $this->form_validation->set_rules('referensi_cabang', 'Cabang Refrensi', 'required');

        if ($this->form_validation->run() == FALSE) {
             $data = [
                'title' => 'Input Biodata',
                'isi' => 'interview/biodata_referensi_v',
                'row' => $this->referensi->getReferensiData($id)
            ];
            $this->load->view('index', $data);
        } else {
            $insert = $this->referensi->store($id);
            if ($insert) {
                $this->session->set_flashdata('pesan', 'data '.$this->uri->segment(2).' berhasil di simpan');
                redirect(base_url('interview/darurat/input/'.$id));
            }else{
                $this->session->set_flashdata('error', 'data '.$this->uri->segment(2).' gagal di simpan');
                redirect(base_url('interview/referensi/input/'.$id));
            }
        }
    }
}
        
    /* End of file  Dashboard.php */
        
                            