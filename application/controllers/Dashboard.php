<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Dashboard extends CI_Controller {


    public function __construct() {
        parent:: __construct();
        $this->load->model('Login_model','login');
        $this->load->helper('input');
        if (!$this->session->userdata('is_login') == true) {
            redirect('login');
        }
    }

    public function index()
    {
        $data = [
            'title' => 'dashboard',
            'isi' => 'dashboard'
        ];
        $this->load->view('index', $data);
    }
    public function cek()
    {
       $data = array(
            array(
                'nama' => 'satu',
                'nama2' => 'dua'
            ),
             array(
                'nama' => 'satu',
                'form2' => 'dua'
            )
       );
       foreach ($data as $tas) {
          echo $tas['nama'];
       }
    }
        
}
        
    /* End of file  Dashboard.php */
        
                            