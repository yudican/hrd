<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Biodata_wali extends CI_Controller {


    public function __construct() {
        parent:: __construct();
        $this->load->model('Wali_models','wali');
        $this->load->helper('input');
        if (!$this->session->userdata('is_login') == true) {
            redirect('login');
        }
    }
    public function input($value='')
    {
    	$id = $this->uri->segment(4);
    	$data = [
            'title' => 'Input Biodata',
            'isi' => 'interview/biodata_wali_v',
            'row' => $this->wali->getWaliData($id)
        ];
        $this->load->view('index', $data);
    }
    //function input
    public function simpan()
    {
    	$id = $this->uri->segment(4);
     	$insert = $this->wali->store($id);
   		
        if (!$this->input->is_ajax_request()) {
           if ($insert) {
                $this->session->set_flashdata('pesan', 'data '.$this->uri->segment(2).' berhasil di simpan');
                redirect(base_url('interview/susunan_anak/input/'.$id));
            }else{
                $this->session->set_flashdata('error', 'data '.$this->uri->segment(2).' gagal di simpan');
                redirect(base_url('interview/wali/input/'.$id));
            }
        }else{
            $data['success'] = true;
            echo json_encode($data);
        }
    }
}
        
    /* End of file  Dashboard.php */
        
                            