<DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
 <title>MedRec Tracking System</title>
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

<body style="background: white;">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="admin">
        <img src="../assets/img/brand/a.png" width="150" height="150" class="navbar-brand-img" alt="...">
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
            <a class="nav-link active" href="adduser">
              <i class="fas fa-plus-circle text-green"></i> Add User
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="addhc">
             <i class="fas fa-hospital text-orange"></i> Health Centers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="viewlogs">
             <i class="fas fa-window-restore text-info"></i> Info Recovery
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
                 <span class="mb-0 text-sm  font-weight-bold"><?php echo strtoupper($data[1]['get'][0]->FN) ?> <?php echo strtoupper($data[1]['get'][0]->LN) ?></span>
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

          <!-- Button -->
     <button class="btn btn-icon btn-3 btn-secondary" id="editUser" data-toggle="modal" data-target="#exampleModalLong" type="button">
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
              <h1 class="mb-0">Patients</h1>
              <br/>
            <table class="table align-items-center table-flush" id="myTable">
  <thead class="thead-light">
    <tr>
      <th scope="col">Code</th>
      <th scope="col">HCID</th>
      <th scope="col">First Name</th>
      <th scope="col">Middle Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Position</th>
      <th scope="col">Actions</th>
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
        <h5 class="modal-title" id="exampleModalLongTitle" id="adduser">Add User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" id="testform" action="<?php echo base_url('template/submitUser') ?>" method="post" novalidate>
          <input type="hidden" name="inputinsert" id="inputinsert" value="<?php echo date('Y-m-d'); ?>"/>
          <input type="hidden" name="inputnote" id="inputnote"/>
          <input type="hidden" name="inputassist" id="inputassist" value="<?php echo $data[1]['get'][0]->code; ?>"/>
           <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Code</label>
      <input type="text" class="form-control" id="inputCode" name="inputCode" placeholder="Code" required>
      <div class="invalid-feedback">
        Please provide details.
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Health Center ID (HCID)</label>
      <select id="inputHCID" name="inputHCID" class="custom-select" required>
      <option value="">Select HCID...</option>
      <?php foreach ($data[0]['hcid'] as $test) { ?>
        <option><?php echo $test->HCID; ?>
        <?php }?></option>
      </select>
     <div class="invalid-feedback">Example invalid custom select feedback</div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">First name</label>
      <input type="text" class="form-control" id="inputFN" name="inputFN" placeholder="First name" required>
      <div class="invalid-feedback">
        Please provide details.
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Middle name</label>
      <input type="text" class="form-control" id="inputMN" name="inputMN" placeholder="Middle name"  required>
      <div class="invalid-feedback">
        Please provide details.
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Last name</label>
      <input type="text" class="form-control" id="inputLN" name="inputLN" placeholder="Last name" required>
      <div class="invalid-feedback">
        Please provide details.
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Username</label>
      <input type="text" class="form-control" id="inputUser" name="inputUser" placeholder="Username" required>
      <div class="invalid-feedback">
        Please provide details.
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Password</label>
      <input type="text" class="form-control" id="inputPass" name="inputPass" placeholder="Password" required>
      <div class="invalid-feedback">
        Please provide details.
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-12 mb-3">
      <label for="validationCustom02">Position</label>
      <select id="Position" name="Position" class="custom-select" required>
      <option value="">Select Position...</option>
      <option value="NURSE">NURSE</option>
      <option value="DOCTOR">DOCTOR</option>
      </select>
     <div class="invalid-feedback">Example invalid custom select feedback</div>
    </div>
  </div>
  <button class="btn btn-primary" id="buttonuser" style="float:right;"type="submit">Add User</button>
</form>

        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<div class="modal fade" data-backdrop="static" data-keyboard="false"id="myModal" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel">
