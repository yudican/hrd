<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keluarga_models extends CI_Model {

	public function store($id=null)
	{
		$data = [
	        'keluarga_jenis'		=> $this->input->post('keluarga_jenis', TRUE),
	        'keluarga_kk' 	=> $this->input->post('keluarga_kk',TRUE),
	        'keluarga_ktp' 		=> $this->input->post('keluarga_ktp', TRUE),
	        'keluarga_nama' 		=> $this->input->post('keluarga_nama', TRUE),
	        'keluarga_jenis_kelamin'		=> $this->input->post('keluarga_jenis_kelamin', TRUE),
	        'keluarga_tempat_lahir' 	=> $this->input->post('keluarga_tempat_lahir',TRUE),
	        'keluarga_tanggal_lahir' 		=> $this->input->post('keluarga_tanggal_lahir', TRUE),
	        'keluarga_pekerjaan' 		=> $this->input->post('keluarga_pekerjaan', TRUE),
	        'keluarga_hp'		=> $this->input->post('kehamilan_status', TRUE),
	        'keluarga_nik' 	=> $this->input->post('keluarga_nik',TRUE)
		];

		if (empty($id)) {
			return $this->db->insert('biodata_keluarga', $data);
		}else{
			return $this->db->update('biodata_keluarga', $data,['keluarga_nik' => $id]);
		}
	}
	
	public function getKeluargaData($id=null)
	{
		if (empty($id)) {
			return $this->db->get('biodata_keluarga');
		}else{
			return $this->db->get_where('biodata_keluarga', ['keluarga_nik' => $id]);
		}
	}
}

/* End of file Ktp_models.php */
/* Location: ./application/models/Ktp_models.php */