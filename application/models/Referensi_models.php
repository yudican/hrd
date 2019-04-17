<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Referensi_models extends CI_Model {

	public function store($id=null)
	{
		$data = [
	        'referensi_nama'		=> $this->input->post('referensi_nama', TRUE),
	        'referensi_hubungan' 	=> $this->input->post('referensi_hubungan',TRUE),
	        'referensi_bagian' 		=> $this->input->post('referensi_bagian', TRUE),
	        'referensi_cabang' 		=> $this->input->post('referensi_cabang', TRUE)
		];

		if (empty($id)) {
			return $this->db->insert('biodata_referensi', $data);
		}else{
			return $this->db->update('biodata_referensi', $data,['referensi_nik' => $id]);
		}
	}
	
	public function getReferensiData($id=null)
	{
		if (empty($id)) {
			return $this->db->get('biodata_referensi')->result_array();
		}else{
			return $this->db->get_where('biodata_referensi', ['referensi_nik' => $id])->row();
		}
	}
}

/* End of file Ktp_models.php */
/* Location: ./application/models/Ktp_models.php */