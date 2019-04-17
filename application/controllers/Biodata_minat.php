<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Biodata_minat extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->model('Minat_kerja_models','minat');
        $this->load->helper('input');
        $this->load->library('form_validation');
        if (!$this->session->userdata('is_login') == true) {
            redirect('login');
        }
    }

    public function input()
    {
        $id = $this->uri->segment(4);
        $data = [
            'title' => 'Input Biodata',
            'isi' => 'interview/biodata_minat_v',
            'row' => $this->minat->getMinatData($id)

        ];
        $this->load->view('index', $data);
    }
    public function simpan()
    {
    	$id = $this->uri->segment(4);
        $insert = $this->minat->store($id);
        if ($insert) {
            $this->session->set_flashdata('pesan', 'data '.$this->uri->segment(2).' berhasil di simpan');
            redirect(base_url('interview/input/'.$id));
        }else{
            $this->session->set_flashdata('error', 'data '.$this->uri->segment(2).' gagal di simpan');
            redirect(base_url('interview/minat/input/'.$id));
        }
    }
}
        
    /* End of file  Dashboard.php */
        
                            