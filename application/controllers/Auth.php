<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }


    public function index()
    {
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('loginuser', $data);
        } else {
            //jika validasi berhasil
            $this->loginuser();
        }
    }

    public function loginuser()
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        //jika usernya ada
        if ($user) {
            if ($username == $user['username']) {
                if ($password == $user['password']) {
                    redirect('admin');
                } else {
                    echo 'Password yang anda masukkan salah';
                    redirect('auth');
                }
            } else {
                echo 'Username tidak terdaftar';
                redirect('auth');
            }
        }
    }
}

/* End of file Auth.php */
