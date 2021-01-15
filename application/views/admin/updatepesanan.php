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
                                        <i class="fa fa-edit text-success">
                                        </i>
                                    </div>
                                    <div>Insert Pesanan
                                        <div class="page-title-subheading">Data Sistem Informasi Pesanan Sate & Gule Sederhana.
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                   
                                </div>    </div>
                        </div>            <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                        <li class="nav-item">
                                <a role="tab" class="nav-link active" id="tab-1" data-toggle="tab" href="#tab-content-0">
                                    <span>Pesanan Masuk</span>
                                </a>
                            </li>
                            <!-- <li class="nav-item">
                                <a role="tab" class="nav-link" id="tab-0" data-toggle="tab" href="#tab-content-1">
                                    <span>Soon</span>
                                </a>
                            </li> -->
                           
                        </ul>
                        <div class="tab-content">
                        <?php if ($this->session->flashdata('success')): ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo $this->session->flashdata('success'); ?>
                                </div>
                        <?php endif; ?>
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                            <div class="main-card mb-3 card">
                            
                                    <div class="card-body"><h5 class="card-title">Pesanan Masuk</h5>
                                        <form method="post" action="<?php base_url('admin/products/edit') ?>" class="form" enctype="multipart/form-data">
                                            <input type="hidden" name="id" value="<?php echo $product->idpemesan ?>" />
                                            <input type="hidden" name="tglku" value="<?php echo $product->tanggalpemesan ?>" />
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Nama Pemesan</label>
                                                <div class="col-sm-10">
                                                <input name="namapemesan" type="text" required class="form-control" required value="<?php echo $product->namapemesan ?>">
                                                </div>
                                                
                                            </div>
                                           
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label">Jumlah Kambing</label>
                                                <div class="col-sm-10">
                                                <select name="jumlahkambing" class="form-control">
                                                <option>Pilih</option>
                                                <?php
                                                $jum = 0;
                                                
                                                for ($x=1; $x < 20; $x++)
                                                {
                                                    $jum++;
                                                  ?>  
                                                    <option value="<?php echo $jum; ?>" <?php if ($product->jumlahkambing == $jum) { echo "selected=\"selected\""; } ?>><?php echo $jum ?></option>";   
                                                <?php
                                                }
                                                ?>
                                               
                                                </select>
                                                </div>
                                              
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label">Jenis Kambing</label>
                                                <div class="col-sm-10">
                                                <fieldset class="position-relative row form-group">
                                                <legend class="col-form-label col-sm-10">Jenis Kelamin Kambing</legend>
                                                <div class="col-sm-10">
                                                    <div class="position-relative form-check">
                                                    <label class="form-check-label">
                                                    <input name="radio2" type="radio" required value="Laki-laki" <?php if($product->jeniskambing == 'Laki-laki'){echo 'checked';}?> class="form-check-input"> Laki-laki</label>
                                                    </div>
                                                    <div class="position-relative form-check">
                                                    <label class="form-check-label">
                                                    <input name="radio2" type="radio" required value="Perempuan" <?php if($product->jeniskambing == 'Perempuan'){echo 'checked';}?> class="form-check-input"> Perempuan</label>
                                                    </div>  
                                                    <div class="position-relative form-check">
                                                    <label class="form-check-label">
                                                    <input name="radio2" type="radio" required value="Laki-laki & Perempuan" <?php if($product->jeniskambing == 'Laki-laki & Perempuan'){echo 'checked';}?> class="form-check-input"> Laki-laki & Perempuan</label>
                                                    </div>   
                                                </div>
                                            </fieldset>
                                                </div>        
                                            </div>
                                            <tr>
  
                                            <div class="position-relative row form-group">
                                            <label for="exampleSelect" class="col-sm-2 col-form-label">Jenis Pesanan</label>
                                                <div class="col-sm-10">
                                                <select name="jenispesanan" class="form-control">
                                                <option>Pilih</option>
                                                <option value="Biasa" <?php if ($product->jenispesanan == "Biasa") { echo "selected=\"selected\""; } ?>>Biasa</option>
                                                <option value="Aqiqoh" <?php if ($product->jenispesanan == "Aqiqoh") { echo "selected=\"selected\""; } ?>>Aqiqoh</option>
                                                </select>
                                                </div> 
                                               
                                            </div>
                                           
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Nama Aqiqoh</label>
                                                <div class="col-sm-10"><input name="namaaqiqoh" type="text" class="form-control " value="<?php echo $product->namaaqiqoh ?>"></div>
                                                
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Alamat Pemesan</label>
                                                <div class="col-sm-10"><textarea type="text" required name="alamatpemesan" id="exampleText" class="form-control" ><?php echo $product->alamatpemesan ?></textarea></div>
                                               
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Tanggal Pengiriman</label>
                                                <div class="col-sm-10">
                                                <input class="form-control" type="date" required class="tanggal" value="<?php echo $product->tanggalpengiriman ?>" name="tanggalpengiriman" id="tanggalp" data-date-format="yyyy-mm-dd">
                                                </div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Waktu Pengiriman</label>
                                                <div class="col-sm-10">
                                                <input type="text" name="jampengiriman" id="time" required value="<?php echo $product->jampengiriman ?>" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Total Harga</label>
                                                <div class="col-sm-10"><input name="hargatotal" required type="text" value="<?php echo $product->hargatotal ?>" class="form-control"></div>
                                               
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Bayar Dp</label>
                                                <div class="col-sm-10"><input name="uangdp"  required type="text" value="<?php echo $product->uangdp ?>" class="form-control"></div>
                                              
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Catatan (Jika Ada)</label>
                                                <div class="col-sm-10"><textarea type="text" name="catatan" id="exampleText" class="form-control"><?php echo $product->catatan ?></textarea></div>
                                               
                                            </div>
                                         
                                           
                                            <div class="position-relative row form-group">
                                                <div class="col-sm-10 offset-sm-2">
                                                    <input class="btn btn-success" name="btn" type="submit" value="Kirim">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>    
                            </div>
                            <!-- <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                            <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Grid Rows</h5>
                                        <form class="">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Email</label><input name="email" id="exampleEmail11" placeholder="with a placeholder" type="email" class="form-control"></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="position-relative form-group"><label for="examplePassword11" class="">Password</label><input name="password" id="examplePassword11" placeholder="password placeholder" type="password"
                                                                                                                                                             class="form-control"></div>
                                                </div>
                                            </div>
                                            <div class="position-relative form-group"><label for="exampleAddress" class="">Address</label><input name="address" id="exampleAddress" placeholder="1234 Main St" type="text" class="form-control"></div>
                                            <div class="position-relative form-group"><label for="exampleAddress2" class="">Address 2</label><input name="address2" id="exampleAddress2" placeholder="Apartment, studio, or floor" type="text" class="form-control">
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="position-relative form-group"><label for="exampleCity" class="">City</label><input name="city" id="exampleCity" type="text" class="form-control"></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="position-relative form-group"><label for="exampleState" class="">State</label><input name="state" id="exampleState" type="text" class="form-control"></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="position-relative form-group"><label for="exampleZip" class="">Zip</label><input name="zip" id="exampleZip" type="text" class="form-control"></div>
                                                </div>
                                            </div>
                                            <div class="position-relative form-check"><input name="check" id="exampleCheck" type="checkbox" class="form-check-input"><label for="exampleCheck" class="form-check-label">Check me out</label></div>
                                            <button class="mt-2 btn btn-primary">Sign in</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Inline</h5>
                                        <div>
                                            <form class="form-inline">
                                                <div class="mb-2 mr-sm-2 mb-sm-0 position-relative form-group"><label for="exampleEmail22" class="mr-sm-2">Email</label><input name="email" id="exampleEmail22" placeholder="something@idk.cool" type="email"
                                                                                                                                                                               class="form-control"></div>
                                                <div class="mb-2 mr-sm-2 mb-sm-0 position-relative form-group"><label for="examplePassword22" class="mr-sm-2">Password</label><input name="password" id="examplePassword22" placeholder="don't tell!" type="password"
                                                                                                                                                                                     class="form-control"></div>
                                                <button class="btn btn-primary">Submit</button>
                                            </form>
                                            <div class="divider"></div>
                                            <form class="">
                                                <div class="position-relative form-check form-check-inline"><label class="form-check-label"><input type="checkbox" class="form-check-input"> Some input</label></div>
                                                <div class="position-relative form-check form-check-inline"><label class="form-check-label"><input type="checkbox" class="form-check-input"> Some other input</label></div>
                                            </form>
                                            <div class="divider"></div>
                                            <form class="form-inline">
                                                <div class="position-relative form-group"><label for="exampleEmail33" class="sr-only">Email</label><input name="email" id="exampleEmail33" placeholder="Email" type="email" class="mr-2 form-control"></div>
                                                <div class="position-relative form-group"><label for="examplePassword44" class="sr-only">Password</label><input name="password" id="examplePassword44" placeholder="Password" type="password"
                                                                                                                                                                class="mr-2 form-control"></div>
                                                <button class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                               
                            </div> -->
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
<script>

var timepicker = new TimePicker('time', {
  lang: 'en',
  theme: 'dark'
});
timepicker.on('change', function(evt) {
  
  var value = (evt.hour || '00') + ':' + (evt.minute || '00');
  evt.element.value = value;

});
</script>
    </body>
</html>
