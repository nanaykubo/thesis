<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>MedRec Tracking System</title>
  <!-- Favicon -->
  <link href="../../assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="../../assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="../../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="../../assets/css/argon.css?v=1.0.0" rel="stylesheet">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

</head>

<body style="background-color: white;">
  <input type="hidden" id="POSITION" value="<?php echo $data[1]['userlist'][0]->POSITION; ?>">
  <!-- Sidenav -->
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="../index.html">
        <img src="../../assets/img/brand/a.png"  width="150" height="150" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="../../assets/img/theme/team-1-800x800.jpg">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="../examples/profile.html" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="../examples/profile.html" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <a href="../examples/profile.html" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Activity</span>
            </a>
            <a href="../examples/profile.html" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Support</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="../index.html">
                <<img src="../../assets/img/brand/a.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
          <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="<?php echo base_url('Template/userpage') ?>">
              <i class="fas fa-plus-circle text-green"></i> Add Patient
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Template/family') ?>">
              <i class="fas fa-users text-blue"></i> List of Families
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout">
              <i class="fas fa-sign-out-alt text-danger"></i> Log Out
            </a>
          </li>
        </ul>
       <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="#" id="nav">
              <i class="fas fa-phone"></i> Contact Support
            </a>
          </li>
      </div>
    </div>
  </nav>
</div>
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 text-white" href="<?php echo base_url('template/userpage') ?>"> BACK</a>
        <!-- Form -->
        <form style="margin-left: 375px;">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative mr-8">
              <div class="input-group-prepend">
                <span class="input-group-text "><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control " placeholder="Search" type="text">
            </div>
          </div>
        </form>
        <form class="navbar-search mr-4 d-none d-md-flex ml-lg-auto">
          <a href="" data-toggle="tooltip" data-placement="top" title="Notifications"><i class="fas fa-bell fa-lg text-white"></i></a>
        </form>
        <form class="navbar-search mr-3 d-none d-md-flex">
          <a href="" data-toggle="tooltip" data-placement="top" title="Activities"><i class="fas fa-clipboard-list fa-lg text-white"></i></a>
        </form>

        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="../../assets/img/theme/team-4-800x800.jpg">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold"><?php echo $data[1]['userlist'][0]->FN?> <?php echo $data[1]['userlist'][0]->LN?></span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Header -->


   <div class="header pb-8 pt-5 pt-md-8" style="background: linear-gradient(to bottom, #0099ff -8%, #ffffff 91%);">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="card">
          <div class="card-body">
            <h1><?php echo $data[0]['pinfo'][0]->FN?> <?php echo $data[0]['pinfo'][0]->MN?> <?php echo $data[0]['pinfo'][0]->LN?></h1>
         <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
  <div class="btn-group" role="group" aria-label="First group">
    <p class="card-text"><a href="#" class="badge badge-info">Patient Information</a> </p>
  </div>
  <div class="input-group ">
    <button class="btn btn-icon btn-3 btn-secondary" style="margin-left: 450px;" id="addnewrecord" data-toggle="modal" data-target="#myModal" type="button">
      <span class="btn-inner--icon"><i class="fas fa-file-medical fa-lg text-default"></i></i></span>
      
      <span class="btn-inner--text">Add New Record</span>
        </button>
  </div>
  <?php   $portid = $this->uri->segment(3); ?>
   <a href="<?php echo base_url('template/test/'.$portid)?>" id="printrecord" class="btn btn-icon btn-3 btn-secondary"><i class="fas fa-print fa-lg"></i> Print Record</a>
</div>
        </div>
        </div>

          <!-- Button -->

            </div>
          </div>
    </div>
      
    <!-- Page content -->

    <div class="container mt--7">
       <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
               <!-- header -->
            <?php 
            if($this-> session->flashdata('error_msg'))
            {
            ?>
            <div class="alert alert-dismissible alert-warning fade show text-center"><i class="fas fa-exclamation-triangle fa-lg"></i>
            <?php echo $this->session->flashdata('error_msg');?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
            </div>
            <?php
            } 
            ?>  
            </div>
            <!-- body -->

            <table class="table table-hover text-center">
  <thead>
    <tr>
      <th scope="col">Record No</th>
      <th scope="col">Record Type</th>
      <th scope="col">Date Inserted</th>
      <th scope="col">Return Date</th>
      <th scope="col">Diagnosis/Services</th>
      <th scope="col">Prescription</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
      //retrive parameters from Test.php controller
      if($data[2]['precords'])
      {
        //set dataset info to variable test
        foreach ($data[2]['precords'] as $test) 
        //get header ID and print out each
        {
      ?>
      <tr>
      <td class="nr"><?php echo $test->recordno; ?></td>
      <td><?php echo $test->RecordType; ?></td>
      <td><?php echo $test->DATE; ?></td>
      <td><?php echo $test->RETURNDATE; ?></td>
      <td><?php echo $test->Diag; ?></td>
      <td><?php echo $test->PRESCRIPTION; ?></td>
      <td><a href="#" class="view" data-toggle="tooltip" data-placement="top" title="Patient Record"><i class="fas fa-file-medical-alt fa-lg text-red"></i></a>
      <a href="#" id="actbutton" class="resolve" style="margin-left: 20px;" data-toggle="tooltip" data-placement="top" title=" Attached Record"><i class="fas fa-paperclip fa-lg text-yellow"></i></a></td>
    </tr>
   </tbody> 
    <?php
      //continuation to loop all in the dataset to the body

      }

      }
      ?>
        </div>
          </div>
        </div>
      </div>
    </div>

