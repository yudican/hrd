<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Interview_cadangan extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->model(array(
            'Ktp_models' => 'ktp',
            'Profile_models' => 'profile',
            'Domisili_models' => 'domisili',
            'Referensi_models' => 'referensi'
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
             'isi' => 'interview/interview_cadangan'
         ];
         $this->load->view('index', $data);
    }


    public function getInterview()
    {
         $this->datatables->select('biodata_nik,biodata_nama,nomor_adm,interview_status,interview_tanggal,interview_keterangan,profil_foto');
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
         $this->datatables->add_column('actions', '<a href="javascript:void(0);" class="detail_record btn btn-info btn-sm" data-id="$1"><i class="fa fa-folder-open"></i></a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-sm" data-id="$1"><i class="fa fa-trash"></i></a>','biodata_nik,biodata_nama,nomor_adm,interview_status,interview_tanggal,interview_keterangan,actions');
 
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
            'result_referensi' => $this->referensi->getReferensiData($id)
        ];
        $this->load->view('index', $data);
    }
}
        
    /* End of file  Master.php */
        
                            