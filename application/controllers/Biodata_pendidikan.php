<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Biodata_pendidikan extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->model('Pendidikan_models','pendidikan');
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
            'isi' => 'interview/biodata_pendidikan_v',
            'row' => $this->pendidikan->getPendidikanData($id)

        ];
        $this->load->view('index', $data);
    }
    public function simpan()
    {
        $id = $this->uri->segment(4);
        $insert = $this->pendidikan->store($id);
        if ($insert) {
            $this->session->set_flashdata('pesan', 'data '.$this->uri->segment(2).' berhasil di simpan');
            redirect(base_url('interview/pengalaman/input/'.$id));
        }else{
            $this->session->set_flashdata('error', 'data '.$this->uri->segment(2).' gagal di simpan');
            redirect(base_url('interview/pendidikan/input/'.$id));
        }
    }
}
        
    /* End of file  Dashboard.php */
        
                            