<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Biodata_keluarga extends CI_Controller {


    public function __construct() {
        parent:: __construct();
        $this->load->model('Keluarga_models','keluarga');
        $this->load->helper('input');
        if (!$this->session->userdata('is_login') == true) {
            redirect('login');
        }
    }

    //function input
    public function input()
    {
        $id = $this->uri->segment(4);
      	$this->form_validation->set_rules('keluarga_jenis', 'Jenis Keluarga', 'required');
        $this->form_validation->set_rules('keluarga_kk', 'No KK keluarga', 'required');
        $this->form_validation->set_rules('keluarga_ktp', 'KTP Keluarga', 'required');
        $this->form_validation->set_rules('keluarga_nama', 'Nama Keluarga', 'required');
        $this->form_validation->set_rules('keluarga_jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('keluarga_tempat_lahir', 'Tempat Lahir ', 'required');
        $this->form_validation->set_rules('keluarga_tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('keluarga_pekerjaan', 'Pekerjaan', 'required');
        $this->form_validation->set_rules('keluarga_hp', 'No HP/Telepon', 'required');
       

        if ($this->form_validation->run() == FALSE) {
             $data = [
                'title' => 'Input Biodata',
                'isi' => 'interview/biodata_keluarga_v',
                'row' => $this->keluarga->getkeluargaData($id)
            ];
            $this->load->view('index', $data);
        } else {
            $insert = $this->keluarga->store($id);
            if ($insert) {
                $this->session->set_flashdata('pesan', 'data '.$this->uri->segment(2).' berhasil di simpan');
                redirect(base_url('interview/kehamilan/input/'.$id));
            }else{
                $this->session->set_flashdata('error', 'data '.$this->uri->segment(2).' gagal di simpan');
                redirect(base_url('interview/keluarga/input/'.$id));
            }
        }
    }
}
        
    /* End of file  Dashboard.php */
        
