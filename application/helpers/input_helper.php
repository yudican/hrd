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
}
