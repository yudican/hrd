<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Darurat_models extends CI_Model {

	public function store($id=null)
	{
		$data = [
	        'darurat_satu_nama'		=> $this->input->post('darurat_satu_nama', TRUE),
	        'darurat_satu_pekerjaan' 	=> $this->input->post('darurat_satu_pekerjaan',TRUE),
	        'darurat_satu_bidang_jabatan' 		=> $this->input->post('darurat_satu_bidang_jabatan', TRUE),
	        'darurat_satu_alamat' 		=> $this->input->post('darurat_satu_alamat', TRUE),
	        'darurat_satu_hp' 		=> $this->input->post('darurat_satu_hp', TRUE),
	        'darurat_dua_nama' 		=> $this->input->post('darurat_dua_nama', TRUE),
	        'darurat_dua_pekerjaan' 		=> $this->input->post('darurat_dua_pekerjaan', TRUE),
	        'darurat_dua_bidang_jabatan' 		=> $this->input->post('darurat_dua_bidang_jabatan', TRUE),
	        'darurat_dua_alamat' 		=> $this->input->post('darurat_dua_alamat', TRUE),
	        'darurat_dua_hp' 		=> $this->input->post('darurat_dua_hp', TRUE)
		];

		if (empty($id)) {
			return $this->db->insert('biodata_darurat', $data);
		}else{
			return $this->db->update('biodata_darurat', $data,['darurat_nik' => $id]);
		}
	}
	
	public function getDaruratData($id=null)
	{
		if (empty($id)) {
			return $this->db->get('biodata_darurat')->result_array();
		}else{
			return $this->db->get_where('biodata_darurat', ['darurat_nik' => $id])->row();
		}
	}
}

/* End of file Ktp_models.php */
/* Location: ./application/models/Ktp_models.php */