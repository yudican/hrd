<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kehamilan_models extends CI_Model {

	public function store($id=null)
	{
		$data = [
	        'kehamilan_status'			=> $this->input->post('kehamilan_status', TRUE),
	        'kehamilan_usia' 			=> $this->input->post('kehamilan_usia',TRUE),
	        'kehamilan_tanggal' 		=> $this->input->post('kehamilan_tanggal', TRUE),
	        'perkawinan_status' 		=> $this->input->post('perkawinan_status', TRUE),
	        'perkawinan_sejak' 			=> $this->input->post('perkawinan_sejak', TRUE)
		];

		if (empty($id)) {
			return $this->db->insert('biodata_kehamilan', $data);
		}else{
			return $this->db->update('biodata_kehamilan', $data,['kehamilan_nik' => $id]);
		}
	}
	
	public function getKehamilanData($id=null)
	{
		if (empty($id)) {
			return $this->db->get('biodata_kehamilan')->result_array();
		}else{
			return $this->db->get_where('biodata_kehamilan', ['kehamilan_nik' => $id])->row();
		}
	}
}

/* End of file Ktp_models.php */
/* Location: ./application/models/Ktp_models.php */