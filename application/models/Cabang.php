<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Cabang extends CI_Model {
                        
    public function getCabang($id=null){
                            
           if (empty($id)) {
              return $this->db->get('tabel_cabang')->result_array();
           } else{
              return $this->db->get_where('tabel_cabang',['id_cabang' => $id])->row();
           }                       
    }
    public function inputCabang($id = null)
    {
        $kategori = $this->input->post('kategori_cabang', true);
        $data = [
           'id_cabang' => $this->kategori($kategori),
           'kategori_cabang' => $kategori,
           'nama_cabang' => $this->input->post('nama_cabang', true),
           'kepala_toko' => $this->input->post('kepala_toko', true),
           'personalia_satu' => $this->input->post('personalia_satu', true),
           'personalia_dua' => $this->input->post('personalia_dua', true),
           'personalia_tiga' => $this->input->post('personalia_tiga', true),
           'alamat' => $this->input->post('alamat', true),
           'nomor_hp_cabang' => $this->input->post('nomor_hp_cabang', true),
           'jenis_upah' => $this->input->post('jenis_upah', true),
           'npwp_cabang' => $this->input->post('npwp_cabang', true)
        ];

        // insert jika id kosong
        if (empty($id)) {
            $query = $this->db->insert('tabel_cabang',$data);

        }else{
            $query = $this->db->update('tabel_cabang',$data,['id_cabang' => $id]);
        }
        return $query;
    }
    
    public function kategori($value)
    {
       $val = $this->db
                    ->order_by('id_cabang','DESC')
                    ->get_where('tabel_cabang',['kategori_cabang' => $value])->row();
        $hasil = $val->id_cabang+1;

        return $hasil;
    }
                        
}
                        
/* End of file Master_model.php */
    
                        