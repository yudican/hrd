<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Biodata_kehamilan extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->model('Kehamilan_models','kehamilan');
        $this->load->helper('input');
        if (!$this->session->userdata('is_login') == true) {
            redirect('login');
        }
    }

    public function input()
    {
        $id = $this->uri->segment(4);
        $this->form_validation->set_rules('perkawinan_status', 'Status Perkawinan', 'required');

        if ($this->form_validation->run() == FALSE) {
             $data = [
                'title' => 'Input Biodata',
                'isi' => 'interview/biodata_kehamilan_v',
                'row' => $this->kehamilan->getKehamilanData($id)
            ];
            $this->load->view('index', $data);
        } else {
            $insert = $this->kehamilan->store($id);
            if ($insert) {
                $this->session->set_flashdata('pesan', 'data '.$this->uri->segment(2).' berhasil di simpan');
                redirect(base_url('interview/referensi/input/'.$id));
            }else{
                $this->session->set_flashdata('error', 'data '.$this->uri->segment(2).' gagal di simpan');
                redirect(base_url('interview/kehamilan/input/'.$id));
            }
        }
    }
}
        
    /* End of file  Dashboard.php */
        
                            