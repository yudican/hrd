<?php
if ( ! function_exists('get_value')){
    function get_select_value($id,$value,$table,$primary,$column){
        $ci =& get_instance();
        $ci->load->database();
        if (empty($id)) {
            return set_select($column, $value);
        }else{
            $row = $ci->db->get_where($table,[$primary => $id])->row();
            if (set_select($column, $value)) {
                return set_select($column, $value);
            }else if($row->$column == $value){
                return 'selected';
            }else{
                return '';
            }
        }
    }
}
if ( ! function_exists('tgl_indo')){
    function tgl_indo($tgl){
        return date('d-m-Y',strtotime($tgl));
    }
}

if ( ! function_exists('cabang')){
    function cabang($personalia1,$personalia2,$personalia3){
        $result = $personalia1.'<br>'.$personalia2.'<br>'.$personalia3;
        return $result;
    }
}

if ( ! function_exists('cabangAlamat')){
    function cabangAlamat($alamat,$telepon){
        $result = $alamat.'<br>'.'Telp : '.$telepon;
        return $result;
    }
}

if ( ! function_exists('tombolKembali')){
    function tombolKembali(){
        $url = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : '';
        return $url;
    }
}

if ( ! function_exists('get_value')){
    function get_value($column,$id=null,$table=null,$primary_column){
        $ci=& get_instance();
        
        if (set_value($column)) {
            $hasil = set_value($column);
        }else{
            $get = $ci->db->get_where($table,[$primary_column => $id])->row();
            if (isset($get->$column)) {
                $hasil = $get->$column;
            }else{
                $hasil = '';
            }
        }
        return $hasil;
    }
}

if ( ! function_exists('active_menu')){
    function active_menu($uri1=null,$uri2=null){
        $ci =& get_instance();
        if(empty($ci->uri->segment(2))){
            $menu = '';
        }
       
        if ($ci->uri->segment(1) == $uri1 && $ci->uri->segment(2) == $uri2) {
            $menu = 'active';
        }else{
            $menu = '';
        }
        return $menu;
    }
}

if ( ! function_exists('active_menu_open')){
    function active_menu_open($uri1=null){
        $ci =& get_instance();
        if ($ci->uri->segment(1) == $uri1) {
            $menu = 'menu-open';
        }else{
            $menu = '';
        }
        return $menu;
    }
}
if ( ! function_exists('format_uang')){
    function format_uang($nomor){
        $uang = 'Rp. '.number_format($nomor,2);
        return $uang;
    }
}
if ( ! function_exists('nomor_adm')){
    function nomor_adm($table,$colomn,$id=null)
    {
        $ci =& get_instance();

       if (empty($id)) {
           
            $get_no = $ci->db
                    ->order_by($colomn,'DESC')
                    ->get($table)->row();
        
            if (empty($get_no->$colomn)) {
                $nomor = '1';
            }else{
                $nomor = $get_no->$colomn+1;
            }
            return $nomor;
       }else{
             $get_no = $ci->db
                    ->order_by($colomn,'DESC')
                    ->get_where($table,['interview_nik' => $id])->row();
        
            if (empty($get_no->$colomn)) {
                $nomor = '1';
            }else{
                $nomor = $get_no->$colomn+1;
            }
            return $nomor;
       }
    }
    //menampilkan foto
    if ( ! function_exists('getFoto')){
        function getFoto($foto){
            if (empty($foto)) {
                $resultFoto = '<img class="img-fluid" src="'.base_url('foto/default.png').'" alt="" width="25px" height="30">';
            }else{
                $resultFoto = '<img class="img-fluid" src="'.base_url('foto/'.$foto).'" alt="" width="25px" height="30">';
            }
            return $resultFoto;
        }
    }
    if ( ! function_exists('statusGagal')){
        function statusGagal($value,$id){
            if ($value == 'Gagal Seleksi') {
                $result = '<a href="javascript:void(0);" class="detail_record btn btn-info btn-sm" data-id="'.$id.'"><i class="fa fa-folder-open"></i></a>';
            }else{
                $result = '<a href="javascript:void(0);" class="detail_record btn btn-info btn-sm" data-id="'.$id.'"><i class="fa fa-folder-open"></i></a>  <a href="javascript:void(0);" class="hapus_record btn btn-warning btn-sm" data-id="'.$id.'"><i class="fa fa-paper-plane"></i></a>';
            }
            return $result;
        }
    }
    //modals
    if ( ! function_exists('modal')){
        function modal($data,$modal_id,$modal_size = null){
            $content = (empty($modal_size)) ? 'modal__content' : '';
            $header = (empty($modal_size)) ? 'modal__header' : '';
            $footer = (empty($modal_size)) ? 'modal__footer' : '';
            $results = '';
            $results .= '<div class="modal fade bd-example-modal-lg" id="'.$modal_id.'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content '.$content.'">
                                  <div class="modal-header '.$header.'">
                                    <h5 class="modal-title" id="modal_title">Riwayat Pendidikan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body table-responsive">';
                                    $results .= '<form id="form_'.$modal_id.'" method="POST">
                                        <table class="table table-striped">';
                                            
                                            foreach ($data as $val) {
                                               $results .= ' <tr>
                                                                <td width="30%">'.$val['placeholder'].'</td>
                                                                <td><input type="text" class="form-control" name="'.$val['name'].'" placeholder="'.$val['placeholder'].'" id="'.$val['name'].'"></td>
                                                            </tr>';
                                            }
                                            
                            $results .= '</table>';
                            $results .= '</form>
                                  </div>
                                  <div class="modal-footer '.$footer.'">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button id="simpan" type="button" class="btn btn-primary ">Simpan</button>
                                  </div>
                                </div>
                              </div>
                            </div>';
            return $results;
        }
    }
}
