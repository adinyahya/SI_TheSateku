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
                        <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                        <li class="nav-item">
                                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                    <span>Pesanan Belum Terkirim</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                                    <span>Pesanan Belum Lunas</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" class="nav-link" id="tab-2" data-toggle="tab" href="#tab-content-2">
                                    <span>Data Semua Pesanan</span>
                                </a>
                            </li>
                           
                        </ul>
                        <div class="tab-content">
                        
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                            <div class="main-card mb-3 card">

                            <div class="card-body"><h5 style="color:red" class="card-title">Data Pesanan Belum Di Kirim</h5>
                                       

                                    <div class="table-responsive dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                            <tr style="background-color:#fba152"> 
                                                <th>No</th>
                                                <th>Nama Pemesan</th>
                                                <th>Jumlah Kambing</th>
                                                <th>Tanggal Pengiriman</th>
                                                <th>Jam Pengiriman</th>
                                                <th>Alamat Pemesan</th>
                                                <th>Catatan</th>
                                                <th>Keterangan</th>
                                                <th>Action (U/D/V)</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            
                                            <?php 
                                            $no = 0;
                                            foreach ($blm_kirim as $product): 
                                            $no++;
                                            
                                            ?>
                                            <tr>
                                            <td style="background-color:#dfaef9">
											<?php echo $no ?>
                                            </td>
                                            <td>
											<?php echo $product->namapemesan ?>
                                            </td>
                                            <td>
											<?php echo $product->jumlahkambing ?>
                                            </td>
                                            <td>    
											<?php echo $product->tanggalpengiriman ?>
                                            </td>
                                           </td>
                                            <td>    
											<?php echo $product->jampengiriman ?>
                                            </td>
                                            <td>
											<?php echo $product->alamatpemesan ?>
                                            </td>
                                            <td>
											<?php echo $product->catatan ?>
                                            </td>
                                            <td>
											<?php echo $product->penerimaan ?>
                                            </td>
                                             <td>
                                              <a href="<?php echo site_url('admin/products/kirimket/'.$product->idpemesan) ?>" class="btn btn-success" data-id="3" role="button" data-toggle="modal"><i class="fa fa-print"></i> Lihat</a>
                                           
                                             </td>
                                            </tr>
                                            <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                       </div>
                                    </div>
                                </div>    
                            </div>
                            <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                            <div class="main-card mb-3 card">

                                    <div class="card-body"><h5 style="color:red" class="card-title">Data Pesanan Belum Melunasi Pembayaran</h5>
                                    <div class="table-responsive dataTable_wrapper">
                                       
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                            <tr style="background-color:pink">
                                                <th>No</th>
                                                <th>Nama Pemesan</th>
                                                <th>Alamat Pemesan</th>
                                                <th>Tanggal Pengiriman</th>
                                                <th>Harga Total</th>
                                                <th>Uang Dp</th>
                                                <th>Kekurangan Pembayaran</th>
                                                <th>Pembayaran</th>
                                                <th>Action (U/D/V)</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            
                                            <?php 
                                            $no = 0;
                                            foreach ($blm_lunas as $product): 
                                            $no++;
                                            
                                            ?>
                                            <tr>
                                            <td style="background-color:#dfaef9">
											<?php echo $no ?>
                                            </td>
                                            <td>
											<?php echo $product->namapemesan ?>
                                            </td>
                                            <td>
											<?php echo $product->alamatpemesan ?>
                                            </td>
                                            <td>    
											<?php echo $product->tanggalpengiriman ?>
                                            </td>
                                           </td>
                                            <td>    
											<?php echo "Rp.".$product->hargatotal ?>
                                            </td>
                                            <td>
											<?php echo "Rp.".$product->uangdp ?>
                                            </td>
                                            <td>
											<?php echo "Rp.".$product->kurangbayar ?>
                                            </td>
                                            <td>
											<?php echo $product->keterangan ?>
                                            </td>
                                             <td>
                                             <a href="<?php echo site_url('admin/products/lunasket/'.$product->idpemesan) ?>" class="btn btn-success" data-id="3" role="button" data-toggle="modal"><i class="fa fa-print"></i> Lihat</a>
                                           
                                             </td>
                                            </tr>
                                            <?php endforeach; ?>
                                            </tbody>
                                        </table>

                                       </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="tab-pane tabs-animation fade" id="tab-content-2" role="tabpanel">
                            <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 style="color:red" class="card-title">Data Semua Pesanan</h5>
                                    <div class="table-responsive dataTable_wrapper">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                            <tr style="background-color:#6edff7">
                                                <th>No</th>
                                                <th>Nama Pemesan</th>
                                                <th>Jumlah Kambing</th>
                                                <th>Jenis Kambing</th>
                                                <th>Jenis Pesanan</th>
                                                <th>Nama Aqiqoh</th>
                                                <th>Tanggal Pengiriman</th>
                                                <th>Jam Pengiriman</th>
                                                <th>Alamat Pemesan</th>
                                                <th>Harga Pesanan</th>
                                                <th>Uang Dp</th>
                                                <th>Kekurangan Pembayaran</th>
                                                <th>Catatan</th>
                                                <th>Pembayaran</th>
                                                <th>Keterangan Pengiriman</th>
                                                <th>Action (U/D)</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            
                                            <?php 
                                            $no = 0;
                                            foreach ($semua as $product): 
                                            $no++;
                                            
                                            ?>
                                            <tr>
                                            <td style="background-color:#dfaef9">
											<?php echo $no ?>
                                            </td>
                                            <td>
											<?php echo $product->namapemesan ?>
                                            </td>
                                            <td>
											<?php echo $product->jumlahkambing ?>
                                            </td>
                                            <td>
											<?php echo $product->jeniskambing ?>
                                            </td>
                                            <td>
											<?php echo $product->jenispesanan ?>
                                            </td>
                                            <td>
											<?php echo $product->namaaqiqoh ?>
                                            </td>
                                            <td>    
											<?php echo $product->tanggalpengiriman ?>
                                            </td>
                                           </td>
                                            <td>    
											<?php echo $product->jampengiriman ?>
                                            </td>
                                            <td>
											<?php echo $product->alamatpemesan ?>
                                            </td>
                                            <td>
											<?php echo "Rp.".$product->hargatotal ?>
                                            </td>
                                            <td>
											<?php echo "Rp.".$product->uangdp ?>
                                            </td>
                                            <td>
											<?php echo "Rp.".$product->kurangbayar ?>
                                            </td>
                                            <td>
											<?php echo $product->catatan ?>
                                            </td>
                                            <td>
											<?php echo $product->keterangan ?>
                                            </td>
                                            <td>
											<?php echo $product->penerimaan ?>
                                            </td>
                                             <td>
                                            <a href="<?php echo site_url('admin/products/edit/'.$product->idpemesan) ?>"
											 class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                                             <a href="<?php echo site_url('admin/products/semuadata/'.$product->idpemesan) ?>" class="btn btn-success" data-id="3" role="button" data-toggle="modal"><i class="fa fa-print"></i> Lihat</a>
                                           
                                            <a href="#myModal" class="btn btn-danger" onclick="set_url('<?php echo site_url('admin/products/delete/'.$product->idpemesan); ?>');" data-id="3" role="button" data-toggle="modal" ><i class="fa fa-trash"></i> Hapus </a>
                                            </td>
                                            </tr>
                                            <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                       </div>
                                        </div>
                                    </div>
                                </div>
                               
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
            </div>
   


            
            <?php $this->load->view('admin/menu/modal.php'); ?>
            <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
            <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
            <?php $this->load->view("admin/menu/js.php") ?>

            <script>
            $(document).ready(function()
            {
                $('.table').DataTable();
            });
            function set_url(url)
            {
            $('#btn-yes').attr('href',url);
            }
            </script>
            
           
</body>

</html>
