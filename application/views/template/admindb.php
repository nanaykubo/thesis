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
      <a class="navbar-brand pt-0" href="../index.html">
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
            <a class="nav-link active" href="admin">
              <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="adduser">
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
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block">ADMIN DASHBOARD</a>
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
                   <span class="mb-0 text-sm  font-weight-bold"><?php echo strtoupper($data[0]['user'][0]->FN) ?> <?php echo strtoupper($data[0]['user'][0]->LN) ?></span>
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
        </div>
          <!-- Card stats -->
          <div class="row">
             <div class="col-xl-4 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total Users</h5>
                      <span class="h2 font-weight-bold mb-0">Malaria</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="fas fa-chart-pie"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-nowrap" id="username_result"></span>
                    <span >Checked 50 mins ago</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total Info Deleted</h5>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-primary text-white rounded-circle shadow">
                        <i class="fas fa-chart-bar"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-nowrap" id="username_result"></span>
                    <span >Added Patient 20 mins ago</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total Reports</h5>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-nowrap" id="username_result"></span>
                    <span >Added Family 10 mins ago</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


  <!-- Disease -->
    <div class="container-fluid mt--7">
      <div class="card text-center">
        <div class="card-header">
       <h1>Top Infectious Disease News of the Month Chart<h1>
  </div>
        <div class="card-body">
      <div class="row">
<div id="lineChart" style="width: 100%; height: 300px;"></div>
     </div>
   </div>
 </div>
 <br>

  <div class="row">
  <div class="col-xl-6">
   <div class="card text-center">
    <div class="card-header">
    <h3>List of Reports</h3>
    </div>
      <div class="card-body text-center">
      <div class="row">
<table id="table" class="table table-hover">
              <thead>
              <th scope="col" width="10px">Report No</th>
              <th scope="col" width="10px">ID</th>
              <th scope="col" >Title</th>
              <th scope="col" width="10px">Actions</th>
              </thead>
              <tbody>
              <?php
              //retrive parameters from Test.php controller
              if($data[1]['reports'][0])
              {
              //set dataset info to variable test
              foreach ($data[1]['reports'] as $test) 
              //get header ID and print out each
              {
              ?>
              <td class="nr"><?php echo $test->reportno; ?></td>
              <td><?php echo $test->ID; ?></td>
              <td><?php echo $test->Title; ?></td>
              <td><a href="#" class="message" data-toggle="tooltip" data-placement="top" title="Message"><i class="fas fa-envelope fa-lg text-orange"></i></a>
              <a href="" class="resolve" style="margin-left: 20px;" data-toggle="tooltip" data-placement="top" title="Resolve"><i class="fas fa-check-double fa-lg text-green"></i></a></td>
              </tbody>
              <?php
              //continuation to loop all in the dataset to the body

              }

              }
              ?>    
            </table>
     </div>
      </div>
    </div>
  </div>
  <div class="col-xl-6">
    <div class="card text-center">
    <div class="card-header">
       <h3>Admin Activity</h3>
    </div>
      <div class="card-body">
       <div class="row">
<div id="barChart" style="width: 100%; height: 300px;"></div>
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




<div class="modal" id="ViewMessage" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <textarea class="form-control" rows="5" id="comment"></textarea>
        <input type="hidden" name="inputinsert" id="inputinsert" value="<?php echo date('Y-m-d H:i:s'); ?>"/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
              

    <!-- Page content -->

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
  <script>
  $(document).ready(function() {
$(".message").click(function() {
    var $row = $(this).closest("tr");    
    var $text = $row.find(".nr").text(); 
    $.ajax({
    url: '<?php echo base_url('template/getMessage/'); ?>', 
    type: 'POST',
    data: {'Rno': $text},
    success: function (result) {  
    var value = JSON.parse(result);
    $(".modal-body #comment").val(value);
    $("#ViewMessage").modal('show')
    }
    }); 
  
});  

$(".resolve").click(function() {
    var $row = $(this).closest("tr");    
    var $text = $row.find(".nr").text(); 
    var code = <?php echo $data[0]['user'][0]->code?>;
    var date = $('#inputinsert').val();
    $.ajax({
    url: '<?php echo base_url('template/Resolve/'); ?>', 
    type: 'POST',
    data: {'Rno': $text,'Code':code,'Date':date}
    }); 
});  

});

     
  </script>
</body>

</html>