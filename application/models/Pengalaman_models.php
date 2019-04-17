<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengalaman_models extends CI_Model {

	public function store($id=null)
	{
		$data = [
			'pengalaman_nik'					=> $this->input->post('pengalaman_nik', TRUE),
	        'pengalaman_perusahaan'				=> $this->input->post('pengalaman_perusahaan', TRUE),
	        'pengalaman_mulai_kerja' 			=> $this->input->post('pengalaman_mulai_kerja',TRUE),
	        'pengalaman_akhir_kerja' 			=> $this->input->post('pengalaman_akhir_kerja', TRUE),
	        'pengalaman_alamat_perusahaan' 		=> $this->input->post('pengalaman_alamat_perusahaan', TRUE),
	        'pengalaman_kota_perusahaan' 		=> $this->input->post('pengalaman_kota_perusahaan', TRUE),
	        'pengalaman_propinsi_perusahaan' 	=> $this->input->post('pengalaman_propinsi_perusahaan', TRUE),
	        'pengalaman_telpon_perusahaan' 		=> $this->input->post('pengalaman_telpon_perusahaan', TRUE),
	        'pengalaman_bidang_kerja' 			=> $this->input->post('pengalaman_bidang_kerja', TRUE),
	        'pengalaman_jabatan_kerja' 			=> $this->input->post('pengalaman_jabatan_kerja', TRUE),
	        'pengalaman_upah' 					=> $this->input->post('pengalaman_upah', TRUE),
	        'pengalaman_nama_atasan' 			=> $this->input->post('pengalaman_nama_atasan', TRUE),
	        'pengalaman_jabatan_atasan' 		=> $this->input->post('pengalaman_jabatan_atasan', TRUE),
	        'pengalaman_uraian_kerja' 			=> $this->input->post('pengalaman_uraian_kerja', TRUE),
	        'pengalaman_alasan_berhenti' 		=> $this->input->post('pengalaman_alasan_berhenti', TRUE)
		];

		if (empty($id)) {
			return $this->db->insert('biodata_pengalaman', $data);
		}else{
			return $this->db->update('biodata_pengalaman', $data,['pengalaman_id' => $id]);
		}
	}
	
	public function getPengalamanData($id=null,$column)
	{
		if (empty($id)) {
			return $this->db->get('biodata_pengalaman');
		}else{
			return $this->db->get_where('biodata_pengalaman', [$column => $id]);
		}
	}
}

/* End of file Ktp_models.php */
/* Location: ./application/models/Ktp_models.php */