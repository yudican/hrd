<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengiriman_models extends CI_Model {

	public function updateStore($data,$id)
	{
		return $this->db->update('tabel_pengiriman', $data,['pengiriman_id' => $id]);
	}
	public function cetak($id)
	{
		$this->db->join('biodata_interview', 'biodata_interview.interview_nik = biodata_ktp.biodata_nik', 'left');
		$this->db->join('biodata_keluarga', 'biodata_keluarga.keluarga_nik = biodata_ktp.biodata_nik', 'left');
		$this->db->join('tabel_pengiriman', 'tabel_pengiriman.pengiriman_nik = biodata_ktp.biodata_nik', 'left');
		$this->db->join('bagian', 'bagian.id_bagian = tabel_pengiriman.pengiriman_bagian', 'left');
		$this->db->join('tabel_cabang', 'tabel_cabang.id_cabang = tabel_pengiriman.pengiriman_cabang', 'left');
		return $this->db->get_where('biodata_ktp',['biodata_ktp.biodata_nik' => $id])->row_array();
	}

}

/* End of file Pengiriman_models.php */
/* Location: ./application/models/Pengiriman_models.php */