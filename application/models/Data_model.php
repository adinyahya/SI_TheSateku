<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Data_model extends CI_Model
{
    private $_table = "tb_data";

    public $id_data;
    public $nama_data;
    public $npm_data;
    public $telp_data;

    public function rules()
    {
        return [
            ['field' => 'nama_data',
            'label' => 'Nama_data',
            'rules' => 'required'],

            ['field' => 'npm_data',
            'label' => 'Npm_data',
            'rules' => 'numeric'],
            
            ['field' => 'telp_data',
            'label' => 'Telp_data',
            'rules' => 'required']
        ];
    }

    public function getSemuaData()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getByIdData($id)
    {
        return $this->db->get_where($this->_table, ["id_data" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama_data = $post["nama_data"];
        $this->npm_data = $post["npm_data"];
        $this->telp_data = $post["telp_data"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_data = $post["id"];
        $this->nama_data = $post["nama_data"];
        $this->npm_data = $post["npm_data"];
        $this->telp_data = $post["telp_data"];
        $this->db->update($this->_table, $this, array('id_data' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_data" => $id));
    }
}