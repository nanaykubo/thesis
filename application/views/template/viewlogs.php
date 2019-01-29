<DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link href="../assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="../assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link type="text/css" href="../assets/css/argon.css?v=1.0.0" rel="stylesheet">
  <!-- Argon CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<!-- jQuery library -->
<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
</head>

<body>
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="../index.html">
        <img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
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
                <img alt="Image placeholder" src="../assets/img/theme/team-1-800x800.jpg">
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
                <img src="../assets/img/brand/blue.png">
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
            <a class="nav-link " href="admin">
              <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="adduser">
              <i class="fas fa-plus-circle text-green"></i> Add User
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="viewlogs">
              <i class="fas fa-users text-blue"></i> View Logs
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login">
              <i class="fas fa-sign-out-alt text-danger"></i> Log Out
            </a>
          </li>
        </ul>
         <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
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
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block">Add User</a>
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
                  <img alt="Image placeholder" src="../assets/img/theme/team-4-800x800.jpg">
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

          <!-- Button -->
     <button class="btn btn-icon btn-3 btn-secondary" data-toggle="modal" data-target="#exampleModalLong" type="button">
      <span class="btn-inner--icon"><i class="fas fa-user-plus fa-lg text-default"></i></span>
      
      <span class="btn-inner--text">Add User</span>
        </button>

            </div>
          </div>
    </div>
      
    <!-- Page content -->
      
      <div class="container mt--7">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h1 class="mb-0">View Logs</h1>
              <br/>
            <table class="table align-items-center table-flush" id="myTable">
  <thead class="thead-light">
    <tr>
      <th scope="col">Code</th>
      <th scope="col">Activity</th>
      <th scope="col">Date</th>
      <th scope="col">Middle Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Position</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      
  </tr>
  </tbody>
</table>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Patient</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <!-- tabular -->
          <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Patient Information</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Contact Information</a>
  </div>
        </nav>