<span aria-hidden="true">×</span>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Account Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      
      <div class="modal-body">
         <form action="<?php echo base_url('template/insertlogs') ?>" method="post">
          <input type="hidden" name="inputinsert" id="inputinsert" value="<?php echo date('Y-m-d'); ?>"/>
          <input type="hidden" name="inputnote" id="inputnote" value=""/>
          <input type="hidden" name="inputassist" id="inputassist" value="<?php echo $data[1]['get'][0]->code; ?>"/>      
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email:</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticUser" value="">
    </div>
  </div>
  <div class="form-group row">
   <label for="staticEmail" class="col-sm-2 col-form-label">Password:</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticPass" value="">
    </div>
      </div>
      <div class="modal-footer">
          <button type="submit" class="btn btn-secondary">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>

<div class="modal fade" id="exampleModalCenter"  data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        <table class="table" id="logs">
  <thead>
    <tr>
      <th scope="col">Activity</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody></tbody>
</table>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
      "ajax": '<?php echo base_url('template/getallUsers'); ?>',
      "type": 'GET',
      //Set column definition initialisation properties.
            "columnDefs": [
                {"targets":-1,"data": null,'defaultContent': '<div class="dropdown"><a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a><div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow"><button id="logs" class="dropdown-item"><i class="fa fa-history" aria-hidden="true"></i>View Logs</button><button id="update" class="dropdown-item"><i class="fas fa-user-edit"></i></i>Edit User</button><button id="account" class="dropdown-item"><i class="fas fa-lock"></i></i>Account Details</button></div></div>'},
                {
      "targets": [1,2,3,4,5,6],
      "orderable": false}
            ]
    });

    $("#editUser").on("click",function(){

            $("#inputCode").prop("readonly",false);
     });

    $('#myTable tbody').on( 'click', 'button', function (e) {
            var data = table.row($(this).parents('tr') ).data();
            var action=this.id;
            var code = data[0];
             $("#logs tbody").empty();
            if (action=='logs')
            {
            $.ajax({
            url: '<?php echo base_url('template/getallLogs2/'); ?>', 
            type: 'POST',
            data: {'code': code},
            success: function (result) {
            var parsed= JSON.parse(result);        
            $.each(parsed,function(index,value)
                  {
                    $(".modal-body #logs tbody").append("<tr><td>"+value[0]+"</td>+<td>"+value[1]+"</td></tr>");
                    $("#exampleModalCenter").modal('show')
                  });
            }

            });
            }
            if (action=='account')
            {
              $.ajax({
            url: '<?php echo base_url('template/editUser/'); ?>',  
            type: 'POST',
            data: {'code': code},
            success: function (result) { 
            var parsed= JSON.parse(result);           
            $.each(parsed,function(index,value)
                  {
                    $(".modal-body #inputnote").val("VIEW ACCOUNT DETAILS "+value[6] + " " +value[5]);
                    $(".modal-body #staticUser").val(value[2]);
                    $(".modal-body #staticPass").val(value[3]);
                    $(".modal-body #buttonuser").html('Edit User');

                    $("#myModal").modal('show')
                  });
            },
            error: function(jqXHR, textStatus, errorThrown) {
               console.log(textStatus, errorThrown);
            }
            });
            }
            if (action=='update')
            {
            $.ajax({
            url: '<?php echo base_url('template/editUser/'); ?>', 
            type: 'POST',
            data: {'code': code},
            success: function (result) {
            var parsed= JSON.parse(result);              
            $.each(parsed,function(index,value)
                  {
                    $(".modal-body #inputCode").val(value[0]);
                    $(".modal-body #inputHCID").val(value[1]).change();
                    $(".modal-body #inputFN").val(value[4]);
                    $(".modal-body #inputMN").val(value[5]);
                    $(".modal-body #inputLN").val(value[6]);
                    $(".modal-body #inputUser").val(value[2]);
                    $(".modal-body #inputPass").val(value[3]);
                    $(".modal-body #Position").val(value[7]).change();
                    
                    $("#inputCode").prop("readonly",true);
                    
                    $("#exampleModalLong").modal('show')

                    $("#testform").attr("action",'<?php echo base_url('template/updateUser') ?>');
                  });
            },
            error: function(jqXHR, textStatus, errorThrown) {
               console.log(textStatus, errorThrown);
            }
            });
            }
            });
               });
 
  </script>
</body>

</html>