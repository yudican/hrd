<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Susunan_anak_models extends CI_Model {

	public function store($id=null)
	{
		$data = [
	        'anak_nama'				=> $this->input->post('anak_nama', TRUE),
	        'anak_alamat' 			=> $this->input->post('anak_alamat',TRUE),
	        'anak_hp' 				=> $this->input->post('anak_hp', TRUE),
	        'anak_pekerjaan' 		=> $this->input->post('anak_pekerjaan', TRUE),
	        'pasangan_nama'			=> $this->input->post('pasangan_nama', TRUE),
	        'pasangan_alamat' 		=> $this->input->post('pasangan_alamat',TRUE),
	        'pasangan_hp' 			=> $this->input->post('pasangan_hp', TRUE),
	        'pasangan_pekerjaan'	=> $this->input->post('pasangan_pekerjaan', TRUE),
	        'anak_nik'				=> $this->input->post('anak_nik', TRUE)
		];

		if (empty($id)) {
			return $this->db->insert('biodata_anak', $data);
		}else{
			return $this->db->update('biodata_anak', $data,['anak_nik' => $id]);
		}
	}
	
	public function getAnakData($id=null)
	{
		return $this->db->get_where('biodata_anak', ['anak_nik' => $id]);
	}
}

/* End of file Ktp_models.php */
/* Location: ./application/models/Ktp_models.php */