<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Data_control extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("data_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["ambildata"] = $this->data_model->getSemuaData();
        $this->load->view("admin/lihatdata", $data);
    }

    public function add()
    {
        $dataku = $this->data_model;
        $validation = $this->form_validation;
        $validation->set_rules($dataku->rules());

            if ($validation->run()) {
                $dataku->save();
                $this->session->set_flashdata('success', 'Berhasil disimpan :D');
            }

        $this->load->view("admin/inputdata");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/products');
       
        $dataku = $this->data_model;
        $validation = $this->form_validation;
        $validation->set_rules($dataku->rules());

        if ($validation->run()) {
            $dataku->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan :D');
        }

        $data["ambildata"] = $dataku->getByIdData($id);
        if (!$data["ambildata"]) show_404();
        
        $this->load->view("admin/editdata", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->data_model->delete($id)) {
            redirect(site_url('admin/Data_control'));
        }
    }
}