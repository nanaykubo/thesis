<!DOCTYPE html>
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
  <!-- Argon CSS -->
  <link type="text/css" href="../assets/css/argon.css?v=1.0.0" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
</head>

<body style="background: white;">
  <!-- Sidenav -->
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="logged">
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
              <a href="logged">
                <img src="../assets/img/brand/a.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
              </button>
            </div>
          </div>
        </div>
        
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="logged">
              <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="addpatient">
              <i class="fas fa-plus-circle text-green"></i> Add Patient
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="family">
              <i class="fas fa-users text-blue"></i> List of Families
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="reports">
              <i class="fas fa-file-signature text-info"></i> Reports
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

  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block">Users Profile</a>
        <!-- Form -->
        <form style="margin-left: 303px;">
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
           <a href="profile#profile-tab" data-toggle="tooltip" data-placement="top" title="Notifications"><i class="fas fa-bell fa-lg text-white"></i></a>
        </form>
        <form class="navbar-search mr-3 d-none d-md-flex">
          <a href="profile#home-tab" data-toggle="tooltip" data-placement="top" title="Activities"><i class="fas fa-clipboard-list fa-lg text-white"></i></a>
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
                  <span class="mb-0 text-sm  font-weight-bold"><?php echo strtoupper($data[0]['userlist'][0]->FN) ?> <?php echo strtoupper($data[0]['userlist'][0]->LN) ?></span>
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
          <div class="row">
          </div>

          </div>
        </div>
      </div>

    <!-- Disease -->
    <div class="container-fluid mt--9">
      <div class="card text-center">
        <div class="card-header">
       <h1>Users Profile<h1>
  </div>
        <div class="card-body">
     <div class="row">
  <div class="col-xl-6">
   <div class="card text-center">
    <div class="card-header">
      <img alt="Image placeholder" style="border-radius: 50%; height: 180px;"src="../assets/img/theme/team-4-800x800.jpg">
    <button type="button" id="edit" class="btn btn-primary btn-sm" style="width: 120px; margin-left:300px;">Edit Profile</button>
    </div>
   
      <div class="card-body">
      <div class="row">
<form action="<?php echo base_url('template/updateProfile')?>" method="POST">
      <input type="text" id="code" name="code" class="form-control" placeholder="Code" value="<?php echo strtoupper($data[0]['userlist'][0]->code) ?>" readonly>
    <br>
  <div class="row">
    <div class="col">
       <input type="hidden" name="inputinsert" id="inputinsert" value="<?php echo date('Y-m-d H:i:s'); ?>"/>
      <input type="text" id="inputFN" name="inputFN" class="form-control" placeholder="First name"
      value="<?php echo strtoupper($data[0]['userlist'][0]->FN) ?>" readonly>
    </div>
    <div class="col">
      <input type="text" id="inputMN" name="inputMN" class="form-control" value="<?php echo strtoupper($data[0]['userlist'][0]->MN) ?>" placeholder="Middle name" readonly>
    </div>
    <div class="col">
      <input type="text" id="inputLN" name="inputLN"  class="form-control" value="<?php echo strtoupper($data[0]['userlist'][0]->LN) ?>" placeholder="Last name" readonly>
    </div>
  </div>
  <br>
      <input type="text" id="Position" name="Position" class="form-control" value="<?php echo strtoupper($data[0]['userlist'][0]->POSITION) ?>" placeholder="Position" readonly>
      <br>
      <input type="text" id="HC" name="HC" class="form-control" placeholder="Health Center" 
      value="<?php echo strtoupper($data[1]['hname'][0]->Name) ?>"readonly>
      <br>
      <div class="row">
    <div class="col">
      <input type="text" class="form-control" id="user" name="user" placeholder="Username" readonly>
    </div>
    <div class="col">
      <input type="password" class="form-control" placeholder="Password" readonly>
    </div>
  </div>
   <button type="submit" id="save" class="btn btn-primary" style="width: 120px; margin-top:20px;">Save Profile</button>
