<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Interview_pengiriman extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->model('Pengiriman_models', 'pengiriman');
        $this->load->library('datatables');
        $this->load->helper('input');
        
        if (!$this->session->userdata('is_login') == true) {
            redirect('login');
        }
    }
    
    public function index()
    {
         $data = [
             'title' => 'INTERVIEW PENGIRIMAN | HRD',
             'isi' => 'interview/interview_pengiriman'
         ];
         $this->load->view('index', $data);
    }


    public function getPengiriman()
    {
         $this->datatables->select('pengiriman_id,biodata_nik,biodata_nama,nama_cabang,nama_bagian,pengiriman_tanggal,pengiriman_status');
         $this->datatables->unset_column('pengiriman_id');
         
         $this->datatables->join('biodata_ktp','tabel_pengiriman.pengiriman_nik=biodata_ktp.biodata_nik','left');
         $this->datatables->join('bagian','tabel_pengiriman.pengiriman_bagian=bagian.id_bagian','left');
         $this->datatables->join('tabel_cabang','tabel_pengiriman.pengiriman_cabang=tabel_cabang.id_cabang','left');
         $this->datatables->from('tabel_pengiriman');
         $this->datatables->edit_column('pengiriman_tanggal','$1','tgl_indo(pengiriman_tanggal)');
         $this->datatables->add_column('nomor','1');
          $this->datatables->add_column('actions', '<a href="javascript:void(0);" class="btn_diterima btn btn-success btn-sm" data-id="$1"><i class="fa fa-check-square" title="di terima"></i></a>  <a href="javascript:void(0);" class="btn_dibatalkan btn btn-danger btn-sm" data-id="$1"><i class="fa fa-times-circle" title="di batalkan"></i></a> <a href="javascript:void(0);" class="btn_ditolak btn btn-warning btn-sm" data-id="$1" title="di tolak"><i class="fa fa-user-times"></i></a>','pengiriman_id,biodata_nik,biodata_nama,nama_cabang,nama_bagian,pengiriman_tanggal,pengiriman_status,nomor,actions');
 
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
        
                            