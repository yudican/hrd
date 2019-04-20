<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Dashboard extends CI_Controller {


    public function __construct() {
        parent:: __construct();
        $this->load->model('Login_model','login');
        $this->load->helper('input');
        $this->load->library('breadcrumb');
        if (!$this->session->userdata('is_login') == true) {
            redirect('login');
        }
    }

    public function index()
    {
        
        $data = [
            'title' => 'dashboard',
            'isi' => 'dashboard',
            'total' => $this->db->get_where('biodata_interview',['interview_status' => 'Cadangan'])->num_rows()
        ];
        $this->load->view('index', $data);
    }
    public function cek()
    {
          // echo $this->breadcrumb->add('Dashboard', base_url());
          // $this->breadcrumb->output();  

          
    }
        
}
        
    /* End of file  Dashboard.php */
        
                            