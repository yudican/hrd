<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Master_kategori_bagian extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->library(array('datatables','form_validation'));
        $this->load->helper('input');
        
        if (!$this->session->userdata('is_login') == true) {
            redirect('login');
        }
    }
    public function data_kategori()
    {
        $data = [
            'title' => 'Data Kategori Bagian',
            'isi' => 'master/master_kategori_bagian',
            
        ];
        $this->load->view('index', $data);
    }
    public function getKategori()
    {
        $this->datatables->select('kategori_id,kategori_nama')
                ->unset_column('kategori_id')
                ->from('kategori_bagian')
                ->add_column('nomor','1')
                ->add_column('actions', '<a href="javascript:void(0);" class="edit_record btn btn-info btn-sm" data-id="$1" data-nama="$2" data-jumlah="$3"><i class="fa fa-edit"></i></a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-sm" data-id="$1"><i class="fa fa-trash"></i></a>','kategori_id,kategori_nama,nomor,actions');

        echo $this->datatables->generate('json','');
    }

    public function input()
    {
    	$data = array('success' => false,'message' => array());
        $this->form_validation->set_rules('kategori_nama', 'Nama kategori', 'required');
        $this->form_validation->set_error_delimiters('<small class="text-danger">','</small>');

        if ($this->form_validation->run() == FALSE) {
            foreach ($_POST as $key => $value) {
            	$data['message'][$key] = form_error($key);
            }
            
        }else{
            $data['success'] = true;
             $request = [
             	'kategori_nama' => $this->input->post('kategori_nama',true)
             ];
             $this->db->insert('kategori_bagian', $request);
        }
        echo json_encode($data);
    }
    //updating data
    public function update($id)
    {
    	
    	$data = array('success' => false,'message' => array());
        $this->form_validation->set_rules('kategori_nama', 'Nama kategori', 'required');
        $this->form_validation->set_error_delimiters('<small class="text-danger">','</small>');

        if ($this->form_validation->run() == FALSE) {
            foreach ($_POST as $key => $value) {
            	$data['message'][$key] = form_error($key);
            }
            
        }else{
            $data['success'] = true;
             $request = [
             	'kategori_nama' => $this->input->post('kategori_nama',true)
             ];
             $this->db->update('kategori_bagian', $request,['kategori_id' => $id]);
        }
        echo json_encode($data);
    }
    //hapus data
    public function hapus($id)
    {
        $hapus = $this->db->delete('kategori_bagian',['kategori_id' => $id]);

        if ($hapus) {
            $data['success'] = true;
        }else{
            $data['success'] = false;
        }
    	 echo json_encode($data);
    }
}
