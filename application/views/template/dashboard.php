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
            <a class="nav-link active" href="logged">
              <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="adduser">
              <i class="fas fa-user-plus text-green"> </i> Add User
            </a>
         </li>   
          <li class="nav-item">
            <a class="nav-link" href="addpatient">
           <i class="fas fa-eye text-orange"></i>View Patients
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="viewlogs">
             <i class="fas fa-window-restore text-info"></i> Info Recovery
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="reports">
             <i class="fas fa-chart-bar text-yellow"></i> Reports
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
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block">DashBoard</a>
        <!-- Form -->
       

       
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
          <!-- Card stats -->
          <div class="row">
             <div class="col-xl-5 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Top Disease of the Month</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo$data[3]?></span>
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
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Patients</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo$data[1]?></span>
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
                      <h5 class="card-title text-uppercase text-muted mb-0">Families</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo$data[2]?></span>
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

    <!-- No of Families in the Barangay -->
     <div class="row">
  <div class="col-xl-6">
   <div class="card text-center">
    <div class="card-header">
    <h3>Families</h3>
    </div>
      <div class="card-body">
      <div class="row">
<div id="pieChart" style="width: 100%; height: 300px;"></div>
     </div>
      </div>
    </div>
  </div>

  <div class="col-xl-6">
    <div class="card text-center">
    <div class="card-header">
       <h3>Patients</h3>
    </div>
      <div class="card-body">
       <div class="row">
<div id="barChart" style="width: 100%; height: 300px;"></div>
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
            <select id="inputTitle" name="inputTitle" class="custom-select" required>
            <option value="Dashboard">Dashboard</option>
            <option value="Patient">Patient</option>
            <option value="Family">Family</option>
            <option value="Reports">Reports</option>
            </select>
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
window.onload = function() {

var families = new Array();
var patients = new Array();
var a = new Array();
var b = new Array();
var c = new Array();
var d = new Array();
var e = new Array();
var f = new Array();
var g = new Array();
var h = new Array();
var i = new Array();
var j = new Array();
var k = new Array();

var chart3 = new CanvasJS.Chart("lineChart", {
  theme:"light2",
  animationEnabled: true,
  title:{
    
  },
  axisY :{
    includeZero: false,
    title: "Number of Viewers"
  },
  toolTip: {
    shared: "true"
  },
  legend:{
    cursor:"pointer",
    itemclick : toggleDataSeries
  },
  data: [{
    type: "spline",
    showInLegend: true,
    name: "Conjuctivitis",
    dataPoints: a
  },
  {
    type: "spline", 
    showInLegend: true,
    name: "Pnuemonia",
    dataPoints: b
  },
  {
    type: "spline", 
    showInLegend: true,
    name: "Hypertension",
    dataPoints: c
  },
  {
    type: "spline", 
    showInLegend: true,
    name: "Vaginitis",
    dataPoints: d
  },
  {
    type: "spline", 
    showInLegend: true,
    name: "Diabetis",
    dataPoints: e
  },
  {
    type: "spline", 
    showInLegend: true,
    name: "URTI",
    dataPoints: f
  },
  {
    type: "spline", 
    showInLegend: true,
    name: "Diarrehea",
    dataPoints: g
  },
  {
    type: "spline", 
    showInLegend: true,
    name: "Arthritis",
    dataPoints: h
  },
  {
    type: "spline", 
    showInLegend: true,
    name: "SoreThroat",
    dataPoints: i
  },
  {
    type: "spline", 
    showInLegend: true,
    name: "UTI",
    dataPoints: j
  },
  {
    type: "spline", 
    showInLegend: true,
    name: "PrimaryTB",
    dataPoints: k
  }
  ]
});

function toggleDataSeries(e) {
  if (typeof(e.dataSeries.visible) === "0" || e.dataSeries.visible ){
    e.dataSeries.visible = false;
  } else {
    e.dataSeries.visible = true;
  }
  chart3.render();
}

var chart2 = new CanvasJS.Chart("barChart",{
  animationEnabled: true,
      theme: "light2",
    title :{
  text: "Total Patients"
    },
      axisY: {
    title: "No of Patients",
    titleFontSize: 24
  },
    data: [{
  type: "column",
  dataPoints : patients
    }]
});

var chart1  = new CanvasJS.Chart("pieChart", {
  animationEnabled: true,
  theme: "light2",
  title: {
    text: "No. of Families in the Barangay"
  },
  axisY: {
    title: "UnidataPointsts",
    titleFontSize: 24
  },
  data: [{
    type: "pie",
    showInLegend: true,
    indexLabelFontSize: 18,
    radius: 80,
    toolTipContent: "{name}:<strong>{y}</strong>",
    indexLabel: "BRGY "+"{name} - {y}",
    dataPoints: families
  }]
});

function Data1(data) {
   $.each(data, function(key, value){
        families.push({name: value[0], y: parseInt(value[1])});
    });
     chart1.render();
}

function Data2(data) {
  $.each(data, function(key, value){
        patients.push({label: value[0], y: parseInt(value[1])});
    });
  chart2.render();
}

function Data3(data) {
  $.each(data, function(key, value){
        a.push({label: value[0], y: parseInt(value[1])});
        b.push({label: value[0], y: parseInt(value[2])});
        c.push({label: value[0], y: parseInt(value[3])});
        d.push({label: value[0], y: parseInt(value[4])});
        e.push({label: value[0], y: parseInt(value[5])});
        f.push({label: value[0], y: parseInt(value[6])});
        g.push({label: value[0], y: parseInt(value[7])});
        h.push({label: value[0], y: parseInt(value[8])});
        i.push({label: value[0], y: parseInt(value[9])});
        j.push({label: value[0], y: parseInt(value[10])});
        k.push({label: value[0], y: parseInt(value[11])});
    });
  chart3.render();
}

$.getJSON("<?php echo base_url('Template/getpie/'.$data[0]['userlist'][0]->HCID) ?>", Data1);
$.getJSON("<?php echo base_url('Template/getBarChart/'.$data[0]['userlist'][0]->HCID) ?>", Data2);
$.getJSON("<?php echo base_url('Template/getline/'.$data[0]['userlist'][0]->HCID) ?>", Data3);

}
</script>
  <script>
  $(document).ready(function() {
    $('#myTable').DataTable({
      "ajax": '<?php echo base_url('template/getLogs/'.$data[0]['userlist'][0]->code); ?>',
      "type": 'POST',
      "searching":false,
      "info":false,
      "bLengthChange": false,
      "pageLength": 11,
       order: [[1, 'desc']],
    //Set column definition initialisation properties.
            "columnDefs": [
                { "width": "40%", "targets": [1]},
                { "width": "60%", "targets": [0], "orderable":false },
                {"className": "dt-center", "targets": "_all"}
                        ]
    });

    $("#nav").click(function(){
      $("#exampleModal").modal('show')
    });

          $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      })

    });
  </script>
</body>

</html>