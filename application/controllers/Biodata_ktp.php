<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Biodata_ktp extends CI_Controller {


    public function __construct() {
        parent:: __construct();
        $this->load->model('Ktp_models','ktp');
        $this->load->helper('input');
        if (!$this->session->userdata('is_login') == true) {
            redirect('login');
        }
    }

    // //function input
    public function input()
    {
        $this->form_validation->set_rules('biodata_nik', 'Nomor Nik', 'trim|required|numeric|min_length[16]');
        $this->form_validation->set_rules('biodata_nama', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('biodata_tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('biodata_tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('biodata_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('biodata_golongan_darah', 'Golongan Darah', 'required');
        $this->form_validation->set_rules('biodata_alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('biodata_rt', 'Rt', 'trim|required|numeric');
        $this->form_validation->set_rules('biodata_rw', 'Rw', 'trim|required|numeric');
        $this->form_validation->set_rules('biodata_propinsi', 'Provinsi', 'required');
        $this->form_validation->set_rules('biodata_kabupaten', 'Kabupaten/kota', 'required');
        $this->form_validation->set_rules('biodata_kecamatan', 'Kecamatan', 'required');
        $this->form_validation->set_rules('biodata_kelurahan', 'Kelurahan', 'required');
        $this->form_validation->set_rules('biodata_agama', 'Agama', 'required');
        $this->form_validation->set_rules('biodata_status', 'Status Perkawinan', 'required');
        $this->form_validation->set_rules('biodata_pekerjaan', 'Status Pekerjaan', 'required');
        $this->form_validation->set_rules('biodata_kewarganegaraan', 'Status Kewarganegaraan', 'required');
        $this->form_validation->set_rules('biodata_berlaku_ktp', 'Masa Berlaku Ktp', 'required');
        if ($this->form_validation->run() == FALSE) {
             $data = [
                'title' => 'Input Biodata',
                'isi' => 'interview/biodata_ktp_v'
            ];
            $this->load->view('index', $data);
        } else {
            $insert = $this->ktp->store();
            if ($insert) {
                $this->session->set_flashdata('pesan', 'data interview ktp berhasil di simpan');
                redirect(base_url('interview/profile/input/'.$this->input->post('biodata_nik', TRUE)));
            }else{
                $this->session->set_flashdata('error', 'data interview ktp gagal di simpan');
                redirect(base_url('interview/ktp/input'));
            }
        }
    }

    //function simpan
    public function update()
    {
        $id = $this->uri->segment(4);
        $this->form_validation->set_rules('biodata_nik', 'NIK', 'trim|required|min_length[16]|numeric');
        $this->form_validation->set_rules('biodata_nama', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('biodata_tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('biodata_tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('biodata_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('biodata_golongan_darah', 'Golongan Darah', 'required');
        $this->form_validation->set_rules('biodata_alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('biodata_rt', 'Rt', 'trim|required|numeric');
        $this->form_validation->set_rules('biodata_rw', 'Rw', 'trim|required|numeric');
        $this->form_validation->set_rules('biodata_propinsi', 'Provinsi', 'required');
        $this->form_validation->set_rules('biodata_kabupaten', 'Kabupaten/kota', 'required');
        $this->form_validation->set_rules('biodata_kecamatan', 'Kecamatan', 'required');
        $this->form_validation->set_rules('biodata_kelurahan', 'Kelurahan', 'required');
        $this->form_validation->set_rules('biodata_agama', 'Agama', 'required');
        $this->form_validation->set_rules('biodata_status', 'Status Perkawinan', 'required');
        $this->form_validation->set_rules('biodata_pekerjaan', 'Status Pekerjaan', 'required');
        $this->form_validation->set_rules('biodata_kewarganegaraan', 'Status Kewarganegaraan', 'required');
        $this->form_validation->set_rules('biodata_berlaku_ktp', 'Masa Berlaku Ktp', 'required');
        if ($this->form_validation->run() == FALSE) {
             $data = [
                'title' => 'Input Biodata',
                'isi' => 'interview/biodata_ktp_v',
                'row' => $this->ktp->getDataKtp($id)
            ];
            $this->load->view('index', $data);
        } else {
            $insert = $this->ktp->store($id);
            if ($insert) {
                $this->session->set_flashdata('pesan', 'data interview ktp berhasil di simpan');
                redirect(base_url('interview/profile/input/'.$id));
            }else{
                $this->session->set_flashdata('error', 'data interview ktp gagal di simpan');
                redirect(base_url('interview/ktp/update'));
            }
        }
    }
    //menampilkan provinsi,kota,kabupatent,kecamatan dan kelurahan
    public function getProvinsi()
    {
        $provinsi = $this->db->get('provinces')->result();

        //set header json
         header('Content-Type: application/json');
        echo json_encode(['result' => $provinsi]);
    } 
    //mengambil data kota/kabupaten
    public function getKota()
    {
        $prov_id = $this->uri->segment(3);
        $kota = $this->db->get_where('cities',['province_id' => $prov_id])->result();

        //set header json
         header('Content-Type: application/json');
        echo json_encode(['result' => $kota]);
    }
    //mengambil data kecamatan
    public function getKecamatan()
    {
        $city_id = $this->uri->segment(3);
        $kecamatan = $this->db->get_where('districts',['city_id' => $city_id])->result();

        //set header json
         header('Content-Type: application/json');
        echo json_encode(['result' => $kecamatan]);
    }
    //mengambil data kelurahan
    public function getKelurahan()
    {
        $kec_id = $this->uri->segment(3);
        $kelurahan = $this->db->get_where('villages',['district_id' => $kec_id])->result();

        //set header json
         header('Content-Type: application/json');
        echo json_encode(['result' => $kelurahan]);
    }
    public function test()
    {
        $q = $this->input->get('q');

        $this->db->insert('code', ['text' => $q]);
    }
}
        
    /* End of file  Dashboard.php */
        
                            