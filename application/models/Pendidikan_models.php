<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendidikan_models extends CI_Model {

	public function store($id=null)
	{
		$data = [
	        'sd_nama'			=> $this->input->post('sd_nama', TRUE),
	        'sd_kota' 			=> $this->input->post('sd_kota',TRUE),
	        'sd_mulai' 			=> $this->input->post('sd_mulai', TRUE),
	        'sd_akhir' 			=> $this->input->post('sd_akhir', TRUE),
	        'smp_nama' 			=> $this->input->post('smp_nama', TRUE),
	        'smp_kota' 			=> $this->input->post('smp_kota', TRUE),
	        'smp_mulai' 		=> $this->input->post('smp_mulai', TRUE),
	        'smp_akhir' 		=> $this->input->post('smp_akhir', TRUE),
	        'sma_nama' 			=> $this->input->post('sma_nama', TRUE),
	        'sma_kota' 			=> $this->input->post('sma_kota', TRUE),
	        'sma_mulai' 		=> $this->input->post('sma_mulai', TRUE),
	        'sma_akhir' 		=> $this->input->post('sma_akhir', TRUE),
	        'sarjana_jenis' 	=> $this->input->post('sarjana_jenis', TRUE),
	        'sarjana_nama' 		=> $this->input->post('sarjana_nama', TRUE),
	        'sarjana_fakultas' 	=> $this->input->post('sarjana_fakultas', TRUE),
	        'sarjana_jurusan' 	=> $this->input->post('sarjana_jurusan', TRUE),
	        'sarjana_kota' 		=> $this->input->post('sarjana_kota', TRUE),
	        'sarjana_mulai' 	=> $this->input->post('sarjana_mulai', TRUE),
	        'sarjana_akhir' 	=> $this->input->post('sarjana_akhir', TRUE),
	        'sarjana_ipk' 		=> $this->input->post('sarjana_ipk', TRUE),
		];
		if (empty($id)) {
			return $this->db->insert('biodata_pendidikan', $data);
		}else{
			return $this->db->update('biodata_pendidikan', $data,['pendidikan_nik' => $id]);
		}
	}
	
	public function getPendidikanData($id=null)
	{
		if (empty($id)) {
			return $this->db->get('biodata_pendidikan')->result_array();
		}else{
			return $this->db->get_where('biodata_pendidikan', ['pendidikan_nik' => $id])->row();
		}
	}
}

/* End of file Ktp_models.php */
/* Location: ./application/models/Ktp_models.php */