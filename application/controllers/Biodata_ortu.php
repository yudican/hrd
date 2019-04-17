<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Biodata_ortu extends CI_Controller {


    public function __construct() {
        parent:: __construct();
        $this->load->model('Ortu_models','ortu');
        $this->load->helper('input');
        if (!$this->session->userdata('is_login') == true) {
            redirect('login');
        }
    }

    //function input
    public function input()
    {
        $id = $this->uri->segment(4);
      	$this->form_validation->set_rules('ortu_ayah_nama', 'Nama Ayah', 'required');
        $this->form_validation->set_rules('ortu_ibu_nama', 'Nama Ibu', 'required');
       

        if ($this->form_validation->run() == FALSE) {
             $data = [
                'title' => 'Input Biodata',
                'isi' => 'interview/biodata_orang_tua_v',
                'row' => $this->ortu->getOrtuData($id)
            ];
            $this->load->view('index', $data);
        } else {
            $insert = $this->ortu->store($id);
            if ($insert) {
                $this->session->set_flashdata('pesan', 'data '.$this->uri->segment(2).' berhasil di simpan');
                redirect(base_url('interview/wali/input/'.$id));
            }else{
                $this->session->set_flashdata('error', 'data '.$this->uri->segment(2).' gagal di simpan');
                redirect(base_url('interview/ortu/input/'.$id));
            }
        }
    }
}
        
    /* End of file  Dashboard.php */
        
