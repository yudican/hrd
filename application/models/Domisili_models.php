<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Domisili_models extends CI_Model {

	public function store($id=null)
	{
		$id_prov = $this->input->post('domisili_propinsi', TRUE);
		$id_kab = $this->input->post('domisili_kabupaten', TRUE);
		$id_kec = $this->input->post('domisili_kecamatan', TRUE);
		$id_kel = $this->input->post('domisili_kelurahan', TRUE);
		$data = [
	        'domisili_alamat'			=> $this->input->post('domisili_alamat', TRUE),
	        'domisili_rt'		 		=> $this->input->post('domisili_rt',TRUE),
	        'domisili_rw' 				=> $this->input->post('domisili_rw', TRUE),
	        'domisili_propinsi' 		=> $this->getNamaTempat('provinces',$id_prov,'id'),
	        'domisili_kabupaten' 		=> $this->getNamaTempat('cities',$id_kab,'id'),
	        'domisili_kecamatan' 		=> $this->getNamaTempat('districts',$id_kec,'id'),
	        'domisili_kelurahan' 		=> $this->getNamaTempat('villages',$id_kel,'id'),
	        'domisili_tinggal_dengan' 	=> $this->input->post('domisili_tinggal_dengan', TRUE),
	        'domisili_hubungan'			=> $this->input->post('domisili_hubungan', TRUE),
	        'domisili_jenis' 			=> $this->input->post('domisili_jenis',TRUE),
	        'domisili_lama_tinggal' 	=> $this->input->post('domisili_lama_tinggal', TRUE),
	        'domisili_telpon' 			=> $this->input->post('domisili_telpon', TRUE)
		];

		if (empty($id)) {
			return $this->db->insert('biodata_domisili', $data);
		}else{
			return $this->db->update('biodata_domisili', $data,['domisili_nik' => $id]);
		}
	}
	
	public function getDomisiliData($id=null)
	{
		if (empty($id)) {
			return $this->db->get('biodata_domisili')->result_array();
		}else{
			return $this->db->get_where('biodata_domisili', ['domisili_nik' => $id])->row();
		}
	}

	public function getNamaTempat($table,$id,$kolom)
	{
		$row = $this->db->get_where($table, [$kolom => $id]);
		if ($row->num_rows() > 0) {
			$data = $row->row();
			return $data->name;
		}else{
			return $id;
		}
		
	}
}

/* End of file Ktp_models.php */
/* Location: ./application/models/Ktp_models.php */