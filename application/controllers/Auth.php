<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{


    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header');
            $this->load->view('auth/login');
          
        } else {
            //validasi success
            $this->_login();
        }
    }
    private function _login()
    {
        $username= $this->input->post('username');
        $password = md5($this->input->post('password'));
     

        $user = $this->db->get_where('user', ['username' => $username])->row_array();


        if ($user) {
                if ($password == $user['password']) {
                    $data = [
                        // 'level' => $user['level'],
                        'username' => $user['username'],
                        // 'nama' => $user['nama'],
                        'email' => $user['email']
                        // 'jabatan' =>  $user['jabatan'],
                        // 'divvv' =>  $user['divvv']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['level'] == 'admin') {
                        redirect('admin');
                    } else {
                        redirect('staff');
                    }
                } else {

                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Password Salah
          </div>');
                    redirect('auth');
                }
          
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!
      </div>');
            redirect('auth');
        }
    }
    public function registration(){
        $this->form_validation->set_rules('username', 'Name', 'required|trim');
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|valid_email|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password doesnt match!',
            'min_length' => 'Password too short!',

        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[3]|matches[password1]');

        if ($this->form_validation->run() == false) {
       
            $this->load->view('templates/header');
            $this->load->view('auth/regist');
        }else{
            $email = $this->input->post('email', true);
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => password_hash($this->input->post('password1', true), PASSWORD_DEFAULT),
                'email' => htmlspecialchars($email),
                'nama' => 'defaul1t.jpg',
                'jabatan' => 'Officer/Staff',
                'level' => 'admin',
                'divvv' => 'IT'
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please Activate your account!
</div>');
            redirect('auth');
        }

    }

    public function logout()
    {

        $this->session->unset_userdata('username');
        $this->session->unset_userdata('email');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! You have been logged out!
</div>');
        redirect('auth');
    }
  
}
