<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Medical Record Tracking System</title>
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
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>

</head>

<body style="background-color: white;">
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
                <img src="../assets/img/brand/a.png" width="150" height="150" class="navbar-brand-img" alt="...">
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
         <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " href="logged">
              <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  " href="adduser">
              <i class="fas fa-user-plus text-green"> </i> Add User
            </a>
         </li>   
          <li class="nav-item">
            <a class="nav-link " href="addpatient">
           <i class="fas fa-eye text-orange"></i>View Patients
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="viewlogs">
             <i class="fas fa-window-restore text-info"></i> Info Recovery
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="reports">
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
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block">Reports</a>
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
                <span class="mb-0 text-sm  font-weight-bold"><?php echo strtoupper($userlist[0]->FN) ?> <?php echo strtoupper($userlist[0]->LN) ?></span>                                        
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
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--9">
      <div class="row">
        <div class="col">

        <div class="card">
        <div class="card-header" id="headingOne">
        <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Report Options
        </button>
        </h5>
        </div>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
        <div class="card-body">
            <form>  
          <div class="row">

          <div class="col">
          <label for="selectHC">Select Health Center..</label>
          <select id="selectHC" class="form-control form-control-sm ">
          <option value="1">Cases of Diseases</option>
          <option value="2">No of Families in Barangay</option>
          <option value="3">No of Patients</option>
          </select>
          </div>

          </div>
          <div class="row">

          <div class="col">
          <label for="selectReport">Select Reports..</label>
          <select id="inputSelect" class="form-control form-control-sm ">
          <option value="1">Cases of Diseases</option>
          <option value="2">No of Families in Barangay</option>
          <option value="3">No of Patients</option>
          </select>
          </div>

          </div>
          <div class="row">

          <div class="col-md-4">
          <label for="selectReport">Reporting Period</label>
          <select id="inputReport" class="form-control form-control-sm ">
          <option value="Annual">Annual</option>
          <option value="Quarterly">Quarterly</option>
          <option value="Monthly">Monthly</option>
          <option value="Custom">Custom Period</option>
          </select>
          </div>

          </div>
      
          <div class="row">
          <div class="col-md-4">
          <label for="Year">Year</label>
          <select id="inputYear" class="form-control form-control-sm ">
          <option value="2019">2019</option>
          </select>
          </div>

          <div class="col-md-4">
          <label for="Quarter">Quarter</label>
          <select id="inputQuarter" class="form-control form-control-sm ">
          <option value="1">1st Quarter</option>
          <option value="2">2nd Quarter</option>
          <option value="3">3rd Quarter</option>
          <option value="4">4th Quarter</option>
          </select>
          </div>

          <div class="col-md-4">
          <label for="Months">Month</label>
          <select id="inputMonth" class="form-control form-control-sm ">
          <option value="1">January</option>
          <option value="2">February</option>
          <option value="3">March</option>
          <option value="4">April</option>
          <option value="5">May</option>
          <option value="6">June</option>
          <option value="7">July</option>
          <option value="8">August</option>
          <option value="9">September</option>
          <option value="10">October</option>
          <option value="11">November</option>
          <option value="12">December</option>
          </select>
          </div>

          </div>
          <br>
          <h3>Custom Period:</h3>
          <div class="row">

          <div class="col">
          <label for="txtStartDate">Start Date</label>
          <input type="date" class="form-control form-control-sm " id="txtStartDate">
          </div>

          <div class="col">
          <label for="txtEndDate">End Date</label>
          <input type="date" class="form-control form-control-sm "id="txtEndDate">
          </div>

          </div>
          <br>

          <div class="container">
          <div class="row">
          <div class="col text-center">
          <input type="button" class="btn btn-primary" id="linkButton" value="Generate Report">
          </div>
          </div>
          </div>

          </form>
        </div>
          </div>

        <div class="card">
        <div class="card-body">
          <table id="example" class="table">
      <thead>
      <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
      </tr>
      </thead>
      <tbody>
      <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      </tr>
      <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      </tr>
      <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      </tr>
      </tbody>
      </table>
   </div>
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
            <input type="text" name="inputID" id="inputID" class="form-control" value="<?php echo $userlist[0]->code?>" readonly>
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

 <script>
$(document).ready( function () {
 $('#example').hide();
});

