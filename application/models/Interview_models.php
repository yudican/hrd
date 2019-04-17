<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Interview_models extends CI_Model {

	public function store($id=null)
	{
		$data = [
	        'interview_tanggal'			=> $this->input->post('interview_tanggal', TRUE),
	        'interview_status' 			=> $this->input->post('interview_status',TRUE),
	        'interview_cabang' 			=> $this->input->post('interview_cabang', TRUE),
	        'nomor_adm' 				=> $this->input->post('nomor_adm', TRUE),
	        'interview_tanggal_input' 	=> $this->input->post('interview_tanggal_input', TRUE),
	        'interview_keterangan' 		=> $this->input->post('interview_keterangan', TRUE),
		];

		if (empty($id)) {
			return $this->db->insert('biodata_interview', $data);
		}else{
			return $this->db->update('biodata_interview', $data,['interview_nik' => $id]);
		}
	}
	
	public function getInterviewData($id=null)
	{
		if (empty($id)) {
			return $this->db->get('biodata_interview')->result_array();
		}else{
			return $this->db->get_where('biodata_interview', ['interview_nik' => $id])->row();
		}
	}
}

/* End of file Ktp_models.php */
/* Location: ./application/models/Ktp_models.php */