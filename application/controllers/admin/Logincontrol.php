<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Logincontrol extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("login_model");
        $this->load->library('form_validation');
    }
    public function index() 
    { 
        $this->load->view('admin/login'); 
    } 

    public function proses_login() 
    { 
        $user = $this->input->post('nama_admin'); 
        $pass = $this->input->post('password_admin'); 
        $login = $this->login_model->cek_user($user, $pass); 

       
        if (!empty($login)) { 
            // login berhasil 
            $this->session->set_userdata($login);  
            redirect(base_url('admin/products/total_data')); 
        } else { 
            // login gagal 
            $this->session->set_flashdata('gagal', 'Username atau Password Salah!!!!'); 
            redirect(base_url('admin/logincontrol')); 
        } 

        $this->load->view("admin/logincontrol");
    } 
    public function proses_ganti_password($id = null)
    {
        if (!isset($id)) redirect('admin/products/setting');
       
        $product = $this->login_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->cek_password();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["product"] = $product->getById($id);
        if (!$data["product"]) show_404();
        
        $this->load->view("admin/editpassword", $data);
    }
}





    