</form>
     </div>
      </div>
    </div>
  </div>

  <div class="col-xl-6">
    <div class="card text-center">
    <div class="card-header">
       <h3>Activities</h3>
    </div>
      <div class="card-body">
       <div class="row">
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Activities</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Notifications</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
<table class="table" id="myTable" width="65%">
  <thead>
    <tr>
      <th scope="col">Activities</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    
  </tbody>
</table>
</div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  <table class="table" id="profTable" width="450px">
  <thead>
    <tr>
      <th scope="col">Report No.</th>
      <th scope="col">Title</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    
  </tbody>
</table>
</div>
</div>
     </div>
      </div>
  </div>
</div>
</div>
</div>
</div>



<!-- FOOTER -->
      <footer class="footer" style="background-color: white;">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2018-2019 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">MEDRECTrackingSystem</a>
            </div>
          </div>
            </ul>
          </div>
        </div>
      </footer>
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
            <input type="text" name="inputID" id="inputID" class="form-control" value="<?php echo $data[0]['userlist'][0]->code?>" readonly>
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


 <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Optional JS -->
  <script src="../assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="../assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.0.0"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  <script>
  $(document).ready(function() {
    $("#save").hide();
     var table =$('#myTable').DataTable({
      "ajax": '<?php echo base_url('template/getLogs/'.$data[0]['userlist'][0]->code); ?>',
      "type": 'POST',
      "searching":false,
      "info":false,
      "bLengthChange": false,
      "pageLength": 9,
       order: [[1, 'desc']],
    //Set column definition initialisation properties.
            "columnDefs": [
                { "width": "40%", "targets": [1]},
                { "width": "60%", "targets": [0], "orderable":false },
                {"className": "dt-center", "targets": "_all"}
                        ]
    });

    var table1 =$('#profTable').DataTable({
      "ajax": '<?php echo base_url('template/getNotif/'.$data[0]['userlist'][0]->code); ?>',
      "type": 'POST',
      "searching":false,
      "info":false,
      "bLengthChange": false,
      "pageLength": 9,
       order: [[0, 'desc']],
    //Set column definition initialisation properties.
            "columnDefs": [
                { "width": "40%", "targets": [0]},
                { "width": "60%", "targets": [1,2], "orderable":false },
                {"className": "dt-center", "targets": "_all"}
                        ]
    });

    $("#home-tab").click(function(){
      table.destroy();
      var table =$('#myTable').DataTable({
      "ajax": '<?php echo base_url('template/getLogs/'.$data[0]['userlist'][0]->code); ?>',
      "type": 'POST',
      "searching":false,
      "info":false,
      "bLengthChange": false,
      "pageLength": 9,
       order: [[1, 'desc']],
    //Set column definition initialisation properties.
            "columnDefs": [
                { "width": "40%", "targets": [1]},
                { "width": "60%", "targets": [0], "orderable":false },
                {"className": "dt-center", "targets": "_all"}
                        ]
    });
    });

    $("#profile-tab").click(function(){
      table1.destroy();
      var table1= $('#profTable').DataTable(
      {
      "ajax": '<?php echo base_url('template/getNotif/'.$data[0]['userlist'][0]->code); ?>',
      "type": 'POST',
      "searching":false,
      "info":false,
      "bLengthChange": false,
      "pageLength": 9,
      order: [[0, 'desc']],
      "columnDefs": [
                { "width": "40%", "targets": [0]},
                { "width": "60%", "targets": [1,2], "orderable":false },
                {"className": "dt-center", "targets": "_all"}
                        ]
      }
      )
    });

    $("#nav").click(function(){
      $("#exampleModal").modal('show')
    });

    $("#edit").click(function(){ 
       $("#inputFN").attr("readonly", false); 
       $("#inputMN").attr("readonly", false); 
       $("#inputLN").attr("readonly", false); 
       $("#save").show();
    });
          $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      })
    });
  </script>
</body>

</html>