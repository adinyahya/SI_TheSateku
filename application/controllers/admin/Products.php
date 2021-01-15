<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("product_model");
        $this->load->model("login_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
		$this->load->view('admin/home');
    }

    public function add()
    {
        $product = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/insertpesanan");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/products');
       
        $product = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
          //  $this->load->view("admin/datapesanan");
        }

        $data["product"] = $product->getById($id);
        if (!$data["product"]) show_404();
        
        $this->load->view("admin/updatepesanan", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->product_model->delete($id)) {
            redirect(site_url('admin/products/datapesanan'));
        }
    }
    public function lunasket($id=null)
    {
        if (!isset($id)) redirect('admin/products');
       
        $product = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->editket();  
            $this->session->set_flashdata('success', 'Berhasil disimpan');
          //  $this->load->view("admin/datapesanan");
        }

        $data["viewdata"] = $product->getById($id);
        if (!$data["viewdata"]) show_404();
        
        $this->load->view("admin/datapesanan_get", $data);
    }
    public function kirimket($id=null)
    {
        if (!isset($id)) redirect('admin/products');
       
        $product = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->editkiriman();  
            $this->session->set_flashdata('success', 'Berhasil disimpan');
          //  $this->load->view("admin/datapesanan");
        }

        $data["viewdata"] = $product->getById($id);
        if (!$data["viewdata"]) show_404();
        
        $this->load->view("admin/datapesanan_pending", $data);
    }

    public function semuadata($id = null)
    {
        if (!isset($id)) redirect('admin/products');
       
        $product = $this->product_model;
    
        $data["viewdata"] = $product->getById($id);
        if (!$data["viewdata"]) show_404();
        
        $this->load->view("admin/datasemua", $data);
       
    }
    public function charts()
    {
        $this->load->view('admin/charts');
    }

    public function setting()
	{
        $data["tb_user"] = $this->login_model->getU();
		$this->load->view('admin/setting', $data);
    }
    public function datapesanan()
	{
        $data["blm_kirim"] = $this->product_model->getBelumKirim();
        $data["blm_lunas"] = $this->product_model->getBelumLunas();
        $data["semua"] = $this->product_model->getAll();
        $this->load->view("admin/datapesanan", $data);
	}
	public function editpassword()
	{
		$this->load->view('admin/editpassword');
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('admin/logincontrol'));
    }
    public function total_data()
    {
        $data['total_kirim'] = $this->product_model->hitungPembeliKirim();
        $data['total_pending'] = $this->product_model->hitungPembeliPending();
        $data['total_uang'] = $this->product_model->hitungTotalUang();
        $data['total_asset'] = $this->product_model->hitungJumlahPembeli();
        $this->load->view("admin/home", $data);
        
    }
}