<form class="needs-validation" id="testform" action="<?php echo base_url('template/submitNewRecords') ?>" method="post" novalidate> 
<div class="tab-content " id="nav-tabContent">
  <!-- patient tab -->
   <input type="hidden" name="txtHCID" id="txtHCID" value="<?php echo $data['0']['hname'][0]->HCID?>"/>
   <input type="hidden" name="inputassist" id="inputassist" value="<?php echo $data[3]['userlist'][0]->code?>"/>
   <input type="hidden" name="inputinsert" id="inputinsert" value="<?php echo date('Y-m-d'); ?>"/>
   <input type="hidden" name="inputnote" id="inputnote"/>
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
      <br/>

      <!-- body -->  <div class="form-row">
    <div class="col-md-12">
    <label for="inputAddress">ID *</label>
    <input type="text" required class="form-control" name="inputID" id="inputID" placeholder="Enter your ID (chars are not allowed)"  onkeypress='validate(event)'>
    <span id="username_result"></span>
    <div class="invalid-feedback">
          Please enter an ID
        </div>
        <br/>
  </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">First Name *</label>
      <input type="text" class="form-control" name="inputFN" id="inputFN" style="text-transform: uppercase;" placeholder="First Name" required>
      <div class="invalid-feedback">
          Please enter your First Name
        </div>
    </div>
     <div class="col-md-4 mb-3">
      <label for="validationCustom02">Middle name</label>
      <input type="text" class="form-control" name="inputMN" style="text-transform: uppercase;" id="inputMN" placeholder="Middle name">
    </div>
     <div class="col-md-4 mb-3">
      <label for="validationCustom01">Last Name *</label>
      <input type="text" class="form-control" style="text-transform: uppercase;" name="inputLN" id="inputLN" required>
      <div class="invalid-feedback">
          Please enter your Last Name
        </div>
    </div>
    <div class="col-md-4 mb-3">
    <label for="validationCustom01">Status *</label>
    <select class="custom-select" style="text-transform: uppercase;" id="inputS" name="inputS"required>
      <option>ACTIVE</option>
      <option>NOT ACTIVE</option>
    </select>
    <div class="invalid-feedback">Example invalid custom select feedback</div>
  </div>
    <div class="col-md-4 mb-3">
    <label for="validationCustom01">Sex *</label>
    <select class="custom-select" style="text-transform: uppercase;" id="inputSe" name="inputSe" required>
      <option value="">Select...</option>
      <option value="MALE">Male</option>
      <option value="FEMALE">Female</option>
    </select>
    <div class="invalid-feedback">Example invalid custom select feedback</div>
  </div>
  <div class="col-md-4 mb-3">
    <label for="validationCustom01">Religion *</label>
    <select class="custom-select" style="text-transform: uppercase;" id="inputRe" name="inputRe" required>
      <option value="CATHOLIC">Catholic</option>
      <option value="CHRISTIAN">Christian</option>
      <option value="BORN AGAIN">Born Again</option>
    </select>
    <div class="invalid-feedback">Please Select one of the following options</div>
  </div>
    <div class="col-md-4 mb-3">
    <label for="validationCustom01">Birth Date *</label>
    <input type="date" class="form-control" style="text-transform: uppercase;" name="inputBD" id="inputBD" required>
    <div class="invalid-feedback">Please enter your Birth Date</div>
  </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Type *</label>
      <input type="text" class="form-control" style="text-transform: uppercase;" name="inputType" id="inputType" placeholder="Enter a Birthdate" required readonly>
      <div class="invalid-feedback">
          Enter a Birth Date
        </div>
                </div>
        <div class="col-md-4 mb-3">
      <label for="validationCustom01">Age *</label>
      <input type="text" class="form-control" style="text-transform: uppercase;" name="inputAge" id="inputAge" placeholder="Enter a Birthdate" required readonly>
      <div class="invalid-feedback">
          Enter a Birth Date
        </div>
  </div>
  
  <div class="col-md-4 mb-3">
    <label for="validationCustom01">Nationality *</label>
    <select class="custom-select" style="text-transform: uppercase;" name="inputN" id="inputN" required>
        <option value="FILIPINO">Filipino</option>
        <option value="MARRIED">Taiwanese</option>
        <option value="ALGERIAN">Algerian</option>
    </select>
    <div class="invalid-feedback">Please Select one of the following options</div>
  </div>

  <div class="col-md-4 mb-3">
    <label for="validationCustom01">Civil Status *</label>
    <select class="custom-select" style="text-transform: uppercase;" name="inputCS" id="inputCS" required>
      <option value="SINGLE">SINGLE</option>
      <option value="MARRIED">MARRIED</option>
      <option value="WIDOW">WIDOW</option>
    </select>
    <div class="invalid-feedback">Please Select one of the following options</div>
  </div>
  <div class="col-md-4 mb-3">
      <label for="validationCustom01">Philhealth No *</label>
      <input type="text" class="form-control" style="text-transform: uppercase;" name="inputPN" id="inputPN" placeholder="Philhealth No"required>
      <div class="invalid-feedback">
          Please enter your Philhealth No
        </div>
</div>

<div class="col-md-4 mb-3">
    <label for="validationCustom01">Family Number *</label>
    <select class="custom-select" style="text-transform: uppercase;" name="inputFam" id="inputFam" required>
      <?php foreach ($data[2]['famlist'] as $test) { ?>
        <option><?php echo $test->familyno; ?>
        <?php }?></option>
        <option value="New">Add New Family...</option>
    </select>
    <small id="passwordHelpBlock" class="form-text text-muted text-center">If the family doesnt exist click add new family in the options</small>
    <div class="invalid-feedback">Please Select one of the following options</div>
    </div>
