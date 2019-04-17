<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wali_models extends CI_Model {

	public function store($id=null)
	{
		$data = [
	        'wali_ayah_nama'		=> $this->input->post('wali_ayah_nama', TRUE),
	        'wali_ayah_umur' 	=> $this->input->post('wali_ayah_umur',TRUE),
	        'wali_ayah_alamat' 		=> $this->input->post('wali_ayah_alamat', TRUE),
	        'wali_ayah_pekerjaan' 		=> $this->input->post('wali_ayah_pekerjaan', TRUE),
	        'wali_ayah_bidang_jabatan' 		=> $this->input->post('wali_ayah_bidang_jabatan', TRUE),
	        'wali_ayah_hp' 		=> $this->input->post('wali_ayah_hp', TRUE),
	       	'wali_ibu_nama'		=> $this->input->post('wali_ibu_nama', TRUE),
	        'wali_ibu_umur' 	=> $this->input->post('wali_ibu_umur',TRUE),
	        'wali_ibu_alamat' 		=> $this->input->post('wali_ibu_alamat', TRUE),
	        'wali_ibu_pekerjaan' 		=> $this->input->post('wali_ibu_pekerjaan', TRUE),
	        'wali_ibu_bidang_jabatan' 		=> $this->input->post('wali_ibu_bidang_jabatan', TRUE),
	        'wali_ibu_hp' 		=> $this->input->post('wali_ibu_hp', TRUE)
		];

		if (empty($id)) {
			return $this->db->insert('biodata_wali', $data);
		}else{
			return $this->db->update('biodata_wali', $data,['wali_nik' => $id]);
		}
	}
	
	public function getWaliData($id=null)
	{
		if (empty($id)) {
			return $this->db->get('biodata_wali')->result_array();
		}else{
			return $this->db->get_where('biodata_wali', ['wali_nik' => $id])->row();
		}
	}
}

/* End of file Ktp_models.php */
/* Location: ./application/models/Ktp_models.php */