<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
    private $_table = "tb_sate";
 
    public $idpemesan;
    public $id_user;
    public $tanggalpemesan;
    public $namapemesan;
    public $jumlahkambing;
    public $jeniskambing;
    public $jenispesanan;

    public $alamatpemesan;
    public $tanggalpengiriman;
    public $jampengiriman;
    public $hargatotal;
    public $uangdp;
    public $kurangbayar;
    public $keterangan;
    public $penerimaan;

    public function rules()
    {
        return [
            ['field' => 'namapemesan',
            'label' => 'Namapemesan',
            'rules' => 'required'],

            ['field' => 'jumlahkambing',
            'label' => 'Jumlahkambing',
            'rules' => 'numeric'],
            
            ['field' => 'radio2',
            'label' => 'Radio2',
            'rules' => 'required'],
            
            ['field' => 'jenispesanan',
            'label' => 'Jenispesanan',
            'rules' => 'required'],
            
            // ['field' => 'namaaqiqoh',
            // 'label' => 'Namaaqiqoh',
            // 'rules' => 'required'],
            
            ['field' => 'alamatpemesan',
            'label' => 'Alamatpemesan',
            'rules' => 'required'],
            
            ['field' => 'tanggalpengiriman',
            'label' => 'Tanggalpengiriman',
            'rules' => 'required'],

            ['field' => 'jampengiriman',
            'label' => 'Jampengiriman',
            'rules' => 'required'],
            
            ['field' => 'hargatotal',
            'label' => 'Hargatotal',
            'rules' => 'numeric'],
            
            ['field' => 'uangdp',
            'label' => 'Uangdp',
            'rules' => 'numeric']

        ];
    }

    public function getAll()
    {

        $namauser = $this->session->userdata('id_user');
        $this->db->order_by('tanggalpengiriman', 'ASC');
        return $this->db->get_where($this->_table, ["id_user" => $namauser])->result();
    }

    public function getBelumLunas()
    {

        $sasa = "BELUM LUNAS";
        $namauser = $this->session->userdata('id_user');
        $this->db->order_by('tanggalpengiriman', 'ASC');
        return $this->db->get_where($this->_table, array('keterangan' => $sasa, 'id_user' => $namauser))->result();
        
    }

    public function getBelumKirim() 
    {

        $kirim = "BELUM DIKIRIM";
        $namauser = $this->session->userdata('id_user');
        $this->db->order_by('tanggalpengiriman', 'ASC');
        return $this->db->get_where($this->_table, array('penerimaan' => $kirim, 'id_user' => $namauser))->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["idpemesan" => $id])->row();
    }

    public function save()

    {
        $tgl = date('d/m/Y, h:i:s a');
        $post = $this->input->post();
        $this->tanggalpemesan = $tgl;
        $this->id_user = $this->session->userdata('id_user');
        $this->namapemesan = $post["namapemesan"];
        $this->jumlahkambing = $post["jumlahkambing"];
        $this->jeniskambing = $post["radio2"];
        $this->jenispesanan = $post["jenispesanan"];  
        if(!empty($_POST['namaaqiqoh']))
        {

            $namaaqiqoh='';
            $this->namaaqiqoh = $post["namaaqiqoh"];  
        } 
         
        $this->alamatpemesan = $post["alamatpemesan"];
        $this->tanggalpengiriman = $post["tanggalpengiriman"];
        $this->jampengiriman = $post["jampengiriman"];
        $this->hargatotal = $post["hargatotal"];
        $this->uangdp = $post["uangdp"];
        if(!empty($_POST['catatan']))
        {

            $catatan='';
            $this->catatan = $post["catatan"];  
        } 
        
        $a = $_POST['hargatotal'];
        $b = $_POST['uangdp'];
        $bayar = $a - $b;
        $this->kurangbayar = $bayar;
        if($bayar == 0)
        {
            $this->keterangan = "LUNAS";
        }else
        {
            $this->keterangan = "BELUM LUNAS";
        }
        $this->penerimaan = "BELUM DIKIRIM";
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->idpemesan = $post["id"];
        $this->id_user = $this->session->userdata('id_user');
        $this->tanggalpemesan = $post["tglku"];
        $this->namapemesan = $post["namapemesan"];
        $this->jumlahkambing = $post["jumlahkambing"];
        $this->jeniskambing = $post["radio2"];
        $this->jenispesanan = $post["jenispesanan"];
        
            $namaaqiqoh='';
            $this->namaaqiqoh = $post["namaaqiqoh"];  
        
        $this->alamatpemesan = $post["alamatpemesan"];
        $this->tanggalpengiriman = $post["tanggalpengiriman"];
        $this->jampengiriman = $post["jampengiriman"];
        $this->hargatotal = $post["hargatotal"];
        $this->uangdp = $post["uangdp"];

            $catatan='';
            $this->catatan = $post["catatan"];

        $a = $_POST['hargatotal'];
        $b = $_POST['uangdp'];
        $bayar = $a - $b;
        $this->kurangbayar = $bayar;
        if($bayar == 0)
        {
            $this->keterangan = "LUNAS";
        }else
        {
            $this->keterangan = "BELUM LUNAS";
        }
        $this->penerimaan = "BELUM DIKIRIM";
        $this->db->update($this->_table, $this, array('idpemesan' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("idpemesan" => $id));
    }
    public function editket()
    {
        $post = $this->input->post();
        $this->idpemesan = $post["id"];
        $this->id_user = $this->session->userdata('id_user');
        $this->tanggalpemesan = $post["tglku"];
        $this->namapemesan = $post["namapemesan"];
        $this->jumlahkambing = $post["jumlahkambing"];
        $this->jeniskambing = $post["radio2"];
        $this->jenispesanan = $post["jenispesanan"];
        
            $namaaqiqoh='';
            $this->namaaqiqoh = $post["namaaqiqoh"];  
        
        $this->alamatpemesan = $post["alamatpemesan"];
        $this->tanggalpengiriman = $post["tanggalpengiriman"];
        $this->jampengiriman = $post["jampengiriman"];
        $this->hargatotal = $post["hargatotal"];
        $this->uangdp = $post["hargatotal"];

            $catatan='';
            $this->catatan = $post["catatan"];
      
        $z = $_POST["hargatotal"];
        $y = $_POST["hargatotal"];
        $sisatotal = $z - $y;
        $this->kurangbayar = $sisatotal;
        $this->keterangan = $post["keterangan"];
        $this->penerimaan = $post["penerimaan"];
       
        $this->db->update($this->_table, $this, array('idpemesan' => $post['id']));
    }
    public function editkiriman()
    {
        $post = $this->input->post();
        $this->idpemesan = $post["id"];
        $this->id_user = $this->session->userdata('id_user');
        $this->tanggalpemesan = $post["tglku"];
        $this->namapemesan = $post["namapemesan"];
        $this->jumlahkambing = $post["jumlahkambing"];
        $this->jeniskambing = $post["radio2"];
        $this->jenispesanan = $post["jenispesanan"];
        
            $namaaqiqoh='';
            $this->namaaqiqoh = $post["namaaqiqoh"];  
        
        $this->alamatpemesan = $post["alamatpemesan"];
        $this->tanggalpengiriman = $post["tanggalpengiriman"];
        $this->jampengiriman = $post["jampengiriman"];
        $this->hargatotal = $post["hargatotal"];
        $this->uangdp = $post["uangdp"];
        $k = $_POST['hargatotal'];
        $l = $_POST['uangdp'];
        $bayar = $k - $l;
        $this->kurangbayar = $bayar;
       
        $this->keterangan = $post["keterangan"];

            $catatan='';
            $this->catatan = $post["catatan"];
      
        $this->penerimaan = $post["penerimaan"];
       
        $this->db->update($this->_table, $this, array('idpemesan' => $post['id']));
    }
    

    public function hitungJumlahPembeli()
    {   
        $namauser = $this->session->userdata('id_user');
        $query = $this->db->get_where($this->_table, ["id_user" => $namauser]);
        if($query->num_rows()>0)
        {
        return $query->num_rows();
        }
        else
        {
        return 0;
        }
    }   

    public function hitungTotalUang()
    {
        $this->db->select_sum('hargatotal');
        $namauser = $this->session->userdata('id_user');
        $query = $this->db->get_where($this->_table, ["id_user" => $namauser]);
        if($query->num_rows()>0)
        {
        return $query->row()->hargatotal;
        }
        else
        {
        return 0;
        }
    }

    public function hitungPembeliPending()
    {
        $namauser = $this->session->userdata('id_user');
        $manana = "BELUM LUNAS";
        $query = $this->db->get_where($this->_table, array('keterangan' => $manana, 'id_user' => $namauser));
        if($query->num_rows()>0)
        {
        return $query->num_rows();
        }
        else
        {
        return 0;
        }
    }

    public function hitungPembeliKirim()
    {
        $namauser = $this->session->userdata('id_user');
        $roygo = "BELUM DIKIRIM";
        $query = $this->db->get_where($this->_table, array('penerimaan' => $roygo, 'id_user' => $namauser));
        if($query->num_rows()>0)
        {
        return $query->num_rows();
        }
        else
        {
        return 0;
        }
    }

}