<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Biodata_susunan_anak extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->model('Susunan_anak_models','susunan_anak');
        $this->load->helper('input');
        if (!$this->session->userdata('is_login') == true) {
            redirect('login');
        }
    }

    public function input()
    {
        $id = $this->uri->segment(4);
        $this->form_validation->set_rules('anak_nama', 'Nama', 'required');
        if ($this->form_validation->run() == FALSE) {
             $data = [
                'title' => 'Input Biodata',
                'isi' => 'interview/biodata_susunan_anak_v',
                'results' => $this->susunan_anak->getAnakData($id)->result()
            ];
            $this->load->view('index', $data);
        } else {
            $insert = $this->susunan_anak->store();
            if ($insert) {
                $this->session->set_flashdata('pesan', 'data '.$this->uri->segment(2).' berhasil di simpan');
                redirect(base_url('interview/susunan_anak/input/'.$id));
            }else{
                $this->session->set_flashdata('error', 'data '.$this->uri->segment(2).' gagal di simpan');
                redirect(base_url('interview/susunan_anak/input/'.$id));
            }
        }
    }
}
        
    /* End of file  Dashboard.php */
        
                            