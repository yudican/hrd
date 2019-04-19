<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Interview_cadangan extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->model(array(
            'Ktp_models' => 'ktp',
            'Profile_models' => 'profile',
            'Domisili_models' => 'domisili',
            'Referensi_models' => 'referensi',
            'Susunan_anak_models' => 'sao',
            'Darurat_models' => 'darurat',
            'Ortu_models' => 'ortu',
            'Kehamilan_models' => 'kehamilan',
            'Keluarga_models' => 'keluarga',
            'Wali_models' => 'wali',
            'Minat_kerja_models' => 'minat',
            'Pengalaman_models' => 'pengalaman',
            'Pendidikan_models' => 'pendidikan',
            'Interview_models' => 'interview'
        ));
        $this->load->library('datatables');
        $this->load->helper('input');
        
        if (!$this->session->userdata('is_login') == true) {
            redirect('login');
        }
    }
    
    public function index()
    {
         $data = [
             'title' => 'INTERVIEW LIHAT | HRD',
             'isi' => 'interview/interview_cadangan',
             'cabang' => $this->db->get('tabel_cabang')->result(),
             'bagian' => $this->db->get('bagian')->result()
         ];
         $this->load->view('index', $data);
    }


    public function getInterview()
    {
         $this->datatables->select('biodata_nik,biodata_nama,nomor_adm,interview_status,interview_tanggal,interview_keterangan,profil_foto,biodata_kelamin');
         $this->datatables->unset_column('interview_nik');
         if ($this->input->post('status') == 'Gagal Seleksi' && $this->input->post('filter')) {
            $this->datatables->like('interview_status', 'Gagal Seleksi');
            $this->datatables->like('biodata_nik', $this->input->post('filter'));
            $this->datatables->or_like('interview_status', 'Gagal Seleksi');
            $this->datatables->like('biodata_nama', $this->input->post('filter'));
        }
        if ($this->input->post('status') == 'Cadangan' && $this->input->post('filter')) {
            $this->datatables->like('interview_status', 'Cadangan');
            $this->datatables->like('biodata_nik', $this->input->post('filter'));
            $this->datatables->or_like('interview_status', 'Cadangan');
            $this->datatables->like('biodata_nama', $this->input->post('filter'));
        }
        if ($this->input->post('status')) {
            $this->datatables->like('interview_status', $this->input->post('status'));
        }else if ($this->input->post('filter')) {
            $this->datatables->like('biodata_nama', $this->input->post('filter'));
            $this->datatables->or_like('biodata_nik', $this->input->post('filter'));
        }else{
            echo '';
        }
         
         $this->datatables->join('biodata_interview','biodata_ktp.biodata_nik=biodata_interview.interview_nik','left');
         $this->datatables->join('biodata_profil','biodata_ktp.biodata_nik=biodata_profil.profil_nik','left');
         $this->datatables->from('biodata_ktp');
         $this->datatables->edit_column('interview_tanggal','$1','tgl_indo(interview_tanggal)');
         $this->datatables->edit_column('profil_foto','$1','getFoto(profil_foto)');
         $this->datatables->edit_column('biodata_kelamin','$1','statusGagal(interview_status,biodata_nik)');
         // $this->datatables->add_column('actions', 'statusGagal(interview_status)','interview_status');
 
        echo $this->datatables->generate('json','');
    }

    //lihat data karyawan detail
    public function lihat()
    {
        $id = $this->uri->segment(3);
        $data = [
            'title' => 'INTERVIEW DETAIL | HRD',
            'isi' => 'lihat/lihat_profile',
            'result_profile' => $this->profile->getProfileData($id),
            'result_ktp' => $this->ktp->getDataKtp($id),
            'result_domisili' => $this->domisili->getDomisiliData($id),
            'result_referensi' => $this->referensi->getReferensiData($id),
            'result_sao' => $this->sao->getAnakData($id)->result(),
            'result_darurat' => $this->darurat->getDaruratData($id),
            'result_ortu' => $this->ortu->getOrtuData($id),
            'result_kehamilan' => $this->kehamilan->getKehamilanData($id),
            'result_keluarga' => $this->keluarga->getKeluargaData($id)->result(),
            'result_wali' => $this->wali->getWaliData($id),
            'result_minat' => $this->minat->getMinatData($id),
            'result_pengalaman' => $this->pengalaman->getPengalamanData($id,'pengalaman_nik')->result(),
            'result_pendidikan' => $this->pendidikan->getPendidikanData($id),
            'result_interview' => $this->interview->getInterviewData($id)
        ];
        $this->load->view('index', $data);
    }

    //input pengiriman
    public function pengiriman()
    {
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        }
        $data = array('success' => false,'message' => array());
        $this->form_validation->set_rules('pengiriman_cabang', 'Cabang Pengiriman', 'required');
        $this->form_validation->set_rules('pengiriman_bagian', 'Pengiriman bagian', 'required');
        $this->form_validation->set_rules('pengiriman_jam', 'Jam Pengiriman', 'required');
        $this->form_validation->set_rules('pengiriman_keterangan', 'Keterangan Pengiriman', 'required');
        $this->form_validation->set_error_delimiters('<small class="text-danger">','</small>');

        if ($this->form_validation->run() == FALSE) {
            foreach ($_POST as $key => $value) {
                $data['message'][$key] = form_error($key);
            }
            
        }else{
            $data['success'] = true;
             $request = [
                'pengiriman_nik' => $this->input->post('pengiriman_nik',true),
                'pengiriman_cabang' => $this->input->post('pengiriman_cabang',true),
                'pengiriman_bagian' => $this->input->post('pengiriman_bagian',true),
                'pengiriman_keterangan' => $this->input->post('pengiriman_keterangan',true),
                'pengiriman_jam' => $this->input->post('pengiriman_jam',true),
                'pengiriman_nomor' => nomor_adm('tabel_pengiriman','pengiriman_nomor','','pengiriman_id'),
                'pengiriman_status' => 'PROGRES'
             ];
             $this->db->insert('tabel_pengiriman', $request);
        }
        echo json_encode($data);
    }
    
}
        
    /* End of file  Master.php */
        
                            