<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Biodata_darurat extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->model('Darurat_models','darurat');
        $this->load->helper('input');
        $this->load->library('form_validation');
        if (!$this->session->userdata('is_login') == true) {
            redirect('login');
        }
    }

    public function input()
    {
        $id = $this->uri->segment(4);
        $this->form_validation->set_rules('darurat_satu_nama', 'Nama', 'required');
        $this->form_validation->set_rules('darurat_satu_hp', 'No Hp/Telepon 1', 'required');
        $this->form_validation->set_rules('darurat_dua_nama', 'Nama', 'required');
        $this->form_validation->set_rules('darurat_dua_hp', 'No Hp/Telepon 2', 'required');

        if ($this->form_validation->run() == FALSE) {
             $data = [
                'title' => 'Input Biodata',
                'isi' => 'interview/biodata_darurat_v',
                'row' => $this->darurat->getDaruratData($id)

            ];
            $this->load->view('index', $data);
        } else {
            $insert = $this->darurat->store($id);
            if ($insert) {
                $this->session->set_flashdata('pesan', 'data '.$this->uri->segment(2).' berhasil di simpan');
                redirect(base_url('interview/ortu/input/'.$id));
            }else{
                $this->session->set_flashdata('error', 'data '.$this->uri->segment(2).' gagal di simpan');
                redirect(base_url('interview/referensi/input/'.$id));
            }
        }
    }
}
        
    /* End of file  Dashboard.php */
        
                            