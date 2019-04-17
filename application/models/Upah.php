<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Upah extends CI_Model {
                        
    public function getUpah($id=null){
                            
           if (empty($id)) {
              return $this->db->get('tabel_upah')->result_array();
           } else{
              return $this->db->get_where('tabel_upah',['id_upah' => $id])->row();
           }                       
    }
    public function inputUpah($id = null)
    {
        $data = [
           'wilayah_upah' => $this->input->post('wilayah_upah', true),
           'jumlah_upah' => $this->input->post('jumlah_upah', true),
           'jht_prsh_tk' => $this->input->post('jht_prsh_tk', true),
           'jkk_tk' => $this->input->post('jkk_tk', true),
           'jht_tk' => $this->input->post('jht_tk', true),
           'jp_prsh_tk' => $this->input->post('jp_prsh_tk', true),
           'jkm_tk' => $this->input->post('jkm_tk', true),
           'jp_tk' => $this->input->post('jp_tk', true),
           'kes_prsh' => $this->input->post('kes_prsh', true),
           'kes' => $this->input->post('kes', true),
           'bulan_upah' => $this->input->post('bulan_upah', true)
        ];

        // insert jika id kosong
        if (empty($id)) {
            $query = $this->db->insert('tabel_upah',$data);

        }else{
            $query = $this->db->update('tabel_upah',$data,['id_upah' => $id]);
        }
        return $query;
    }
                            
                        
}
                        
/* End of file Master_model.php */
    
                        