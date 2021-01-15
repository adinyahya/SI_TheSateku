<!DOCTYPE html>
<html>
<head>
<?php
$this->load->view('admin/menu/head.php');
?>
<style>
body {
    
    font-family: Arial, Helvetica, sans-serif;
   
    background : #c4c3c3;
}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
  
}

span.psw {
  float: right;
  padding-top: 16px;
}
#wrapper{

  background-color:rgba(255,255,255,0.8);
  
}
.warnaku
{
    color : red;
    margin-left : 20%;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
  .tengah
  {
  width:400px;
	height:200px;
	padding:20px;
	position: fixed;
	top: 50%;
	left: 50%;
	margin-top: -120px;
	margin-left: -220px;
  }
}
</style>
</head>
<body>


<div id="wrapper">
<div class="row">
<div class="col-md-6 col-xl-4 ">
</div>
<div class="col-md-6 col-xl-4 ">
<div class="card mb-3 widget-content bg-arielle-smile">

                                        
<form method="post" action="<?php echo site_url('admin/logincontrol/proses_login'); ?>">

    
  <div class="imgcontainer">
  <h2>Login Sateku</h2>
    <img src="<?php echo site_url('assets/images/avatars/e.png') ?>" alt="Avatar" class="avatar">
  </div>
                        
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="nama_admin" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password_admin" required>
    <?php if ($this->session->flashdata('gagal')): ?>
                                <div class="warnaku" role="alert">
                                    <?php echo $this->session->flashdata('gagal'); ?>
                                </div>
                        <?php endif; ?>
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</div>
</div>
</div>
</div>
</body>
</html>
