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
             'isi' => 'interview/interview_pengiriman',
             'cabang' => $this->db->get('tabel_cabang')->result(),
             'bagian' => $this->db->get('bagian')->result()
         ];
         $this->load->view('index', $data);
    }


    public function getPengiriman()
    {
         $this->datatables->select('pengiriman_id,biodata_nik,biodata_nama,nama_cabang,nama_bagian,pengiriman_tanggal,pengiriman_status,pengiriman_keterangan,pengiriman_cabang,pengiriman_bagian,pengiriman_jam');
         $this->datatables->unset_column('pengiriman_id');
         $this->datatables->unset_column('pengiriman_keterangan');
         $this->datatables->unset_column('pengiriman_cabang');
         $this->datatables->unset_column('pengiriman_bagian');
         $this->datatables->unset_column('pengiriman_jam');
         $this->datatables->join('biodata_ktp','tabel_pengiriman.pengiriman_nik=biodata_ktp.biodata_nik','left');
         $this->datatables->join('bagian','tabel_pengiriman.pengiriman_bagian=bagian.id_bagian','left');
         $this->datatables->join('tabel_cabang','tabel_pengiriman.pengiriman_cabang=tabel_cabang.id_cabang','left');
         $this->datatables->from('tabel_pengiriman');

         if ($this->input->post('cabang') == $this->input->post('cabang') && $this->input->post('tanggal')) {
            $this->datatables->like('pengiriman_cabang', $this->input->post('cabang'));
            $this->datatables->like('pengiriman_tanggal', $this->input->post('tanggal'));
            $this->datatables->or_like('pengiriman_cabang', $this->input->post('cabang'));
            $this->datatables->like('pengiriman_tanggal', $this->input->post('tanggal'));
        }
        
        if ($this->input->post('cabang')) {
            $this->datatables->like('pengiriman_cabang', $this->input->post('cabang'));
        }else if ($this->input->post('tanggal')) {
            $this->datatables->like('pengiriman_tanggal', $this->input->post('tanggal'));
            $this->datatables->or_like('pengiriman_tanggal', $this->input->post('tanggal'));
        }else{
            echo '';
        }
         $this->datatables->edit_column('pengiriman_tanggal','$1','tgl_indo(pengiriman_tanggal)');
         // $this->datatables->add_column('nomor','1');
         $this->datatables->add_column('cetak','<a href="javascript:void(0);" class="btn_cetak btn btn-info btn-sm" data-id="$1"><i class="fa fa-print" title="cetak"></i></a>','biodata_nik');
          $this->datatables->add_column('actions', '<a href="javascript:void(0);" class="pengiriman_edit btn btn-primary btn-sm" data-id="$1" data-nik="$2" data-tanggal="$6" data-keterangan="$8" data-cabang="$9" data-bagian="$11" data-jam="$10"><i class="fa fa-edit" title="edit pengiriman"></i></a> <a href="javascript:void(0);" class="btn_diterima btn btn-success btn-sm" data-id="$1"><i class="fa fa-check-square" title="di terima"></i></a>  <a href="javascript:void(0);" class="btn_dibatalkan btn btn-danger btn-sm" data-id="$1"><i class="fa fa-times-circle" title="di batalkan"></i></a> <a href="javascript:void(0);" class="btn_ditolak btn btn-warning btn-sm" data-id="$1" title="di tolak"><i class="fa fa-user-times"></i></a>','pengiriman_id,biodata_nik,biodata_nama,nama_cabang,nama_bagian,pengiriman_tanggal,pengiriman_status,pengiriman_keterangan,pengiriman_cabang,pengiriman_jam,pengiriman_bagian,nomor,actions');
 
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
    public function batal()
    {
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        }
        $id = $this->uri->segment(3);
        $request = ['pengiriman_status' => $this->input->post('status')];
        $update = $this->db->update('tabel_pengiriman', $request,['pengiriman_id' => $id]);
        if ($update) {
          $data = array('success' => true);
        }
        
        echo json_encode($data);
    }
    //pengiriman update
    public function update()
    {
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        }
        $id = $this->uri->segment(3);
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
                'pengiriman_cabang' => $this->input->post('pengiriman_cabang',true),
                'pengiriman_bagian' => $this->input->post('pengiriman_bagian',true),
                'pengiriman_keterangan' => $this->input->post('pengiriman_keterangan',true),
                'pengiriman_jam' => $this->input->post('pengiriman_jam',true),
             ];
             $this->pengiriman->updateStore($request,$id);
        }
        echo json_encode($data);
    }

    //pengiriman cetak
    public function cetak()
    {
        $this->load->library('pdf_report');
        $id = $this->uri->segment(3);
        $data = ['tampil' => $this->pengiriman->cetak($id)];
        $nama = $data['tampil']['biodata_nama'];
        // dapatkan output html
        // $html = $this->output->get_output();
        $data = array('data' => $this->load->view('pengiriman/cetak/cetak_pengiriman',$data,true));
        $this->pdf_report->setPaper('A4', 'potrait');
        $this->pdf_report->filename = $nama.".pdf";
        $this->pdf_report->load_view('pengiriman/cetak/cetak_pengiriman', $data);
        // atau jika tidak ingin menampilkan (tanpa) preview di halaman browser
        // $this->dompdf->stream("welcome.pdf");
        
    }
    public function cetak_cabang()
    {
        $this->load->library('pdf_report');
        $cabang = $this->input->post('cabang');
        $tanggal = $this->input->post('tanggal');
        $data = [
                'tampil' => $this->pengiriman->cetak_percabang_kop($cabang,$tanggal)->row_array(),
                'results' => $this->pengiriman->cetak_percabang_kop($cabang,$tanggal)->result_array()
            ];
        $nama = $data['tampil']['nama_cabang'];
        // dapatkan output html
        // $html = $this->output->get_output();
        $data = array('data' => $this->load->view('pengiriman/cetak/cetak_pengiriman',$data,true));
        $this->pdf_report->setPaper('A4', 'potrait');
        $this->pdf_report->filename = $nama.".pdf";
        $this->pdf_report->load_view('pengiriman/cetak/cetak_pengiriman_percabang', $data,TRUE);
        
    }
}
        
    /* End of file  Master.php */
        
                            