<div class="col-md-4 mb-3">
      <label for="validationCustom01">Relation</label>
      <select class="custom-select" style="text-transform: uppercase;" name="inputRel" id="inputRel" required>
          <option value="Daughter">Daughter</option>
          <option value="Son">Son</option>
          <option value="Nephew">Nephew</option>
      </select>
      <div class="invalid-feedback">
        </div>
      </div>
    </div>

  </div>
  <!-- body -->
  <!-- contact tab -->
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
<br/>
  <div class="form-row">
    <div class="col-md-12 mb-3">
    <label for="inputAddress">Permanent Address *</label>     
    <input type="text" required class="form-control" style="text-transform: uppercase;" id="inputAdd" name="inputAdd" placeholder="(House/Bldg. No., Street, Subdivision" required>
    <div class="invalid-feedback">
          Please your House/Bldg, No. , Street, Subdivision
        </div>
      </div>
      <div class="col-md-4 mb-3">
    <label for="validationCustom01">Brgy *</label>
    <select class="custom-select" style="text-transform: uppercase;" id="inputBrgy" name="inputBrgy" required>
      <option value="">Select Brgy...</option>
      <?php foreach ($data[1]['brgylist'] as $test) { ?>
        <option><?php echo $test->BRGYID; ?>
        <?php }?></option>
    </select>
    <div class="invalid-feedback">Please Select one of the following options</div>
  </div>
  <div class="col-md-4 mb-3">
    <label for="validationCustom01">St *</label>
    <select class="custom-select" style="text-transform: uppercase;" id="inputSt" name="inputSt" required>
          <option value="TAGUIG">Taguig</option>
          <option value="MAKATI">Makati</option>
          <option value="MANILA">Manila</option>
    </select>
    <div class="invalid-feedback">Please Select one of the following options</div>
  </div>
    <div class="col-md-4 mb-3">
    <label for="validationCustom01">City/Municipality *</label>
    <select class="custom-select" style="text-transform: uppercase;" id="inputC" name="inputC" required>
          <option value="TAGUIG">Taguig</option>
          <option value="MAKATI">Makati</option>
          <option value="MANILA">Manila</option>
    </select>
    <div class="invalid-feedback">Please Select one of the following options</div>
  </div>
        <div class="col-md-4 mb-3">
      <label for="validationCustom01">Zip Code *</label>
      <input type="text" class="form-control" style="text-transform: uppercase;" id="inputZ" name="inputZ" placeholder="Zip Code" required>
      <div class="invalid-feedback">
          Please enter ZipCode
        </div>
    </div>

    <div class="col-md-4">
      <label for="validationCustom01">Mobile/Landline *</label>
      <input type="text" class="form-control" style="text-transform: uppercase;" id="inputM" name="inputM" placeholder="Mobile" required>
      <div class="invalid-feedback">
          Please enter Mobile
        </div>
    </div>

     <div class="col-md-4 mb-3">
      <label for="validationCustom01">Assisted By :  *</label>
      <input type="text" class="form-control" name="inputAssist" id="inputAssist" 
      value="<?php echo strtoupper($data[3]['userlist'][0]->FN) ?> <?php echo strtoupper($data[3]['userlist'][0]->LN) ?>" readonly>
       </div>

    <div class="col-md-12">
      <label for="validationCustom01">Remarks *</label>
    <textarea class="form-control" style="text-transform: uppercase;" id="inputR" name="inputR" rows="4"></textarea>
    </div>

    <div class="form-group">
    
  </div>

      <!-- body -->

  </div>
</div>
  
      <!-- body -->
      </div>
      <div class="modal-footer">
        <div class="form-group">
  </div>
  <button class="btn btn-primary" type="submit">Submit</button>
      </div>
    </div>
  </div>
</div>

<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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

<script>
  $(document).ready(function() {
    var table= $('#myTable').DataTable({
      "ajax": '<?php echo base_url('template/getallLogs'); ?>',
      "type": 'GET',
      //Set column definition initialisation properties.
            "columnDefs": [
                {"targets":-1,"data": null,'defaultContent': '<div class="dropdown"><a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a><div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow"><button id="update" class="dropdown-item"><i class="fas fa-user-edit"></i></i>Edit User</button><button id="account" class="dropdown-item"><i class="fas fa-lock"></i></i>Account Details</button></div></div>'},
                {
      "targets": [1,2,3,4,5,6],
      "orderable": false}
            ]
    });
  });
  </script>
</body>

</html>