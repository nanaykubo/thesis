<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Med Rec Tracking System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  
   -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  
</head>

<body>

<div class="container">
  
  <div class="row">
    <div class="col-md-5 offset-md-3">

      <center class="mt-4">
        <span  style="font-size: 1.5em; color: black;">
        <br>
        </span>
        <img src="../assets/img/brand/logo.jpg" width="450" height="250">
      </center>


  <form action="<?php echo base_url('Template/login_validation') ?>" method="post" class=form-horizontal align="center">
     <?php 
      if($this-> session-> flashdata('error_msg'))
      {
      ?>
        <div class="alert alert-danger">
      <?php echo $this->session->flashdata('error_msg');?>
      </div>
      <?php
      } 
  ?>  
      <div class="login-form">
       
      <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
     <div class="input-group mb-2 mr-sm-2">
     <div class="input-group-prepend">
      <div class="input-group-text"><i class="fas fa-user-md fa-lg"></i></div>
    </div>
    <input type="text" class="form-control" name="txtUsername" id="inlineFormInputGroupUsername2" placeholder="Username">
  </div>

  <label class="sr-only" for="inlineFormInputGroup2">Password</label>
     <div class="input-group mb-2 mr-sm-2">
     <div class="input-group-prepend">
      <div class="input-group-text"><i class="fas fa-key fa-lg"></i></div>
    </div>
    <input type="password" name="txtPassword" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Password">
  </div>


          <div class="input-group mb-3">
          <input type="submit" name="login" class="form-control">
        </div>
</div>
</form>
        <br/>
        <div align="center">
            <a href="#" >Register Account</a> || <a href="#" >Forgot Password?</a>
      </div>
    </div>

    </div>
  </div>

</div>

</body>

</html>
