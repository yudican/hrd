<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Biodata_interview extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->model('Interview_models','interview');
        $this->load->helper('input');
        if (!$this->session->userdata('is_login') == true) {
            redirect('login');
        }
    }

    public function input()
    {
        $id = $this->uri->segment(3);
        $this->form_validation->set_rules('interview_tanggal', 'Tanggal Interview', 'required');
        $this->form_validation->set_rules('interview_status', 'Status Interview', 'required');
        $this->form_validation->set_rules('interview_cabang', 'Cabang Interview', 'required');
        $this->form_validation->set_rules('nomor_adm', 'Nomor ADM', 'required');
        $this->form_validation->set_rules('interview_tanggal_input', 'Tanggal Input Interview', 'required');
        $this->form_validation->set_rules('interview_keterangan', 'Keterangan Interview', 'required');

        if ($this->form_validation->run() == FALSE) {
             $data = [
                'title' => 'Input Biodata',
                'isi' => 'interview/biodata_interview_v',
                'row' => $this->interview->getInterviewData($id),
                'result_cabang' => $this->db->get('tabel_cabang')->result()
            ];
            $this->load->view('index', $data);
        } else {
            $insert = $this->interview->store($id);
            if ($insert) {
                $this->session->set_flashdata('pesan', 'data '.$this->uri->segment(2).' berhasil di simpan');
                redirect(base_url('interview/ktp/input'));
            }else{
                $this->session->set_flashdata('error', 'data '.$this->uri->segment(2).' gagal di simpan');
                redirect(base_url('interview/interview/input/'.$id));
            }
        }
    }
}
        
    /* End of file  Dashboard.php */
        
                            