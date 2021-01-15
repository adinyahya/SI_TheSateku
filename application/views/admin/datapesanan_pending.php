<?php

error_reporting(0);
error_reporting(E_ALL);
$cek = $this->session->userdata('id_user');
if(!isset($cek))
{
    $this->session->sess_destroy();
    redirect(site_url('admin/logincontrol'));
}
?>
<!doctype html>
<html lang="en">

<head>

<link href="<?php echo base_url('assets/main.css') ?>" rel="stylesheet" type="text/css" >

<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/datatables/css/jquery.dataTables.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') ?>" rel="stylesheet">


</head>
<body>

    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    <div class="app-header__content">
            <?php
               include "menu/header.php";
               ?>

            </div>
        </div>        <div class="ui-theme-settings">
            <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
                <i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
            </button>
            <?php
            include "menu/unik.php";
            ?>
        </div>        <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>   
                    <?php
                    include "menu/menu.php";
                    ?>
                </div>    <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="fa fa-clipboard icon-gradient bg-happy-itmeo">
                                        </i>
                                    </div>
                                    <div>Data Pesanan
                                        <div class="page-title-subheading">Data Sistem Informasi Pesanan Sate & Gule Sederhana.
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    
                                </div>    </div>
                        </div>           
                            
                        <div class="tab-content">
                        <?php if ($this->session->flashdata('success')): ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo $this->session->flashdata('success'); ?>
                                </div>
                        <?php endif; ?>

                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title"></h5>
                                   
                                    <div class="modal-header">
         <h1 class="modal-title">Data Pesanan Edit Sudah Dikirim / Belum</h1>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <div align="center">
        <img src="<?php echo site_url('assets/images/avatars/e.png') ?>" width="120px" height="120px" alt="Avatar" class="avatar">
        
          <h3>Sate & Gule The Sateku</h3>
          <hr size="50px" width="85%" color="red">
          </div>
    <div class="ulku"><br>
    <!-- <h6 style="color:red">Nama Penulis Pesanan </h6> -->
            <table class="kebawah" rules="rows" border="20"> 
            <thead>
            <th width="220px"></th>
            <th></th>
            <th></th>
            </thead>
            <tbody>
            <tr>
            <td> <p><i class="fa fa-smile icon-gradient bg-happy-itmeo"></i> <b>Nama Pemesan</b></p></td>
            <td ><p> : </p></td>
            <td><p><?php echo $viewdata->namapemesan ?></p></td>
            </tr>
            
            <tr>
            <td><p><i class="fa fa-smile icon-gradient bg-happy-itmeo"></i> <b>Jumlah Kambing</b></p></td>
            <td><p> : </p></td>
            <td><p><?php echo $viewdata->jumlahkambing ?></p></td>
            </tr>
            <tr>
            <td><p><i class="fa fa-smile icon-gradient bg-happy-itmeo"></i> <b>Jenis Kambing</b></p></td>
            <td ><p> : </p></td>
            <td><p><?php echo $viewdata->jeniskambing ?></p></td>
            </tr>
            <tr>
            <td><p><i class="fa fa-smile icon-gradient bg-happy-itmeo"></i> <b>Jenis Pesanan</b></p></td>
            <td><p> : </p></td>
            <td><p><?php echo $viewdata->jenispesanan ?></p></td>
            </tr>
            <tr>
            <td><p><i class="fa fa-smile icon-gradient bg-happy-itmeo"></i> <b>Nama Aqiqoh</b></p></td>
            <td><p> : </p></td>
            <td> <p><?php echo $viewdata->namaaqiqoh ?></p></td>
            </tr>
            <tr>
            <td><p><i class="fa fa-smile icon-gradient bg-happy-itmeo"></i> <b>Alamat Pemesan</b></p></td>
            <td><p> : </p></td>
            <td><p><?php echo $viewdata->alamatpemesan ?></p></td>
            </tr>
            <tr>
            <td><p><i class="fa fa-smile icon-gradient bg-happy-itmeo"></i> <b>Tanggal Pengiriman</b></p></td>
            <td><p> : </p></td>
            <td><p><?php echo $viewdata->tanggalpengiriman ?></p></td>
            </tr>
            <tr>
            <td><p><i class="fa fa-smile icon-gradient bg-happy-itmeo"></i> <b>Jam Pengiriman</b></p></td>
            <td><p> : </p></td>
            <td> <p><?php echo $viewdata->jampengiriman ?></p></td>
            </tr>
            <tr>
            <td><p><i class="fa fa-smile icon-gradient bg-happy-itmeo"></i> <b>Harga Total</b></p></td>
            <td><p> : </p></td>
            <td> <p><?php echo "Rp.".$viewdata->hargatotal ?></p></td>
            </tr>
            <tr>
            <td><p><i class="fa fa-smile icon-gradient bg-happy-itmeo"></i> <b>Uang Dp</b></p></td>
            <td ><p> : </p></td>
            <td><p><?php echo "Rp.".$viewdata->uangdp ?></p></td>
            </tr>
            <tr>
            <td><p><i class="fa fa-smile icon-gradient bg-happy-itmeo"></i> <b>Kekurangan Pembayaran</b></p></td>
            <td ><p> : </p></td>
            <td><p><?php echo "Rp.".$viewdata->kurangbayar ?></p></td>
            </tr>
            <tr>
            <td><p><i class="fa fa-smile icon-gradient bg-happy-itmeo"></i> <b>Catatan</b></p></td>
            <td ><p> : </p></td>
            <td> <p><?php echo $viewdata->catatan ?></p></td>
            </tr>
            <tr>
            <td><p><i class="fa fa-smile icon-gradient bg-happy-itmeo"></i> <b>Pembayaran</b></p></td>
            <td ><p> : </p></td>
            <td> <p><b><?php echo $viewdata->keterangan ?></b></p></td>
            </tr>
            <tr>
            <td><p><i class="fa fa-smile icon-gradient bg-happy-itmeo"></i> <b>Keterangan</b></p></td>
            <td ><p> : </p></td>
            <td> <p><b><?php echo $viewdata->penerimaan ?></b></p></td>
            </tr>
            <tr>
            <td>
            </td>
            <td>
            </td>
            <td>
            
            <form method="post" action="<?php base_url('admin/products/kirimket') ?>" class="form" enctype="multipart/form-data">
                                       
                    <input type="hidden" name="id" value="<?php echo $viewdata->idpemesan ?>" />
                    <input type="hidden" name="tglku" value="<?php echo $viewdata->tanggalpemesan ?>" />
                    <input type="hidden" name="namapemesan" value="<?php echo $viewdata->namapemesan ?>" />
                    <input type="hidden" name="jumlahkambing" value="<?php echo $viewdata->jumlahkambing ?>" />
                    <input type="hidden" name="radio2" value="<?php echo $viewdata->jeniskambing ?>" />
                    <input type="hidden" name="jenispesanan" value="<?php echo $viewdata->jenispesanan ?>" />
                    <input type="hidden" name="namaaqiqoh" value="<?php echo $viewdata->namaaqiqoh ?>" />
                    <input type="hidden" name="alamatpemesan" value="<?php echo $viewdata->alamatpemesan ?>" />
                    <input type="hidden" name="tanggalpengiriman" value="<?php echo $viewdata->tanggalpengiriman ?>" />
                    <input type="hidden" name="jampengiriman" value="<?php echo $viewdata->jampengiriman ?>" />
                    <input type="hidden" name="hargatotal" value="<?php echo $viewdata->hargatotal ?>" />
                    <input type="hidden" name="uangdp" value="<?php echo $viewdata->uangdp ?>" />
                    <input type="hidden" name="catatan" value="<?php echo $viewdata->catatan ?>" />
                    <input type="hidden" name="keterangan" value="<?php echo $viewdata->keterangan ?>" />

                    <div class="position-relative row form-group">
                    <div class="col-sm-10">
                    <p style="color:red">Silahkan ganti keterangan jika pesanan sudah dikirim*</p>
                    <select name="penerimaan" class="form-control">
                    <option>Pilih</option>
                    <option value="SUDAH DIKIRIM">SUDAH DIKIRIM</option>
                    <option value="BELUM DIKIRIM">BELUM DIKIRIM</option>
                    </select>
                    </div> 
            </div>

            <input class="btn btn-success" name="btn" type="submit" value="Edit">
            </form>
            </td>
            </tr>
            
            </tbody>
        
          
            </table>
      </div>  
         </div>
         <style>
         .kebawah
         {
             margin-left : 50px;
             margin-right : 50px;
             border-color : pink;
             
         }
         </style>
          



                                </div>
                                </div>
                                <div class="app-wrapper-footer">
                                    <div class="app-footer">
                                        <div class="app-footer__inner">
                                            <div class="app-footer-left">
                                                <ul class="nav">
                                                    <li class="nav-item">
                                                        Copyright © 2019 
                                                        <a href="https://adinyahya.com">
                                                            ACHMAD ADIN YAHYA 
                                                        </a>
                                                        | ALL RIGHTS RESERVED.
                                                    </li>
                                                
                                                </ul>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>    </div>
                 </div>
            </div>
            
            <?php $this->load->view("admin/menu/modal.php") ?>
            <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
            <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
            <?php $this->load->view("admin/menu/js.php") ?>

            <script>
            $(document).ready(function()
            {
                $('.table').DataTable();
            });
            </script>
            <script>
            $('.btn-danger').click(function()
            {
            $('#modalDelete').attr('href','<?php echo site_url('admin/products/delete/'.$product->idpemesan); ?>');
            })

            $('.btn-success').click(function()
            {
            $('#modalView').attr('href','<?php echo site_url('admin/products/viewdata/'.$product->idpemesan); ?>');
          
            })
            </script>
           
</body>

</html>
