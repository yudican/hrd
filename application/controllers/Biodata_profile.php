<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Biodata_profile extends CI_Controller {


    public function __construct() {
        parent:: __construct();
        $this->load->model('Profile_models','profile');
        $this->load->helper('input');
        if (!$this->session->userdata('is_login') == true) {
            redirect('login');
        }
    }

    public function input()
    {
        $id = $this->uri->segment(4);
        $this->form_validation->set_rules('profil_tinggi', 'Tinggi badan', 'required|numeric');
        $this->form_validation->set_rules('profil_berat', 'Berat Badan', 'required|numeric');
        $this->form_validation->set_rules('profil_ukuran_baju', 'Ukuran Baju', 'required');
        $this->form_validation->set_rules('profil_nomor_hp', 'nomor telepon/hp', 'required|numeric');
        $this->form_validation->set_rules('profil_npwp', 'nomor NPWP', 'required|numeric');
        $this->form_validation->set_rules('profil_bca', 'nomor BCA', 'required|numeric');
        
        if ($this->form_validation->run() == FALSE) {
            $data = [
                'title' => 'Input Biodata',
                'isi' => 'interview/biodata_profile_v',
                'row' => $this->profile->getProfileData($id)
            ];
            $this->load->view('index', $data);
        } else {
            $config['upload_path']          = './foto/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 10000;
            $config['max_width']            = 2048;
            $config['max_height']           = 2048;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('profil_foto'))
            {
                $cekfoto = $this->profile->getProfileData($id);
                if(!empty($cekfoto->profil_foto)){
                    $data['profil_foto']        = $cekfoto->profil_foto;
                }else{
                    $data['profil_foto']        = 'default.png';
                }
                    $data['profil_tinggi']      = $this->input->post('profil_tinggi', TRUE);
                    $data['profil_berat']       = $this->input->post('profil_berat',TRUE);
                    $data['profil_ukuran_baju'] = $this->input->post('profil_ukuran_baju', TRUE);
                    $data['profil_nomor_hp']    = $this->input->post('profil_nomor_hp', TRUE);
                    $data['profil_npwp']        = $this->input->post('profil_npwp',TRUE);
                    $data['profil_bca']         = $this->input->post('profil_bca', TRUE);
                    $data['profil_email']       = $this->input->post('profil_email', TRUE);
                    
                    $insert = $this->profile->store($id,$data);
                    if ($insert) {
                        $this->session->set_flashdata('pesan', 'data interview profile berhasil di simpan');
                        redirect(base_url('interview/domisili/input/'.$id));
                    }else{
                        $this->session->set_flashdata('error', 'data interview profile gagal di simpan');
                        redirect(base_url('interview/profile/input/'.$id));
                    }
                
            }
            else
            {
                //hapus foto di folder
                $oldfoto = $this->profile->getProfileData($id);
                ($oldfoto->profil_foto == 'default.png') ? '' : unlink('./foto/'.$oldfoto->profil_foto);
                $file = $this->upload->data();
                $foto = time().''.$file['file_ext'];
                $data['profil_tinggi']      = $this->input->post('profil_tinggi', TRUE);
                $data['profil_berat']       = $this->input->post('profil_berat',TRUE);
                $data['profil_ukuran_baju'] = $this->input->post('profil_ukuran_baju', TRUE);
                $data['profil_nomor_hp']    = $this->input->post('profil_nomor_hp', TRUE);
                $data['profil_npwp']        = $this->input->post('profil_npwp',TRUE);
                $data['profil_bca']         = $this->input->post('profil_bca', TRUE);
                $data['profil_email']       = $this->input->post('profil_email', TRUE);
                $data['profil_foto'] = $foto;
                $insert = $this->profile->store($id,$data);
                if ($insert) {
                    $this->session->set_flashdata('pesan', 'data interview profile berhasil di simpan');
                    redirect(base_url('interview/domisili/input/'.$id));
                }else{
                    $this->session->set_flashdata('error', 'data interview profile gagal di simpan');
                    redirect(base_url('interview/profile/input/'.$id));
                }
                
            }
        }
    }
    
}
        
    /* End of file  Dashboard.php */
        
                            