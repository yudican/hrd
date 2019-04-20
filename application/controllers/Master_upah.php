<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Master_upah extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->model('Upah','master');
        $this->load->library('datatables');
        $this->load->helper('input');
        
        if (!$this->session->userdata('is_login') == true) {
            redirect('login');
        }
    }
    
    public function data_upah()
    {
         $data = [
             'title' => 'Data Upah',
             'isi' => 'master/master_upah'
         ];
         $this->load->view('index', $data);
    }


    public function getUpah()
    {
        $this->datatables->select('id_upah,wilayah_upah,jumlah_upah,jht_prsh_tk,jkk_tk,jht_tk,jp_prsh_tk,jkm_tk,jp_tk,kes_prsh,kes,bulan_upah')
                ->unset_column('id_upah')
                ->from('tabel_upah')
                ->edit_column('bulan_upah','$1','tgl_indo(bulan_upah)')
                ->edit_column('jumlah_upah','$1','format_uang(jumlah_upah)')
                ->edit_column('jht_prsh_tk','$1','format_uang(jht_prsh_tk)')
                ->edit_column('jkk_tk','$1','format_uang(jkk_tk)')
                ->edit_column('jht_tk','$1','format_uang(jht_tk)')
                ->edit_column('jp_prsh_tk','$1','format_uang(jp_prsh_tk)')
                ->edit_column('jkm_tk','$1','format_uang(jkm_tk)')
                ->edit_column('jp_tk','$1','format_uang(jp_tk)')
                ->edit_column('kes_prsh','$1','format_uang(kes_prsh)')
                ->edit_column('kes','$1','format_uang(kes)')
                ->add_column('actions', '<a href="javascript:void(0);" class="edit_record btn btn-info btn-sm" data-id="$1"><i class="fa fa-edit"></i></a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-sm" data-id="$1"><i class="fa fa-trash"></i></a>','id_upah,wilayah_upah,jumlah_upah,jht_prsh_tk,jkk_tk,jht_tk,jp_prsh_tk,jkm_tk,jp_tk,kes_prsh,kes,bulan_upah,actions');
 
        echo $this->datatables->generate('json','');
    }

   
   
    public function input_upah()
    {
        $this->form_validation->set_rules('wilayah_upah', 'Wilayah UPah', 'required');
        $this->form_validation->set_rules('jumlah_upah', 'Jumlah Upah', 'required|numeric');
        $this->form_validation->set_rules('jht_prsh_tk', 'Pot. JHT Perusahaan', 'required|numeric');
        $this->form_validation->set_rules('jkk_tk', 'Pot. JKK', 'required|numeric');
        $this->form_validation->set_rules('jht_tk', 'Pot. JHT', 'required|numeric');
        $this->form_validation->set_rules('jp_prsh_tk', 'Pot. JP Perusahaan', 'required|numeric');
        $this->form_validation->set_rules('jkm_tk', 'Pot. JKM', 'required|numeric');
        $this->form_validation->set_rules('jp_tk', 'Pot. JP', 'required|numeric');
        $this->form_validation->set_rules('kes_prsh', 'Pot. Kesehatan Perusahaan', 'required|numeric');
        $this->form_validation->set_rules('kes', 'Pot. Kesehatan', 'required|numeric');
        $this->form_validation->set_rules('bulan_upah', 'Bulan Upah', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data = [
                'title' => 'input upah',
                'isi' => 'master/master_upah_input'
            ];
            $this->load->view('index', $data);
        }else{
            $input = $this->master->inputUpah();
            if ($input) {
                $this->session->set_flashdata('pesan', 'data upah berhasil di simpan');
                redirect(base_url('master/upah'));
            }else{
                $this->session->set_flashdata('error', 'data upah gagal di simpan');
                redirect(base_url('master/upah/input'));
            }
        }
    }
    //hapus data
    public function hapus()
    {
        $id = $this->uri->segment(3);
       
        $hapus = $this->db->delete('tabel_upah',['id_upah' => $id]);

        if ($hapus) {
            $this->session->set_flashdata('pesan', 'data upah berhasil di di hapus');
            redirect(base_url('master/upah'));
        }else{
            $this->session->set_flashdata('error', 'data upah gagal di di hapus');
            redirect(base_url('master/upah'));
        }
    
    }
    //update data
    public function update()
    {
        $id = $this->uri->segment(4);
        $url = $this->uri->segment(2);
        $this->form_validation->set_rules('wilayah_upah', 'wilayah_upah', 'required');
            $this->form_validation->set_rules('jumlah_upah', 'jumlah upah', 'required|numeric');
            $this->form_validation->set_rules('jht_prsh_tk', 'jht_prsh_tk', 'required|numeric');
            $this->form_validation->set_rules('jkk_tk', 'jkk_tk', 'required|numeric');
            $this->form_validation->set_rules('jht_tk', 'jht_tk', 'required|numeric');
            $this->form_validation->set_rules('jp_prsh_tk', 'jp_prsh_tk', 'required|numeric');
            $this->form_validation->set_rules('jkm_tk', 'jkm_tk', 'required|numeric');
            $this->form_validation->set_rules('jp_tk', 'jp_tk', 'required|numeric');
            $this->form_validation->set_rules('kes_prsh', 'kes_prsh', 'required|numeric');
            $this->form_validation->set_rules('kes', 'kes', 'required|numeric');
            $this->form_validation->set_rules('bulan_upah', 'bulan_upah', 'required');
    
            if ($this->form_validation->run() == FALSE) {
                $data = [
                    'title' => 'Update upah',
                    'isi' => 'master/master_upah_input',
                    'row' => $this->master->getUpah($id)
                ];
                $this->load->view('index', $data);
            }else{
                $update = $this->master->inputUpah($id);
                if ($update) {
                    $this->session->set_flashdata('pesan', 'data '.$url.' berhasil di update');
                    redirect(base_url('master/upah'));
                }else{
                    $this->session->set_flashdata('error', 'data '.$url.' gagal di update');
                    redirect(base_url('master/upah'));
                }
            }
        
    }
}
        
    /* End of file  Master.php */
        
                            