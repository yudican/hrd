<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ortu_models extends CI_Model {

	public function store($id=null)
	{
		$data = [
	        'ortu_ayah_nama'				=> $this->input->post('ortu_ayah_nama', TRUE),
	        'ortu_ayah_status' 				=> $this->input->post('ortu_ayah_status',TRUE),
	        'ortu_ayah_umur' 				=> $this->input->post('ortu_ayah_umur', TRUE),
	        'ortu_ayah_alamat' 				=> $this->input->post('ortu_ayah_alamat', TRUE),
	        'ortu_ayah_pekerjaan'			=> $this->input->post('ortu_ayah_pekerjaan', TRUE),
	        'ortu_ayah_bidang_jabatan' 		=> $this->input->post('ortu_ayah_bidang_jabatan',TRUE),
	        'ortu_ayah_hp' 					=> $this->input->post('ortu_ayah_hp', TRUE),
	        'ortu_ibu_nama'					=> $this->input->post('ortu_ibu_nama', TRUE),
	        'ortu_ibu_status' 				=> $this->input->post('ortu_ibu_status',TRUE),
	        'ortu_ibu_umur' 				=> $this->input->post('ortu_ibu_umur', TRUE),
	        'ortu_ibu_alamat' 				=> $this->input->post('ortu_ibu_alamat', TRUE),
	        'ortu_ibu_pekerjaan'			=> $this->input->post('ortu_ibu_pekerjaan', TRUE),
	        'ortu_ibu_bidang_jabatan' 		=> $this->input->post('ortu_ibu_bidang_jabatan',TRUE),
	        'ortu_ibu_hp' 					=> $this->input->post('ortu_ibu_hp', TRUE)
	       
		];

		if (empty($id)) {
			return $this->db->insert('biodata_orang_tua', $data);
		}else{
			return $this->db->update('biodata_orang_tua', $data,['ortu_nik' => $id]);
		}
	}
	
	public function getOrtuData($id=null)
	{
		if (empty($id)) {
			return $this->db->get('biodata_orang_tua')->result_array();
		}else{
			return $this->db->get_where('biodata_orang_tua', ['ortu_nik' => $id])->row();
		}
	}
}

/* End of file Ktp_models.php */
/* Location: ./application/models/Ktp_models.php */