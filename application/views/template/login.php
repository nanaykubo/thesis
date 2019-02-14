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
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
  <?php 
      if($this-> session-> flashdata('user_msg'))
      {
      ?>
        <div class="alert alert-success">
      <?php echo $this->session->flashdata('user_msg');?>
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
            <a href="#" data-toggle="modal" data-target="#exampleModalCenter">Register Account</a> 
      </div>
    </div>

    </div>
  </div>

</div>

<!-- Modal -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" style="text-align: center;">Register Admin Account Role</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form method="POST" action="<?php echo base_url('Template/submitAdmin') ?>">
         <input type="hidden" name="inputinsert" id="inputinsert" value="<?php echo date('Y-m-d H:i:s'); ?>"/>
      <div class="form-group">
    <label for="formGroupExampleInput2">Code</label>
    <input type="text" class="form-control" id="inputCode" name="inputCode" placeholder="Code">
    <span id="username_result"></span>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">HCID</label>
    <input type="text" class="form-control" id="inputPass" name="inputHCID" placeholder="HealthCenter ID">
  </div>
  <div class="form-group">
    <div class="form-row">
    <div class="col">
      <label for="formGroupExampleInput2">First Name</label>
      <input type="text" class="form-control" name="inputFN"  placeholder="First name">
    </div>
    <div class="col">
      <label for="formGroupExampleInput2">Middle Name</label>
      <input type="text" class="form-control" name="inputMN" placeholder="Middle name">
    </div>
    <div class="col">
      <label for="formGroupExampleInput2">Last Name</label>
      <input type="text" class="form-control" name="inputLN" placeholder="Last name">
    </div>
  </div>
  </div>
  <div class="form-group">
    <div class="form-row">
    <div class="col">
      <label for="formGroupExampleInput2">Username</label>
      <input type="text" class="form-control" name="inputUser" placeholder="Username">
    </div>
    <div class="col">
      <label for="formGroupExampleInput2">Password</label>
      <input type="text" class="form-control" name="inputPass" placeholder="Password">
    </div>
  </div>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Position</label>
    <input type="text" class="form-control" id="inputPass" name="Position" value="ADMIN" readonly="">
  </div>
      </div>
      <div class="modal-footer">
        <input type="submit" id="done" name="done" class="form-control" >
</form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" style="text-align: center;">Please Login HealthCenter Default Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form method="POST" action="<?php echo base_url('Template/register') ?>">
      <?php 
      if($this-> session-> flashdata('register_err'))
      {
      ?>
        <div class="alert alert-danger">
      <?php echo $this->session->flashdata('register_err');?>
      </div>
      <?php
      } 
  ?>  
  <?php 
      if($this-> session-> flashdata('response'))
      {
      ?>
      <script>$('#register').modal('show');</script>
        <div class="alert alert-success">
      <?php echo $this->session->flashdata('response');?>
      </div>
      <?php
      } 
  ?>  
  <div class="form-group">
    <label for="formGroupExampleInput">Username</label>
    <input type="text" class="form-control" id="inputUser" name="inputUser" placeholder="Username">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Password</label>
    <input type="password" class="form-control" id="inputPass" name="inputPass" placeholder="Password">
  </div>
      </div>
      <div class="modal-footer">
        <input type="submit" id="done" name="done" class="form-control" >
</form>
      </div>
    </div>
  </div>
</div>

<script>
  $( document ).ready(function() {
    $('#register').modal('show')
    $("#inputCode").change(function(){
    var code = $('#inputCode').val();
    if(code != ''){
    $.ajax({
     url: "<?php echo base_url(); ?>template/checkCode",
     method: "POST",
     data: {'code':code},
     success: function(data){
      $('.modal-body #username_result').html(data);
     }
    });
   }
    });
});
</script>

</body>
</html>
