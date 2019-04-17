<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Biodata_domisili extends CI_Controller {


    public function __construct() {
        parent:: __construct();
        $this->load->model('Domisili_models','domisili');
        $this->load->helper('input');
        if (!$this->session->userdata('is_login') == true) {
            redirect('login');
        }
    }

    //function input
    public function input()
    {
        $id = $this->uri->segment(4);
      	$this->form_validation->set_rules('domisili_alamat', 'Alamat Sekarang', 'required');
        $this->form_validation->set_rules('domisili_jenis', 'Jenis Tinggal', 'required');

        if ($this->form_validation->run() == FALSE) {
             $data = [
                'title' => 'Input Biodata',
                'isi' => 'interview/biodata_domisili_v',
                'row' => $this->domisili->getDomisiliData($id)
            ];
            $this->load->view('index', $data);
        } else {
            $insert = $this->domisili->store($id);
            if ($insert) {
                $this->session->set_flashdata('pesan', 'data '.$this->uri->segment(2).' berhasil di simpan');
                redirect(base_url('interview/kehamilan/input/'.$id));
            }else{
                $this->session->set_flashdata('error', 'data '.$this->uri->segment(2).' gagal di simpan');
                redirect(base_url('interview/domisili/input/'.$id));
            }
        }
    }
}
        
    /* End of file  Dashboard.php */
        
                            