<div class="modal fade" id="viewModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Uploaded Image</h5>
      </div>
      <div class="modal-body text-center">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
   
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>

<div class="modal" id="myModal" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" role="dialog">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Records</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

    <form action="<?php echo base_url('template/pRecords/') ?>" method="post" enctype="multipart/form-data">
      <input type="hidden" name="inputFN" id="inputFN" value="<?php echo $data[0]['pinfo'][0]->FN?>"/>      
  <input type="hidden" name="inputLN" id="inputLN" value="<?php echo $data[0]['pinfo'][0]->LN?>"/>
  <input type="hidden" name="txtHCID" id="txtHCID" value="<?php echo $data[0]['pinfo'][0]->HCID?>"/>
  <input type="hidden" name="txtID" id="txtID" value="<?php echo $data[0]['pinfo'][0]->ID?>"/>
   <input type="hidden" name="inputassist" id="inputassist" value="<?php echo $data[1]['userlist'][0]->code?>"/>
   <input type="hidden" name="inputinsert" id="inputinsert" value="<?php echo date('Y-m-d'); ?>"/>
   <input type="hidden" name="inputnote" id="inputnote"/>
   <input type="hidden" name="inputDiagnosis" id="inputDiagnosis" value=""/>

  <div class="form-row">
     <div class="form-group col-md-12">
      <label for="inputState">Record No:</label>
      <input type="text" class="form-control" id="inputRecordNo" name="inputRecordNo" value="<?php echo $data[3]['ai'][0]->AUTO_INCREMENT; ?>" readonly>
    </div>
    <div class="form-group col-md-12">
      <label for="inputState">Record Type</label>
      <select id="inputType" name="inputType" class="form-control">
        <option value="Checkup">Checkup</option>
        <option value="FollowupCheckup">Follow Up Check Up</option>
        <option value="Services">Services</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Date</label>
      <input type="date" class="form-control" id="inputDate" name="inputDate" value="<?php echo date('Y-m-d'); ?>" readonly>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Return Date</label>
      <input type="date" class="form-control" name="inputReturn" id="inputReturn">
    </div>
     <div class="form-group col-md-6">
      <label for="Diagnosis">Diagnosis</label>
      <select id="Diagnosis" name="Diagnosis" class="form-control" required="">
        <option value="1">Pnuemonia </option>
        <option value="2">Hypentesion</option>
        <option value="3">Diabetis</option>
        <option value="4">Upper Respiratory Tract Infection</option>
        <option value="5">Primary Tuberculosis</option>
        <option value="6">UTI</option>
        <option value="7">Diarrehea</option>
        <option value="8">Arthritis</option>
        <option value="9">Conjuctivitis</option>
        <option value="10">Sore Throat</option>
        <option value="11">Vaginitis</option>
      </select>
    </div>
     <div class="form-group col-md-6">
      <label for="Diagnosis">Services</label>
      <select id="Services" name="Services" class="form-control" required="">
        <option value="1">Family Planning</option>
        <option value="2">Maternal and Child</option>
        <option value="3">Tubercolosis</option>
        <option value="4">Dental</option>
        <option value="5">Well Baby Immunization</option>
        <option value="6">Adolescence </option>
        <option value="7">Pre Natal</option>
        <option value="8">Post Natal</option>
        <option value="9">Nutrition</option>
        <option value="10">Cardiovascular Disease</option>
        <option value="11">Diabetis</option>
      </select>
    </div>
     <div class="form-group col-md-12">
    <label for="exampleFormControlTextarea1">Outcome</label>
    <textarea class="form-control" name="inputResult" id="inputResult" rows="3"
    placeholder="Patient Status (Recovery/Still Sick/Death)"></textarea>
    </div>
    <div class="form-group col-md-12">
    <label for="exampleFormControlTextarea1">Prescription</label>
    <textarea class="form-control" name="inputPrescripton" id="inputPrescripton" rows="3"
     placeholder="Prescribed Medicine"></textarea>
    </div>
    <div class="form-group col-md-12">
    <label for="inputEmail4">Attached (Optional)</label>
    <input type="file" class="form-control" name="userfile[]" id="userfile" multiple>
    <small id="passwordHelpBlock" class="form-text text-muted">
    </small>
    </div>
  </div>

      </div>
      <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Add Record</button>
      </div>
    </div>
  </div>
