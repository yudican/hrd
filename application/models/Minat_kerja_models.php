<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Minat_kerja_models extends CI_Model {

	public function store($id=null)
	{
		$data = [
			'minat_tujuan'		=> $this->input->post('minat_tujuan', TRUE),
	        'minat_upah'		=> $this->input->post('minat_upah', TRUE),
	        'minat_keahlian' 	=> $this->input->post('minat_keahlian',TRUE),
		];

		if (empty($id)) {
			return $this->db->insert('biodata_minat', $data);
		}else{
			return $this->db->update('biodata_minat', $data,['minat_nik' => $id]);
		}
	}
	
	public function getMinatData($id=null)
	{
		if (empty($id)) {
			return $this->db->get('biodata_minat')->result_array();
		}else{
			return $this->db->get_where('biodata_minat', ['minat_nik' => $id])->row();
		}
	}
}

/* End of file Ktp_models.php */
/* Location: ./application/models/Ktp_models.php */