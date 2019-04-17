<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Biodata_pengalaman extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->model('Pengalaman_models','pengalaman');
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
            'isi' => 'interview/biodata_pengalaman_v',
            'row' => $this->pengalaman->getPengalamanData($id,'pengalaman_nik')->row(),
            'results' => $this->pengalaman->getPengalamanData($id,'pengalaman_nik')->result()

        ];
        $this->load->view('index', $data);
    }
    public function update()
    {
        $id = $this->uri->segment(5);
        $data = [
            'title' => 'Input Biodata',
            'isi' => 'interview/biodata_pengalaman_v',
            'row' => $this->pengalaman->getPengalamanData($id,'pengalaman_id')->row(),
            'results' => $this->pengalaman->getPengalamanData($id,'pengalaman_id')->result()

        ];
        $this->load->view('index', $data);
    }
    public function simpan()
    {
        $id = $this->uri->segment(5);
        if ($this->uri->segment(3) == 'input') {
            $insert = $this->pengalaman->store();
        }else{
            $insert = $this->pengalaman->store($id);
        }
        $this->session->set_flashdata('pesan', 'data '.$this->uri->segment(2).' berhasil di '.$this->uri->segment(3).'');
        redirect(base_url('interview/pengalaman/input/'.$this->uri->segment(4)));
    }
    public function hapus()
    {
        $id = $this->uri->segment(5);
        $this->db->delete('biodata_pengalaman',['pengalaman_id' => $id]);
        $this->session->set_flashdata('pesan', 'data '.$this->uri->segment(2).' berhasil di hapus');
        redirect(base_url('interview/pengalaman/input/'.$this->uri->segment(4)));
    }
}
        
    /* End of file  Dashboard.php */
        
                            