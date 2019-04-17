<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_models extends CI_Model {

	public function store($id=null,$data)
	{
		return $this->db->update('biodata_profil', $data,['profil_nik' => $id]);
	}
	
	public function getProfileData($id=null)
	{
		if (empty($id)) {
			return $this->db->get('biodata_profil')->result_array();
		}else{
			return $this->db->get_where('biodata_profil', ['profil_nik' => $id])->row();
		}
	}
}

/* End of file Ktp_models.php */
/* Location: ./application/models/Ktp_models.php */