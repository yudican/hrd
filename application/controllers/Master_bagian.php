<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Master_bagian extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->library(array('datatables','form_validation'));
        $this->load->helper('input');
        
        if (!$this->session->userdata('is_login') == true) {
            redirect('login');
        }
    }
    public function data_bagian()
    {
        $data = [
            'title' => 'Data Bagian',
            'isi' => 'master/master_bagian',
            'kategori_bagian' => $this->db->get('kategori_bagian')->result()
            
        ];
        $this->load->view('index', $data);
    }
    public function getBagian()
    {
    	if (!$this->input->is_ajax_request()) {
    		exit('No direct script access allowed');
    	}	
        $this->datatables->select('id_bagian,nama_bagian,kategori_bagian,kategori_nama')
                ->unset_column('id_bagian')
                ->unset_column('kategori_bagian')
                ->join('kategori_bagian','kategori_bagian.kategori_id=bagian.kategori_bagian','left')
                ->from('bagian')
                ->add_column('nomor','1')
                ->add_column('actions', '<a href="javascript:void(0);" class="edit_record btn btn-info btn-sm" data-id="$1" data-nama="$2" data-kategori="$3"><i class="fa fa-edit"></i></a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-sm" data-id="$1"><i class="fa fa-trash"></i></a>','id_bagian,nama_bagian,kategori_bagian,kategori_nama,nomor,actions');

        echo $this->datatables->generate('json','');
    }

    public function input()
    {
    	if (!$this->input->is_ajax_request()) {
    		exit('No direct script access allowed');
    	}
    	$data = array('success' => false,'message' => array());
        $this->form_validation->set_rules('nama_bagian', 'Nama bagian', 'required');
        $this->form_validation->set_rules('kategori_bagian', 'Katgori bagian', 'required');
        $this->form_validation->set_error_delimiters('<small class="text-danger">','</small>');

        if ($this->form_validation->run() == FALSE) {
            foreach ($_POST as $key => $value) {
            	$data['message'][$key] = form_error($key);
            }
            
        }else{
            $data['success'] = true;
             $request = [
             	'nama_bagian' => $this->input->post('nama_bagian',true),
                'kategori_bagian' => $this->input->post('kategori_bagian',true)
             ];
             $this->db->insert('bagian', $request);
        }
        echo json_encode($data);
    }
    //updating data
    public function update($id)
    {
    	if (!$this->input->is_ajax_request()) {
    		exit('No direct script access allowed');
    	}
    	$data = array('success' => false,'message' => array());
        $this->form_validation->set_rules('nama_bagian', 'Nama bagian', 'required');
        $this->form_validation->set_rules('kategori_bagian', 'Katgori bagian', 'required');
        $this->form_validation->set_error_delimiters('<small class="text-danger">','</small>');

        if ($this->form_validation->run() == FALSE) {
            foreach ($_POST as $key => $value) {
            	$data['message'][$key] = form_error($key);
            }
            
        }else{
            $data['success'] = true;
             $request = [
             	'nama_bagian' => $this->input->post('nama_bagian',true),
                'kategori_bagian' => $this->input->post('kategori_bagian',true)
             ];
             $this->db->update('bagian', $request,['id_bagian' => $id]);
        }
        echo json_encode($data);
    }
    //hapus data
    public function hapus($id)
    {
    	if (!$this->input->is_ajax_request()) {
    		exit('No direct script access allowed');
    	}
        $hapus = $this->db->delete('bagian',['id_bagian' => $id]);

        if ($hapus) {
            $data['success'] = true;
        }else{
            $data['success'] = false;
        }
    	 echo json_encode($data);
    }
}
