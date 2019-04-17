<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Login extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->model('Login_model','login');
        
    }

    public function index()
    {
        if ($this->session->userdata('is_login') == true) {
            redirect('dashboard');
        }
        $this->load->view('login');
    }

    public function login_proses()
    {
        if ($this->session->userdata('is_login') == true) {
            redirect('dashboard');
        }
       
       $this->form_validation->set_rules('email', 'email', 'required|trim');
       $this->form_validation->set_rules('password', 'password', 'required|trim');

       if ($this->form_validation->run() ==  false) {
            $this->load->view('login');
       }else{
            $email = $this->input->post('email',true);
            $password = $this->input->post('password',true);

            $cek = $this->login->cek_user($email);
            if ($cek->num_rows() > 0) {
                $data = $cek->row();
               if(password_verify($password,$data->password)){
                   $userdata['id_user'] = $data->id_user;
                   $userdata['is_login'] = true;
                   $userdata['nama'] = $data->nama;
                   $userdata['level'] = $data->level;

                   $this->session->set_userdata($userdata);
                   $this->session->set_flashdata('pesan','login berhasil');
                   redirect('dashboard');
               }
            }else{
                $this->session->set_flashdata('pesan','login gagal');
                redirect('login');
            }

       }
    }
    public function logout()
    {
        $data = ['id_user','is_login','nama','level'];

        $this->session->set_userdata($data);
        $this->session->sess_destroy();
        $this->session->set_flashdata('pesan','logout berhasil');
        redirect('dashboard');
    }
        
}
        
    /* End of file  Login.php */
        
                            