$("#nav").click(function(){
$("#exampleModal").modal('show')
}); 

      $("#inputQuarter").prop("disabled",true);
      $("#inputMonth").prop("disabled",true);
      $("#txtStartDate").prop("disabled",true);
      $("#txtEndDate").prop("disabled",true);

      $("#inputReport").change(function() {
      if($(this).val() == "Annual")
      {
      $("#inputYear").prop("disabled",false);  
      $("#inputQuarter").prop("disabled",true);
      $("#inputMonth").prop("disabled",true);
      $("#txtStartDate").prop("disabled",true);
      $("#txtEndDate").prop("disabled",true);
      } 
      if($(this).val() == "Quarterly")
      {
      $("#inputYear").prop("disabled",false); 
      $("#inputQuarter").prop("disabled",false);  
      $("#inputMonth").prop("disabled",true);
      $("#txtStartDate").prop("disabled",true);
      $("#txtEndDate").prop("disabled",true);
      } 
      if($(this).val() == "Monthly")
      {
      $("#inputYear").prop("disabled",false); 
      $("#inputQuarter").prop("disabled",true);  
      $("#inputMonth").prop("disabled",false);
      $("#txtStartDate").prop("disabled",true);
      $("#txtEndDate").prop("disabled",true);
      } 
      if($(this).val() == "Custom")
      {
      $("#inputYear").prop("disabled",true);
      $("#inputQuarter").prop("disabled",true);  
      $("#inputMonth").prop("disabled",true);
      $("#txtStartDate").prop("disabled",false);
      $("#txtEndDate").prop("disabled",false);
      } 
      });

      $('#collapseOne').on("shown.bs.collapse", function(){
       $('#example').parents('div.dataTables_wrapper').first().hide();
      });

      $("#linkButton").click(function(){
        $("#collapseOne").collapse('hide');
        $('#example').show();
        var table = $('#example').DataTable();
        table.destroy();
        $('#example').empty();
        var HCID= <?php echo $userlist[0]->HCID?>;
        if($("#inputSelect").val() == "3" && $("#inputReport").val() == "Annual")
        {
                var txtYear = ($("#inputYear").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getAnnual/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'HCID' : HCID}
                },
                "columns": [
                { "title": "ID", "data" : "ID"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" }
                ],
                "columnDefs": [{"targets": [1,2,3], "orderable": false}],
                dom: 'Bfrtip',
        buttons: [
            'print'
        ]
                });
        }
        else if ($("#inputSelect").val() == "3" && $("#inputReport").val() == "Quarterly" && 
                 $("#inputQuarter").val() == "1" )
        {
                var txtYear = ($("#inputYear").val());
                var txtQuarter = ($("#inputQuarter").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getQuarter/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Quarter':txtQuarter,'HCID' : HCID}
                },
                "columns": [
                { "title": "ID", "data" : "ID"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" }
                ],
                "columnDefs": [{"targets": [1,2,3], "orderable": false}]
                ,dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "3" && $("#inputReport").val() == "Quarterly" && 
                 $("#inputQuarter").val() == "2" )
        {
                var txtYear = ($("#inputYear").val());
                var txtQuarter = ($("#inputQuarter").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getQuarter/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Quarter':txtQuarter,'HCID' : HCID}
                },
                "columns": [
                { "title": "ID", "data" : "ID"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" }
                ],
                "columnDefs": [{"targets": [1,2,3], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }

        else if ($("#inputSelect").val() == "3" && $("#inputReport").val() == "Quarterly" && 
                 $("#inputQuarter").val() == "3" )
        {
                var txtYear = ($("#inputYear").val());
                var txtQuarter = ($("#inputQuarter").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getQuarter/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Quarter':txtQuarter,'HCID' : HCID}
                },
                "columns": [
                { "title": "ID", "data" : "ID"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" }
                ],
                 "columnDefs": [{"targets": [1,2,3], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "3" && $("#inputReport").val() == "Quarterly" && 
                 $("#inputQuarter").val() == "4" )
        {
                var txtYear = ($("#inputYear").val());
                var txtQuarter = ($("#inputQuarter").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getQuarter/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Quarter':txtQuarter,'HCID' : HCID}
                },
                "columns": [
                { "title": "ID", "data" : "ID"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" }
                ],
                 "columnDefs": [{"targets": [1,2,3], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "3" && $("#inputReport").val() == "Monthly" && 
                 $("#inputMonth").val() == "1" )
        {
                var txtMonth = ($("#inputMonth").val());
                var txtYear = ($("#inputYear").val());

                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getMonth/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Month':txtMonth,'HCID' : HCID}
                },
                "columns": [
                { "title": "ID", "data" : "ID"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" }
                ],
                "columnDefs": [{"targets": [1,2,3], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "3" && $("#inputReport").val() == "Monthly" && 
                 $("#inputMonth").val() == "2" )
        {
                var txtMonth = ($("#inputMonth").val());
                var txtYear = ($("#inputYear").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getMonth/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Month':txtMonth,'HCID' : HCID}
                },
                "columns": [
                { "title": "ID", "data" : "ID"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" }
                ],
                "columnDefs": [{"targets": [1,2,3], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "3" && $("#inputReport").val() == "Monthly" && 
                 $("#inputMonth").val() == "3" )
        {
                var txtMonth = ($("#inputMonth").val());
                var txtYear = ($("#inputYear").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getMonth/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Month':txtMonth,'HCID' : HCID}
                },
                "columns": [
                { "title": "ID", "data" : "ID"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" }
                ],
                "columnDefs": [{"targets": [1,2,3], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "3" && $("#inputReport").val() == "Monthly" && 
                 $("#inputMonth").val() == "4" )
        {
                var txtMonth = ($("#inputMonth").val());
                var txtYear = ($("#inputYear").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getMonth/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Month':txtMonth,'HCID' : HCID}
                },
                "columns": [
                { "title": "ID", "data" : "ID"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" }
                ],
                "columnDefs": [{"targets": [1,2,3], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "3" && $("#inputReport").val() == "Monthly" && 
                 $("#inputMonth").val() == "5" )
        {
                var txtMonth = ($("#inputMonth").val());
                var txtYear = ($("#inputYear").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getMonth/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Month':txtMonth,'HCID' : HCID}
                },
                "columns": [
                { "title": "ID", "data" : "ID"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" }
                ],
                "columnDefs": [{"targets": [1,2,3], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "3" && $("#inputReport").val() == "Monthly" && 
                 $("#inputMonth").val() == "6" )
        {
                var txtMonth = ($("#inputMonth").val());
                var txtYear = ($("#inputYear").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getMonth/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Month':txtMonth,'HCID' : HCID}
                },
                "columns": [
                { "title": "ID", "data" : "ID"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" }
                ],
                "columnDefs": [{"targets": [1,2,3], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "3" && $("#inputReport").val() == "Monthly" && 
                 $("#inputMonth").val() == "7" )
        {
                var txtMonth = ($("#inputMonth").val());
                var txtYear = ($("#inputYear").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getMonth/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Month':txtMonth,'HCID' : HCID}
                },
                "columns": [
                { "title": "ID", "data" : "ID"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" }
                ],
                "columnDefs": [{"targets": [1,2,3], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "3" && $("#inputReport").val() == "Monthly" && 
                 $("#inputMonth").val() == "8" )
        {
                var txtMonth = ($("#inputMonth").val());
                var txtYear = ($("#inputYear").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getMonth/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Month':txtMonth,'HCID' : HCID}
                },
                "columns": [
                { "title": "ID", "data" : "ID"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" }
                ],
                "columnDefs": [{"targets": [1,2,3], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "3" && $("#inputReport").val() == "Monthly" && 
                 $("#inputMonth").val() == "9" )
        {
                var txtMonth = ($("#inputMonth").val());
                var txtYear = ($("#inputYear").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getMonth/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Month':txtMonth,'HCID' : HCID}
                },
                "columns": [
                { "title": "ID", "data" : "ID"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" }
                ],
                "columnDefs": [{"targets": [1,2,3], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "3" && $("#inputReport").val() == "Monthly" && 
                 $("#inputMonth").val() == "10" )
        {
                var txtMonth = ($("#inputMonth").val());
                var txtYear = ($("#inputYear").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getMonth/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Month':txtMonth,'HCID' : HCID}
                },
                "columns": [
                { "title": "ID", "data" : "ID"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" }
                ],
                "columnDefs": [{"targets": [1,2,3], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "3" && $("#inputReport").val() == "Monthly" && 
                 $("#inputMonth").val() == "11" )
        {
                var txtMonth = ($("#inputMonth").val());
                var txtYear = ($("#inputYear").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getMonth/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Month':txtMonth,'HCID' : HCID}
                },
                "columns": [
                { "title": "ID", "data" : "ID"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" }
                ],
                "columnDefs": [{"targets": [1,2,3], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "3" && $("#inputReport").val() == "Monthly" && 
                 $("#inputMonth").val() == "12" )
        {
                var txtMonth = ($("#inputMonth").val());
                var txtYear = ($("#inputYear").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getMonth/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Month':txtMonth,'HCID' : HCID}
                },
                "columns": [
                { "title": "ID", "data" : "ID"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" }
                ],
                "columnDefs": [{"targets": [1,2,3], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "3" && $("#inputReport").val() == "Custom")
        {
                var txtStart = ($("#txtStartDate").val());
                var txtEnd = ($("#txtEndDate").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getCustom/'); ?>',
                "type": "POST",
                "data": {'Start': txtStart,'End':txtEnd,'HCID' : HCID}
                },
                "columns": [
                { "title": "ID", "data" : "ID"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" }
                ],
                "columnDefs": [{"targets": [1,2,3], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "2" && $("#inputReport").val() == "Annual")
        {
                var HCID= <?php echo $userlist[0]->HCID?>;
                var txtYear = ($("#inputYear").val());
                var txtQuarter = ($("#inputQuarter").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getBrgyAnnual/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Quarter':txtQuarter,'HCID' : HCID}
                },
                "columns": [
                { "title": "Family No", "data" : "familyno"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" },
                { "title": "Brgy", "data": "Brgy" },
                { "title": "City", "data": "City" }
                ],
                "columnDefs": [{"targets": [1,2,3,4,5], "orderable": false}]
                ,dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "2" && $("#inputReport").val() == "Quarterly" && 
                 $("#inputQuarter").val() == "1" )
        {
                var txtYear = ($("#inputYear").val());
                var txtQuarter = ($("#inputQuarter").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getBrgyQuarter/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Quarter':txtQuarter,'HCID' : HCID}
                },
                "columns": [
                { "title": "Family No", "data" : "familyno"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" },
                { "title": "Brgy", "data": "Brgy" },
                { "title": "City", "data": "City" }
                ],
                "columnDefs": [{"targets": [1,2,3,4,5], "orderable": false}]
                ,dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "2" && $("#inputReport").val() == "Quarterly" && 
                 $("#inputQuarter").val() == "2" )
        {
                var txtYear = ($("#inputYear").val());
                var txtQuarter = ($("#inputQuarter").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getBrgyQuarter/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Quarter':txtQuarter,'HCID' : HCID}
                },
                "columns": [
                { "title": "Family No", "data" : "familyno"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" },
                { "title": "Brgy", "data": "Brgy" },
                { "title": "City", "data": "City" }
                ],
                "columnDefs": [{"targets": [1,2,3,4,5], "orderable": false}]
                ,dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "2" && $("#inputReport").val() == "Quarterly" && 
                 $("#inputQuarter").val() == "3" )
        {
                var txtYear = ($("#inputYear").val());
                var txtQuarter = ($("#inputQuarter").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getBrgyQuarter/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Quarter':txtQuarter,'HCID' : HCID}
                },
                "columns": [
                { "title": "Family No", "data" : "familyno"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" },
                { "title": "Brgy", "data": "Brgy" },
                { "title": "City", "data": "City" }
                ],
                "columnDefs": [{"targets": [1,2,3,4,5], "orderable": false}]
                ,dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "2" && $("#inputReport").val() == "Quarterly" && 
                 $("#inputQuarter").val() == "4" )
        {
                var txtYear = ($("#inputYear").val());
                var txtQuarter = ($("#inputQuarter").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getBrgyQuarter/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Quarter':txtQuarter,'HCID' : HCID}
                },
                "columns": [
                { "title": "Family No", "data" : "familyno"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" },
                { "title": "Brgy", "data": "Brgy" },
                { "title": "City", "data": "City" }
                ],
                "columnDefs": [{"targets": [1,2,3,4,5], "orderable": false}]
                ,dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "2" && $("#inputReport").val() == "Monthly" && 
                 $("#inputMonth").val() == "1" )
        {
                var txtMonth = ($("#inputMonth").val());
                var txtYear = ($("#inputYear").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getBrgyMonth/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Month':txtMonth,'HCID' : HCID}
                },
                 "columns": [
                { "title": "Family No", "data" : "familyno"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" },
                { "title": "Brgy", "data": "Brgy" },
                { "title": "City", "data": "City" }
                ],
                "columnDefs": [{"targets": [1,2,3,4,5], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "2" && $("#inputReport").val() == "Monthly" && 
                 $("#inputMonth").val() == "2" )
        {
                var txtMonth = ($("#inputMonth").val());
                var txtYear = ($("#inputYear").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getBrgyMonth/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Month':txtMonth,'HCID' : HCID}
                },
                 "columns": [
                { "title": "Family No", "data" : "familyno"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" },
                { "title": "Brgy", "data": "Brgy" },
                { "title": "City", "data": "City" }
                ],
                "columnDefs": [{"targets": [1,2,3,4,5], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "2" && $("#inputReport").val() == "Monthly" && 
                 $("#inputMonth").val() == "3" )
        {
                var txtMonth = ($("#inputMonth").val());
                var txtYear = ($("#inputYear").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getBrgyMonth/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Month':txtMonth,'HCID' : HCID}
                },
                 "columns": [
                { "title": "Family No", "data" : "familyno"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" },
                { "title": "Brgy", "data": "Brgy" },
                { "title": "City", "data": "City" }
                ],
                "columnDefs": [{"targets": [1,2,3,4,5], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "2" && $("#inputReport").val() == "Monthly" && 
                 $("#inputMonth").val() == "4" )
        {
                var txtMonth = ($("#inputMonth").val());
                var txtYear = ($("#inputYear").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getBrgyMonth/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Month':txtMonth,'HCID' : HCID}
                },
                 "columns": [
                { "title": "Family No", "data" : "familyno"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" },
                { "title": "Brgy", "data": "Brgy" },
                { "title": "City", "data": "City" }
                ],
                "columnDefs": [{"targets": [1,2,3,4,5], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "2" && $("#inputReport").val() == "Monthly" && 
                 $("#inputMonth").val() == "5" )
        {
                var txtMonth = ($("#inputMonth").val());
                var txtYear = ($("#inputYear").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getBrgyMonth/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Month':txtMonth,'HCID' : HCID}
                },
                 "columns": [
                { "title": "Family No", "data" : "familyno"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" },
                { "title": "Brgy", "data": "Brgy" },
                { "title": "City", "data": "City" }
                ],
                "columnDefs": [{"targets": [1,2,3,4,5], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "2" && $("#inputReport").val() == "Monthly" && 
                 $("#inputMonth").val() == "6" )
        {
                var txtMonth = ($("#inputMonth").val());
                var txtYear = ($("#inputYear").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getBrgyMonth/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Month':txtMonth,'HCID' : HCID}
                },
                 "columns": [
                { "title": "Family No", "data" : "familyno"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" },
                { "title": "Brgy", "data": "Brgy" },
                { "title": "City", "data": "City" }
                ],
                "columnDefs": [{"targets": [1,2,3,4,5], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "2" && $("#inputReport").val() == "Monthly" && 
                 $("#inputMonth").val() == "7" )
        {
                var txtMonth = ($("#inputMonth").val());
                var txtYear = ($("#inputYear").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getBrgyMonth/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Month':txtMonth,'HCID' : HCID}
                },
                 "columns": [
                { "title": "Family No", "data" : "familyno"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" },
                { "title": "Brgy", "data": "Brgy" },
                { "title": "City", "data": "City" }
                ],
                "columnDefs": [{"targets": [1,2,3,4,5], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "2" && $("#inputReport").val() == "Monthly" && 
                 $("#inputMonth").val() == "8" )
        {
                var txtMonth = ($("#inputMonth").val());
                var txtYear = ($("#inputYear").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getBrgyMonth/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Month':txtMonth,'HCID' : HCID}
                },
                 "columns": [
                { "title": "Family No", "data" : "familyno"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" },
                { "title": "Brgy", "data": "Brgy" },
                { "title": "City", "data": "City" }
                ],
                "columnDefs": [{"targets": [1,2,3,4,5], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "2" && $("#inputReport").val() == "Monthly" && 
                 $("#inputMonth").val() == "9" )
        {
                var txtMonth = ($("#inputMonth").val());
                var txtYear = ($("#inputYear").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getBrgyMonth/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Month':txtMonth,'HCID' : HCID}
                },
                 "columns": [
                { "title": "Family No", "data" : "familyno"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" },
                { "title": "Brgy", "data": "Brgy" },
                { "title": "City", "data": "City" }
                ],
                "columnDefs": [{"targets": [1,2,3,4,5], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "2" && $("#inputReport").val() == "Monthly" && 
                 $("#inputMonth").val() == "10" )
        {
                var txtMonth = ($("#inputMonth").val());
                var txtYear = ($("#inputYear").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getBrgyMonth/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Month':txtMonth,'HCID' : HCID}
                },
                 "columns": [
                { "title": "Family No", "data" : "familyno"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" },
                { "title": "Brgy", "data": "Brgy" },
                { "title": "City", "data": "City" }
                ],
                "columnDefs": [{"targets": [1,2,3,4,5], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "2" && $("#inputReport").val() == "Monthly" && 
                 $("#inputMonth").val() == "11" )
        {
                var txtMonth = ($("#inputMonth").val());
                var txtYear = ($("#inputYear").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getBrgyMonth/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Month':txtMonth,'HCID' : HCID}
                },
                 "columns": [
                { "title": "Family No", "data" : "familyno"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" },
                { "title": "Brgy", "data": "Brgy" },
                { "title": "City", "data": "City" }
                ],
                "columnDefs": [{"targets": [1,2,3,4,5], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "2" && $("#inputReport").val() == "Monthly" && 
                 $("#inputMonth").val() == "12" )
        {
                var txtMonth = ($("#inputMonth").val());
                var txtYear = ($("#inputYear").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getBrgyMonth/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Month':txtMonth,'HCID' : HCID}
                },
                 "columns": [
                { "title": "Family No", "data" : "familyno"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" },
                { "title": "Brgy", "data": "Brgy" },
                { "title": "City", "data": "City" }
                ],
                "columnDefs": [{"targets": [1,2,3,4,5], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "2" && $("#inputReport").val() == "Custom")
        {
                var txtStart = ($("#txtStartDate").val());
                var txtEnd = ($("#txtEndDate").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getCustom/'); ?>',
                "type": "POST",
                "data": {'Start': txtStart,'End':txtEnd,'HCID' : HCID}
                },
                "columns": [
                { "title": "Family No", "data" : "familyno"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" },
                { "title": "Brgy", "data": "Brgy" },
                { "title": "City", "data": "City" }
                ],
                "columnDefs": [{"targets": [1,2,3,4,5], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "1" && $("#inputReport").val() == "Annual")
        {
                var txtYear = ($("#inputYear").val());
                var txtQuarter = ($("#inputQuarter").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getCaseAnnual/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'HCID' : HCID}
                },
                "columns": [
                { "title": "ID", "data" : "ID"},
                { "title": "Record No", "data" : "recordno"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" },
                { "title": "Diagnosis", "data": "Diag" }
                ],
                "columnDefs": [{"targets": [1,2,3,4,5], "orderable": false}]
                ,dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "1" && $("#inputReport").val() == "Quarterly" && 
                 $("#inputQuarter").val() == "1" )
        {
                var txtYear = ($("#inputYear").val());
                var txtQuarter = ($("#inputQuarter").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getCaseQuarter/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Quarter':txtQuarter,'HCID' : HCID}
                },
                "columns": [
                { "title": "ID", "data" : "ID"},
                { "title": "Record No", "data" : "recordno"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" },
                { "title": "Diagnosis", "data": "Diag" }
                ],
                "columnDefs": [{"targets": [1,2,3,4,5], "orderable": false}]
                ,dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "1" && $("#inputReport").val() == "Quarterly" && 
                 $("#inputQuarter").val() == "2" )
        {
                var txtYear = ($("#inputYear").val());
                var txtQuarter = ($("#inputQuarter").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getCaseQuarter/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Quarter':txtQuarter,'HCID' : HCID}
                },
                "columns": [
                { "title": "ID", "data" : "ID"},
                { "title": "Record No", "data" : "recordno"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" },
                { "title": "Diagnosis", "data": "Diag" }
                ],
                "columnDefs": [{"targets": [1,2,3,4,5], "orderable": false}]
                ,dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "1" && $("#inputReport").val() == "Quarterly" && 
                 $("#inputQuarter").val() == "3" )
        {
                var txtYear = ($("#inputYear").val());
                var txtQuarter = ($("#inputQuarter").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getCaseQuarter/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Quarter':txtQuarter,'HCID' : HCID}
                },
                "columns": [
                { "title": "ID", "data" : "ID"},
                { "title": "Record No", "data" : "recordno"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" },
                { "title": "Diagnosis", "data": "Diag" }
                ],
                "columnDefs": [{"targets": [1,2,3,4,5], "orderable": false}]
                ,dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "1" && $("#inputReport").val() == "Quarterly" && 
                 $("#inputQuarter").val() == "4" )
        {
                var txtYear = ($("#inputYear").val());
                var txtQuarter = ($("#inputQuarter").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getCaseQuarter/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Quarter':txtQuarter,'HCID' : HCID}
                },
                "columns": [
                { "title": "ID", "data" : "ID"},
                { "title": "Record No", "data" : "recordno"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" },
                { "title": "Diagnosis", "data": "Diag" }
                ],
                "columnDefs": [{"targets": [1,2,3,4,5], "orderable": false}]
                ,dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "1" && $("#inputReport").val() == "Monthly" && 
                 $("#inputMonth").val() == "1" )
        {
                var txtMonth = ($("#inputMonth").val());
                var txtYear = ($("#inputYear").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getCaseMonth/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Month':txtMonth,'HCID' : HCID}
                },
                 "columns": [
                { "title": "ID", "data" : "ID"},
                { "title": "Record No", "data" : "recordno"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" },
                { "title": "Diagnosis", "data": "Diag" }
                ],
                "columnDefs": [{"targets": [1,2,3,4,5], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "1" && $("#inputReport").val() == "Monthly" && 
                 $("#inputMonth").val() == "2" )
        {
                var txtMonth = ($("#inputMonth").val());
                var txtYear = ($("#inputYear").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getCaseMonth/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Month':txtMonth,'HCID' : HCID}
                },
                  "columns": [
                { "title": "ID", "data" : "ID"},
                { "title": "Record No", "data" : "recordno"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" },
                { "title": "Diagnosis", "data": "Diag" }
                ],
                "columnDefs": [{"targets": [1,2,3,4,5], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "1" && $("#inputReport").val() == "Monthly" && 
                 $("#inputMonth").val() == "3" )
        {
                var txtMonth = ($("#inputMonth").val());
                var txtYear = ($("#inputYear").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getCaseMonth/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Month':txtMonth,'HCID' : HCID}
                },
                  "columns": [
                { "title": "ID", "data" : "ID"},
                { "title": "Record No", "data" : "recordno"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" },
                { "title": "Diagnosis", "data": "Diag" }
                ],
                "columnDefs": [{"targets": [1,2,3,4,5], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "1" && $("#inputReport").val() == "Monthly" && 
                 $("#inputMonth").val() == "4" )
        {
                var txtMonth = ($("#inputMonth").val());
                var txtYear = ($("#inputYear").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getCaseMonth/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Month':txtMonth,'HCID' : HCID}
                },
                  "columns": [
                { "title": "ID", "data" : "ID"},
                { "title": "Record No", "data" : "recordno"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" },
                { "title": "Diagnosis", "data": "Diag" }
                ],
                "columnDefs": [{"targets": [1,2,3,4,5], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "1" && $("#inputReport").val() == "Monthly" && 
                 $("#inputMonth").val() == "5" )
        {
                var txtMonth = ($("#inputMonth").val());
                var txtYear = ($("#inputYear").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getCaseMonth/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Month':txtMonth,'HCID' : HCID}
                },
                  "columns": [
                { "title": "ID", "data" : "ID"},
                { "title": "Record No", "data" : "recordno"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" },
                { "title": "Diagnosis", "data": "Diag" }
                ],
                "columnDefs": [{"targets": [1,2,3,4,5], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "1" && $("#inputReport").val() == "Monthly" && 
                 $("#inputMonth").val() == "6" )
        {
                var txtMonth = ($("#inputMonth").val());
                var txtYear = ($("#inputYear").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getCaseMonth/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Month':txtMonth,'HCID' : HCID}
                },
                  "columns": [
                { "title": "ID", "data" : "ID"},
                { "title": "Record No", "data" : "recordno"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" },
                { "title": "Diagnosis", "data": "Diag" }
                ],
                "columnDefs": [{"targets": [1,2,3,4,5], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "1" && $("#inputReport").val() == "Monthly" && 
                 $("#inputMonth").val() == "7" )
        {
                var txtMonth = ($("#inputMonth").val());
                var txtYear = ($("#inputYear").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getCaseMonth/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Month':txtMonth,'HCID' : HCID}
                },
                  "columns": [
                { "title": "ID", "data" : "ID"},
                { "title": "Record No", "data" : "recordno"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" },
                { "title": "Diagnosis", "data": "Diag" }
                ],
                "columnDefs": [{"targets": [1,2,3,4,5], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "1" && $("#inputReport").val() == "Monthly" && 
                 $("#inputMonth").val() == "8" )
        {
                var txtMonth = ($("#inputMonth").val());
                var txtYear = ($("#inputYear").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getCaseMonth/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Month':txtMonth,'HCID' : HCID}
                },
                  "columns": [
                { "title": "ID", "data" : "ID"},
                { "title": "Record No", "data" : "recordno"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" },
                { "title": "Diagnosis", "data": "Diag" }
                ],
                "columnDefs": [{"targets": [1,2,3,4,5], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "1" && $("#inputReport").val() == "Monthly" && 
                 $("#inputMonth").val() == "9" )
        {
                var txtMonth = ($("#inputMonth").val());
                var txtYear = ($("#inputYear").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getCaseMonth/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Month':txtMonth,'HCID' : HCID}
                },
                  "columns": [
                { "title": "ID", "data" : "ID"},
                { "title": "Record No", "data" : "recordno"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" },
                { "title": "Diagnosis", "data": "Diag" }
                ],
                "columnDefs": [{"targets": [1,2,3,4,5], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "1" && $("#inputReport").val() == "Monthly" && 
                 $("#inputMonth").val() == "10" )
        {
                var txtMonth = ($("#inputMonth").val());
                var txtYear = ($("#inputYear").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getCaseMonth/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Month':txtMonth,'HCID' : HCID}
                },
                  "columns": [
                { "title": "ID", "data" : "ID"},
                { "title": "Record No", "data" : "recordno"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" },
                { "title": "Diagnosis", "data": "Diag" }
                ],
                "columnDefs": [{"targets": [1,2,3,4,5], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "1" && $("#inputReport").val() == "Monthly" && 
                 $("#inputMonth").val() == "11" )
        {
                var txtMonth = ($("#inputMonth").val());
                var txtYear = ($("#inputYear").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getCaseMonth/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Month':txtMonth,'HCID' : HCID}
                },
                  "columns": [
                { "title": "ID", "data" : "ID"},
                { "title": "Record No", "data" : "recordno"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" },
                { "title": "Diagnosis", "data": "Diag" }
                ],
                "columnDefs": [{"targets": [1,2,3,4,5], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "1" && $("#inputReport").val() == "Monthly" && 
                 $("#inputMonth").val() == "12" )
        {
                var txtMonth = ($("#inputMonth").val());
                var txtYear = ($("#inputYear").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getCaseMonth/'); ?>',
                "type": "POST",
                "data": {'Year': txtYear,'Month':txtMonth,'HCID' : HCID}
                },
                  "columns": [
                { "title": "ID", "data" : "ID"},
                { "title": "Record No", "data" : "recordno"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" },
                { "title": "Diagnosis", "data": "Diag" }
                ],
                "columnDefs": [{"targets": [1,2,3,4,5], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
        else if ($("#inputSelect").val() == "1" && $("#inputReport").val() == "Custom")
        {
                var txtStart = ($("#txtStartDate").val());
                var txtEnd = ($("#txtEndDate").val());
                table = $('#example').DataTable({
                "ajax": {
                "url": '<?php echo base_url('template/getCaseCustom/'); ?>',
                "type": "POST",
                "data": {'Start': txtStart,'End':txtEnd,'HCID' : HCID}
                },
                 "columns": [
                { "title": "ID", "data" : "ID"},
                { "title": "Record No", "data" : "recordno"},
                { "title": "First Name",  "data": "FN" },
                { "title": "Middle Name", "data": "MN" },
                { "title": "Last Name", "data": "LN" },
                { "title": "Diagnosis", "data": "Diag" }
                ],
                "columnDefs": [{"targets": [1,2,3], "orderable": false}],
                dom: 'Bfrtip',
                buttons: [
                'print'
                ]
                });
        }
      }); 
</script>

</body>

</html>