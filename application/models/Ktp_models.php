<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ktp_models extends CI_Model {

	public function store($id=null)
	{
		$id_prov = $this->input->post('biodata_propinsi', TRUE);
		$id_kab = $this->input->post('biodata_kabupaten', TRUE);
		$id_kec = $this->input->post('biodata_kecamatan', TRUE);
		$id_kel = $this->input->post('biodata_kelurahan', TRUE);
		$nik = $this->input->post('biodata_nik', TRUE);
		$data = [
			'biodata_nik' 				=> $nik,
	        'biodata_nama'				=> $this->input->post('biodata_nama', TRUE),
	        'biodata_tempat_lahir' 		=> $this->input->post('biodata_tempat_lahir',TRUE),
	        'biodata_tanggal_lahir' 	=> $this->input->post('biodata_tanggal_lahir', TRUE),
	        'biodata_kelamin' 			=> $this->input->post('biodata_kelamin', TRUE),
	        'biodata_golongan_darah'	=> $this->input->post('biodata_golongan_darah',TRUE),
	        'biodata_alamat' 			=> $this->input->post('biodata_alamat', TRUE),
	        'biodata_rt' 				=> $this->input->post('biodata_rt', TRUE),
	        'biodata_rw' 				=> $this->input->post('biodata_rw', TRUE),
	        'biodata_propinsi' 			=> $this->getNamaTempat('provinces',$id_prov,'id'),
	        'biodata_kabupaten' 		=> $this->getNamaTempat('cities',$id_kab,'id'),
	        'biodata_kecamatan' 		=> $this->getNamaTempat('districts',$id_kec,'id'),
	        'biodata_kelurahan' 		=> $this->getNamaTempat('villages',$id_kel,'id'),
	        'biodata_agama' 			=> $this->input->post('biodata_agama', TRUE),
	        'biodata_status' 			=> $this->input->post('biodata_status', TRUE),
	        'biodata_pekerjaan' 		=> $this->input->post('biodata_pekerjaan', TRUE),
	        'biodata_kewarganegaraan' 	=> $this->input->post('biodata_kewarganegaraan', TRUE),
	        'biodata_berlaku_ktp' 		=> $this->input->post('biodata_berlaku_ktp', TRUE)
		];

		if (empty($id)) {
			$this->triggerBiodata($nik);
			return $this->db->insert('biodata_ktp', $data);
		}else{
			return $this->db->update('biodata_ktp', $data,['biodata_nik' => $id]);
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

	//trigger biodata ktp
	public function triggerBiodata($nik)
	{
		$this->db->insert('biodata_profil', ['profil_nik' => $nik]);
		$this->db->insert('biodata_referensi', ['referensi_nik' => $nik]);
		$this->db->insert('biodata_darurat', ['darurat_nik' => $nik]);
		$this->db->insert('biodata_domisili', ['domisili_nik' => $nik]);
		$this->db->insert('biodata_interview', ['interview_nik' => $nik]);
		$this->db->insert('biodata_kehamilan', ['kehamilan_nik' => $nik]);
		$this->db->insert('biodata_keluarga', ['keluarga_jenis' => 'KARYAWAN','keluarga_ktp' => $nik,'keluarga_nik' => $nik]);
		$this->db->insert('biodata_minat', ['minat_nik' => $nik]);
		$this->db->insert('biodata_orang_tua', ['ortu_nik' => $nik]);
		$this->db->insert('biodata_pendidikan', ['pendidikan_nik' => $nik]);
		$this->db->insert('biodata_pengalaman', ['pengalaman_nik' => $nik]);
		$this->db->insert('biodata_wali', ['wali_nik' => $nik]);
		return true;
	}

	public function getDataKtp($id=null)
	{
		if (empty($id)) {
			return $this->db->get('biodata_ktp')->result_array();
		}else{
			return $this->db->get_where('biodata_ktp', ['biodata_nik' => $id])->row();
		}
	}
	public function callback_tombol($value,$id){
            if ($value == 'Gagal Seleksi') {
                $result = '<a href="javascript:void(0);" class="detail_record btn btn-info btn-sm" data-id="'.$id.'"><i class="fa fa-folder-open"></i></a>';
            }else{
                $result = '<a href="javascript:void(0);" class="detail_record btn btn-info btn-sm" data-id="'.$id.'"><i class="fa fa-folder-open"></i></a>  <a href="javascript:void(0);" class="hapus_record btn btn-warning btn-sm" data-id="'.$id.'"><i class="fa fa-employee"></i></a>';
            }
            return $result;
        }
}

/* End of file Ktp_models.php */
/* Location: ./application/models/Ktp_models.php */