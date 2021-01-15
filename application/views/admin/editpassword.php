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
<?php
$this->load->view('admin/menu/head.php');
?>  
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
                                        <i class="fa fa-lock icon-gradient bg-malibu-beach">
                                        </i>
                                    </div>
                                    <div>Edit Password
                                        <div class="page-title-subheading">Data Sistem Informasi Pesanan Sate & Gule Sederhana.
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                   
                                </div>    </div>
                        </div>            <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                        <li class="nav-item">
                                <a role="tab" class="nav-link active" id="tab-1" data-toggle="tab" href="#tab-content-0">
                                    <span >Edit Password</span>
                                </a>
                            </li>
                          
                        </ul>
                        <div class="tab-content">
                        <?php if ($this->session->flashdata('success')): ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo $this->session->flashdata('success'); ?>
                                </div>
                        <?php endif; ?>
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                            <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">EDIT</h5>
                                        <form method="post" action="<?php base_url('admin/logincontrol/proses_ganti_password') ?>" class="form" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<?php echo $product->id_user ?>" />
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Password Baru</label>
                                                <div class="col-sm-10"><input name="password_admin" type="password" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Verifikasi Password Baru</label>
                                                <div class="col-sm-10"><input name="verpassword_admin" type="password" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-group">
                                                <div class="col-sm-10 offset-sm-2">
                                                    <button class="btn btn-secondary">Kirim</button>
                                                </div>
                                            </div>
                                           
                                        </form>
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
    <?php
$this->load->view('admin/menu/js.php');
?> 
</body>
</html>
