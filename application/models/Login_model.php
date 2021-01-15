<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model
{

    private $_tableuserku = 'tb_user';
    public $id_user;
    public $password_admin;
    public $verpassword_admin;

    public function rules()
    {
        return [
            ['field' => 'password_admin',
            'label' => 'Password_admin',
            'rules' => 'required'],
            
            ['field' => 'verpassword_admin',
            'label' => 'Verpassword_admin',
            'rules' => 'numeric']
        ];
    }
    public function getU()
    {
        return $this->db->get($this->_tableuserku)->result();
    }
    public function getById($id)
    {
        return $this->db->get_where($this->_tableuserku, ["id_user" => $id])->row();
    }
    public function cek_user($nama_admin, $password_admin) 
    {
        $this->db->where("email = '$nama_admin' or nama_admin = '$nama_admin'");
        $this->db->where('password_admin', $password_admin);
        $query = $this->db->get('tb_user');
        return $query->row_array();
    }
    public function cek_password()
    {
      $post = $this->input->post();
      $this->id_user = $post['id'];
      $this->password_admin = $post['password_admin'];
      $this->verpassword_admin = $post['verpassword_admin'];
      
      $this->db->update($this->_tableuserku, $this, array('id_user' => $post['id']));
        
    }
}