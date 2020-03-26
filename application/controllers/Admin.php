<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{


    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = "E-Support APH - Dashboard";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates/footer');
    }

    public function user()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['userlog'] = $this->db->get('user')->result_array();
        $data['title'] = "E-Support APH - User";
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/navbar');
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('admin/user', $data);
   
    }
    public function jabatan()
    {
       
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = "E-Support APH - Jabatan";
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/navbar');
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('admin/jabatan', $data);
    }
    public function divisi()
    {

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = "E-Support APH - Divisi";
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/navbar');
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('admin/divisi', $data);
    }
    public function lokasi()
    {

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = "E-Support APH - Lokasi";
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/navbar');
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('admin/lokasi', $data);
    }
    public function kategori()
    {

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = "E-Support APH - Kategori";
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/navbar');
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('admin/kategori', $data);
    }
    public function pegawai()
    {

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = "E-Support APH - Pegawai";
        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/navbar');
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('admin/pegawai', $data);
    }

    
}
