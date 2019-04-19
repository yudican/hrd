<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Master_cabang extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->model(array('Cabang' => 'master','Upah' => 'upah'));
        $this->load->library('datatables');
        $this->load->helper('input');
        
        if (!$this->session->userdata('is_login') == true) {
            redirect('login');
        }
    }
    public function data_cabang()
    {
        $data = [
            'title' => 'Data Cabang',
            'isi' => 'master/master_cabang',
            
        ];
        $this->load->view('index', $data);
    }
    public function getCabang()
    {
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        }
        $this->datatables->select('id_cabang,kategori_cabang,nama_cabang,kepala_toko,personalia_satu,personalia_dua,personalia_tiga,alamat,nomor_hp_cabang,npwp_cabang,wilayah_upah')
                ->unset_column('id_cabang')
                
                ->from('tabel_cabang')
                ->join('tabel_upah','tabel_cabang.jenis_upah=tabel_upah.id_upah','left')
                ->add_column('personalia','')
                ->edit_column('personalia','$1','cabang(personalia_satu,personalia_dua,personalia_tiga)')
                ->edit_column('alamat','$1','cabangAlamat(alamat,nomor_hp_cabang)')
                ->add_column('actions', '<a href="javascript:void(0);" class="edit_record btn btn-info btn-sm" data-id="$1"><i class="fa fa-edit"></i></a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-sm" data-id="$1"><i class="fa fa-trash"></i></a>','id_cabang,kategori_cabang,nama_cabang,kepala_toko,personalia_satu,personalia_dua,personalia_tiga,alamat,nomor_hp_cabang,npwp_cabang,wilayah_upah,actions');

        echo $this->datatables->generate('json','');
    }

    public function cabang()
    {
        
        $id = $this->uri->segment(3);
        $url = $this->uri->segment(4);
        $this->form_validation->set_rules('kategori_cabang', 'Kategori Cabang', 'required');
        $this->form_validation->set_rules('nama_cabang', 'Nama Cabang', 'required');
        $this->form_validation->set_rules('jenis_upah', 'Jenis Upah', 'required');
        $this->form_validation->set_rules('npwp_cabang', 'NPWP Cabang', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data = [
                'title' => 'Data Cabang',
                'isi' => 'master/master_cabang_input',
                'upah' => $this->upah->getUpah(),
                'row' => $this->master->getCabang($id)
            ];
            $this->load->view('index', $data);
        }else{
            if ($url == 'update') {
                $input = $this->master->inputCabang($id);
            }else{
                $input = $this->master->inputCabang();
            }

            if ($input) {
                $this->session->set_flashdata('pesan', 'data cabang berhasil di simpan');
                redirect(base_url('master_cabang/data_cabang'));
            }else{
                $this->session->set_flashdata('error', 'data cabang gagal di simpan');
                redirect(base_url('master_cabang/data_cabang'));
            }
        }
    }
    //hapus data
    public function hapus($id)
    {
        $id = $this->uri->segment(3);
        $data = $this->uri->segment(4);
       
        $hapus = $this->db->delete('tabel_cabang',['id_cabang' => $id]);


        if ($hapus) {
            $this->session->set_flashdata('pesan', 'data '.$data.' berhasil di di hapus');
            redirect(base_url('master_cabang/'.$data));
        }else{
            $this->session->set_flashdata('error', 'data '.$data.' gagal di di hapus');
            redirect(base_url('master_cabang/'.$data));
        }
    
    }
}
