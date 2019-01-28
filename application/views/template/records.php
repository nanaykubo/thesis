<?php
$connect = mysqli_connect("localhost","root","","demo");
if(isset($_POST["insert"]))
{
  $file = addslashes(file_get_contents($_FILES["file"]["tmp_name"]));
  $query = "INSERT INTO precords(ID,HCID,RecordType,DATE,RETURNDATE,RESULT,PRESCRIPTION,Attached) 
   VALUES ('".$_POST['txtID']."'
   ,'".$_POST['txt_HCID']."'
   ,'".$_POST['inputType']."'
   ,'".$_POST['inputDate']."'
   ,'".$_POST['inputReturn']."'
   ,'".$_POST['inputResult']."'
   ,'".$_POST['inputPrescripton']."'
   ,'$file')";
  $qry = mysqli_query($connect, $query);
  echo "<meta http-equiv='refresh' content='0'>";
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link href="../../assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="../../assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="../../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="../../assets/css/argon.css?v=1.0.0" rel="stylesheet">
</head>

<body>
  <!-- Sidenav -->
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="../index.html">
        <img src="../../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
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
                <img src="../../assets/img/brand/blue.png">
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
            <a class="nav-link" href="<?php echo base_url('template/logged') ?>">
              <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="<?php echo base_url('template/addpatient') ?>">
              <i class="fas fa-plus-circle text-green"></i> Add Patient
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('template/family') ?>">
              <i class="fas fa-users text-blue"></i> List of Families
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('template/reports') ?>">
              <i class="fas fa-file-signature text-info"></i> Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('template/login') ?>">
              <i class="fas fa-sign-out-alt text-danger"></i> Log Out
            </a>
          </li>
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">Documentation</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ni ni-spaceship"></i> User Guide
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fas fa-info-circle"></i> About Us
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fas fa-phone"></i> Contact Support
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url('template/addpatient') ?>">Add Patient</a></li>
        <li class="breadcrumb-item active" aria-current="page">Medical Records</li>
      </ol>
      </nav>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            
          </div>
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
                  <span class="mb-0 text-sm  font-weight-bold">Jessica Jones</span>
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


    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
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
    <button class="btn btn-icon btn-3 btn-secondary" data-toggle="modal" data-target="#myModal" type="button">
      <span class="btn-inner--icon"><i class="fas fa-file-medical fa-lg text-default"></i></i></span>
      
      <span class="btn-inner--text">Add New Record</span>
        </button>
  </div>
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

            </div>
            <!-- body -->

            <table class="table table-hover text-center">
  <thead>
    <tr>
      <th scope="col">Record No</th>
      <th scope="col">Record Type</th>
      <th scope="col">Date Inserted</th>
      <th scope="col">Return Date</th>
      <th scope="col">Result</th>
      <th scope="col">Prescription</th>
      <th scope="col">Attached</th>
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
      <td><?php echo $test->recordno; ?></td>
      <td><?php echo $test->RecordType; ?></td>
      <td><?php echo $test->DATE; ?></td>
      <td><?php echo $test->RETURNDATE; ?></td>
      <td><?php echo $test->RESULT; ?></td>
      <td><?php echo $test->PRESCRIPTION; ?></td>
      <td><?php echo $test->Attached; ?></td>
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


<div class="modal" id="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
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

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputState">Record Type</label>
      <select id="inputType" name="inputType" class="form-control">
        <option value="Checkup">Checkup</option>
        <option value="Service">Service</option>
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
     <div class="form-group col-md-12">
    <label for="exampleFormControlTextarea1">Result</label>
    <textarea class="form-control" name="inputResult" id="inputResult" rows="3"></textarea>
    </div>
    <div class="form-group col-md-12">
    <label for="exampleFormControlTextarea1">Prescription</label>
    <textarea class="form-control" name="inputPrescripton" id="inputPrescripton" rows="3"></textarea>
    </div>
    <div class="form-group col-md-12">
    <label for="inputEmail4">Attached (Optional)</label>
    <input type="file" class="form-control" name="inputBlob" id="inputBlob">
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