</div>

 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Report</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('template/submitReport')?>" method="POST">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">ID:</label>
            <input type="text" name="inputID" id="inputID" class="form-control" value="<?php echo $data[1]['userlist'][0]->code?>" readonly>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Title:</label>
            <input type="text" class="form-control" name="inputTitle" id="inputTitle">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" rows="3" name="inputMsg" id="inputMsg"></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Send Report</button>
             </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" data-backdrop="static" data-keyboard="false" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Record Info</h5>

      </div>
      <div class="modal-body text-center">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" onclick="javascript:window.location.reload()">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
 $(document).ready(function() {
    $("#Services").prop("disabled",true);
    var val = $("#Diagnosis option:selected").text();
      $("#inputDiagnosis").val(val+"(Diagnosis)");

    var alerta = $("#POSITION").val();

      if(alerta=="ADMIN")
      {
        $("#addnewrecord").hide();
        document.getElementById("first1").children[1].style.display = "none";
        $("#printrecord").show();

      }
      else if(alerta=="USER")
      {
        $("#addnewrecord").show();
      }
  });

$("#inputType").change(function() 
  {    
    if($(this).val()=="Checkup")
    {
       $("#Diagnosis").prop("disabled",false);
       $("#Services").prop("disabled",true);
      var val = $("#Diagnosis option:selected").text();
      $("#inputDiagnosis").val(val+"(Diagnosis)");
    }
    if($(this).val()=="FollowupCheckup")
    {
       $("#Diagnosis").prop("disabled",false);
       $("#Services").prop("disabled",true);
      var val = $("#Diagnosis option:selected").text();
      $("#inputDiagnosis").val(val+"(Diagnosis)");
    }
    if($(this).val()=="Services")
    {
       $("#Diagnosis").prop("disabled",true);
       $("#Services").prop("disabled",false);
      var val = $("#Services option:selected").text();
      $("#inputDiagnosis").val(val+"(Services)");
    }
  });

  $("#Services").change(function() 
  {    
    var val = $("#Services option:selected").text();
    $("#inputDiagnosis").val(val+"(Services)");
  });

  $("#Diagnosis").change(function() 
  {    
    var val = $("#Diagnosis option:selected").text();
    $("#inputDiagnosis").val(val+"(Diagnosis)");
  });

  $("#nav").click(function(){
    $("#exampleModal").modal('show')
  });

  $(".view").click(function(){
    $(".modal-body").empty();
     var $row = $(this).closest("tr");    // Find the row
    var $text = $row.find(".nr").text(); // Find the text
     $.ajax({
          url: '<?php echo base_url('template/getRecordInfo/'); ?>',  
          type: 'POST',
          data: {'RNo': $text},
          success: function (result) 
          {
            var parsed = JSON.parse(result);
            $.each(parsed,function(index,value)
            {
            $(".modal-body").append("<b>Record No : " +value[0]+" </b><br><br> <b> RecordType </b> <br>" + value[3] +
              "<br><br><b>Date Inserted</b><br>"+value[4]+"<br><br><b>Return Date</b><br>"+value[5]+"<br><br><b>Diagnosis</b><br>"+value[6]
              +"<br><br><b>Outcome</b><br>"+value[7]+"<br><br><b>Prescription</b><br>"+value[8]);

           $("#exampleModalCenter").modal('show')
            });
          }
        });
  });

   $(".resolve").click(function() {
    var $row = $(this).closest("tr");    // Find the row
    var $text = $row.find(".nr").text(); // Find the text
    $.ajax({
          url: '<?php echo base_url('template/viewRecord/'); ?>',  
          type: 'POST',
          data: {'RNo': $text},
          success: function (result) 
          {
            if(result==0)
            {
             $(".modal-body").html('No Attached File');
              $(".modal-body").append('<br><br><button type="button" style="float:right;" onclick="javascript:window.location.reload()" class="btn btn-secondary">Close</button>');
             $("#viewModal").modal('show')
            }
            else
            {
            var parsed = JSON.parse(result);
            $.each(parsed,function(index,value)
            {
            $('.carousel-inner .item').remove();
            $('.carousel-inner').append($('<div class="item"><img src="' + '<?php echo base_url('/assets/uploads/');?>' + value[0] + '" alt="image description" width="100%" height="250" /><div class="carousel-caption"></div></div>'));

            $("#viewModal").modal('show')
            });
            }
            }
        });
    });

</script>



<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Optional JS -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBd3PjUqq81lIOfBPYXrQGWwK5T4ystZjA"></script>
  <!-- Argon JS -->
  <script src="../../assets/js/argon.js?v=1.0.0"></script>
</body>

</html>