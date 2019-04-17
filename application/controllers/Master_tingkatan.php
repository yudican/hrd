<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Master_tingkatan extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->model(array('Cabang' => 'master','Upah' => 'upah'));
        $this->load->library(array('datatables','form_validation'));
        $this->load->helper('input');
        
        if (!$this->session->userdata('is_login') == true) {
            redirect('login');
        }
    }
    public function data_tingkatan()
    {
        $data = [
            'title' => 'Data Tingkatan Upah',
            'isi' => 'master/master_tingkatan',
            
        ];
        $this->load->view('index', $data);
    }
    public function getTingkatan()
    {
        $this->datatables->select('tingkatan_id,tingkatan_nama,tingkatan_jumlah')
                ->unset_column('tingkatan_id')
                ->from('tingkatan_upah')
                ->add_column('nomor','1')
                ->add_column('actions', '<a href="javascript:void(0);" class="edit_record btn btn-info btn-sm" data-id="$1" data-nama="$2" data-jumlah="$3"><i class="fa fa-edit"></i></a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-sm" data-id="$1"><i class="fa fa-trash"></i></a>','tingkatan_id,tingkatan_nama,tingkatan_jumlah,nomor,actions');

        echo $this->datatables->generate('json','');
    }

    public function input()
    {
    	$data = array('success' => false,'message' => array());
        $this->form_validation->set_rules('tingkatan_nama', 'Nama Tingkatan', 'required');
        $this->form_validation->set_rules('tingkatan_jumlah', 'Jumlah', 'required');
        $this->form_validation->set_error_delimiters('<small class="text-danger">','</small>');

        if ($this->form_validation->run() == FALSE) {
            foreach ($_POST as $key => $value) {
            	$data['message'][$key] = form_error($key);
            }
            
        }else{
            $data['success'] = true;
             $request = [
             	'tingkatan_nama' => $this->input->post('tingkatan_nama',true),
             	'tingkatan_jumlah' => $this->input->post('tingkatan_jumlah',true)
             ];
             $this->db->insert('tingkatan_upah', $request);
        }
        echo json_encode($data);
    }
    //updating data
    public function update($id)
    {
    	
    	$data = array('success' => false,'message' => array());
        $this->form_validation->set_rules('tingkatan_nama', 'Nama Tingkatan', 'required');
        $this->form_validation->set_rules('tingkatan_jumlah', 'Jumlah', 'required');
        $this->form_validation->set_error_delimiters('<small class="text-danger">','</small>');

        if ($this->form_validation->run() == FALSE) {
            foreach ($_POST as $key => $value) {
            	$data['message'][$key] = form_error($key);
            }
            
        }else{
            $data['success'] = true;
             $request = [
             	'tingkatan_nama' => $this->input->post('tingkatan_nama',true),
             	'tingkatan_jumlah' => $this->input->post('tingkatan_jumlah',true)
             ];
             $this->db->update('tingkatan_upah', $request,['tingkatan_id' => $id]);
        }
        echo json_encode($data);
    }
    //hapus data
    public function hapus($id)
    {
        $hapus = $this->db->delete('tingkatan_upah',['tingkatan_id' => $id]);

        if ($hapus) {
            $data['success'] = true;
        }else{
            $data['success'] = false;
        }
    	 echo json_encode($data);
    }
}
