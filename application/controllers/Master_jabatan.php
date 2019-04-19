<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Master_Jabatan extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->library(array('datatables','form_validation'));
        $this->load->helper('input');
        
        if (!$this->session->userdata('is_login') == true) {
            redirect('login');
        }
    }
    public function data_jabatan()
    {
        $data = [
            'title' => 'Data Kategori Jabatan',
            'isi' => 'master/master_jabatan',
            
        ];
        $this->load->view('index', $data);
    }
    public function getJabatan()
    {
        $this->datatables->select('jabatan_id,jabatan_nama,jabatan_kode')
                ->unset_column('jabatan_id')
                ->from('jabatan')
                ->add_column('nomor','1')
                ->add_column('actions', '<a href="javascript:void(0);" class="edit_record btn btn-info btn-sm" data-id="$1" data-nama="$2" data-kode="$3"><i class="fa fa-edit"></i></a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-sm" data-id="$1"><i class="fa fa-trash"></i></a>','jabatan_id,jabatan_nama,jabatan_kode,nomor,actions');

        echo $this->datatables->generate('json','');
    }

    public function input()
    {
    	$data = array('success' => false,'message' => array());
        $this->form_validation->set_rules('jabatan_nama', 'Nama jabatan', 'required');
        $this->form_validation->set_error_delimiters('<small class="text-danger">','</small>');

        if ($this->form_validation->run() == FALSE) {
            foreach ($_POST as $key => $value) {
            	$data['message'][$key] = form_error($key);
            }
            
        }else{
            $data['success'] = true;
             $request = [
             	'jabatan_nama' => $this->input->post('jabatan_nama',true),
                'jabatan_kode' => $this->input->post('jabatan_kode',true)
             ];
             $this->db->insert('jabatan', $request);
        }
        echo json_encode($data);
    }
    //updating data
    public function update($id)
    {
    	
    	$data = array('success' => false,'message' => array());
        $this->form_validation->set_rules('jabatan_nama', 'Nama jabatan', 'required');
        $this->form_validation->set_error_delimiters('<small class="text-danger">','</small>');

        if ($this->form_validation->run() == FALSE) {
            foreach ($_POST as $key => $value) {
            	$data['message'][$key] = form_error($key);
            }
            
        }else{
            $data['success'] = true;
             $request = [
             	'jabatan_nama' => $this->input->post('jabatan_nama',true),
                'jabatan_kode' => $this->input->post('jabatan_kode',true)
             ];
             $this->db->update('jabatan', $request,['jabatan_id' => $id]);
        }
        echo json_encode($data);
    }
    //hapus data
    public function hapus($id)
    {
        $hapus = $this->db->delete('jabatan',['jabatan_id' => $id]);

        if ($hapus) {
            $data['success'] = true;
        }else{
            $data['success'] = false;
        }
    	 echo json_encode($data);
    }
}
