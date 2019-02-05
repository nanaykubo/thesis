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
            <a class="nav-link " href="adduser">
              <i class="fas fa-plus-circle text-green"></i> Add User
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="addhc">
             <i class="fas fa-hospital text-orange"></i> Health Centers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="viewlogs">
             <i class="fas fa-window-restore text-info"></i> Info Recovery
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
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block">Health Centers</a>
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
     <button class="btn btn-icon btn-3 btn-secondary" id="healthcenter" data-toggle="modal" data-target="#exampleModalLong" type="button">
      <span class="btn-inner--icon"><i class="fas fa-hospital-alt"></i></span>
      
      <span class="btn-inner--text">Add Health Center</span>
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
      <th scope="col">HCID</th>
      <th scope="col">Health Center</th>
      <th scope="col">Location</th>
      <th scope="col">City</th>
      <th scope="col">BRGY</th>
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
        <h5 class="modal-title" id="exampleModalLongTitle">Add Health Center</h5>
        <button type="button" id="healthcenter" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" id="testform" action="<?php echo base_url('template/create') ?>" method="post" novalidate>
 
           <div class="form-row">
    <div class="col-md-12 mb-3">
      <label for="validationCustom01">HCID</label>
      <input type="text" class="form-control" id="inputHCID" name="inputHCID" placeholder="HCID">
      <div class="invalid-feedback">
        Please provide details.
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-12 mb-3">
      <label for="validationCustom01">Health Center Name</label>
      <input type="text" class="form-control" id="inputHC" name="inputHC" placeholder="Health Center Name" >
      <div class="invalid-feedback">
        Please provide details.
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-12 mb-3">
      <label for="validationCustom01">Location</label>
      <input type="text" class="form-control" id="inputLoc" name="inputLoc" placeholder="Location" >
      <div class="invalid-feedback">
        Please provide details.
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">City/District</label>
      <select id="Position" name="Position" class="custom-select" required>
      <option value="0">Binondo</option>
      <option value="1">Ermita</option>
      <option value="2">Intramuros</option>
      <option value="3">Malate</option>
      <option value="4">Paco</option>
      <option value="5">Pandacan</option>
      <option value="6">Port Area</option>
      <option value="7">Quiapo</option>
      <option value="8">Sampaloc</option>
      <option value="9">San Miguel</option>
      <option value="10">San Nicolas</option>
      <option value="11">Sta Ana</option>
      <option value="12">Sta Cruz</option>
      <option value="13">Tondo</option>
      </select>
     <div class="invalid-feedback">Example invalid custom select feedback</div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="exampleFormControlSelect2">Example multiple select</label>
    <select multiple="multiple" class="form-control" name="Brgy[]" id="Brgy">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
          <small id="passwordHelpBlock" class="form-text text-muted">
    Multiple select list (hold ctrl or shift (or drag with the mouse) to select more than one)
    </small>
     <div class="invalid-feedback">Example invalid custom select feedback</div>
    </div>
    <div class="col-md-4 mb-3">
       <label for="exampleFormControlTextarea1">Selected Brgy</label>
    <textarea class="form-control" id="ta" name="ta" rows="3"></textarea>
     <div class="invalid-feedback">Example invalid custom select feedback</div>
    </div>
  </div>
  <button class="btn btn-primary" id="editUser" style="float:right;"type="submit">Add User</button>
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
    var sub_array = [];
    var val= $('#Position').val();
    if(val=='0')
    {
      for ($x = 287; $x <= 296; $x++) 
      {
      sub_array.push($x);
      }
      
      var $el = $("#Brgy");
      $el.empty();
      $.each(sub_array, function(key,value) {
      $el.append($("<option></option>")
      .attr("value", value).text(value));
      });
    }
    else if (val=='1')
    {
      var super_array =['659-A','660-A','650-A'];
      for ($x = 659; $x <= 670; $x++) 
      {
      sub_array.push($x);
      super_array.push(sub_array.splice(0));
      }
      var $el = $("#Brgy");
      $el.empty();
      $.each(super_array, function(key,value) {
      $el.append($("<option></option>")
      .attr("value", value).text(value));
      });
    }
    else if(val=='2')
    {
      for ($x = 654; $x <= 658; $x++) 
      {
      sub_array.push($x);
      }
      
      var $el = $("#Brgy");
      $el.empty();
      $.each(sub_array, function(key,value) {
      $el.append($("<option></option>")
      .attr("value", value).text(value));
      });
    }
    else if(val=='3')
    {
      for ($x = 688; $x <= 744; $x++) 
      {
      sub_array.push($x);
      }
      
      var $el = $("#Brgy");
      $el.empty();
      $.each(sub_array, function(key,value) {
      $el.append($("<option></option>")
      .attr("value", value).text(value));
      });
    }
    else if(val=='4')
    {
      var super_array =['662','644-A','660-A','650-A'];
      var p = [];
      for ($x = 659; $x <= 670; $x++) 
      {
      sub_array.push($x);
      super_array.push(sub_array.splice(0));
      }
      for ($x = 809; $x <= 832; $x++) 
      {
      p.push($x);
      super_array.push(p.splice(0));
      }
      var $el = $("#Brgy");
      $el.empty();
      $.each(super_array, function(key,value) {
      $el.append($("<option></option>")
      .attr("value", value).text(value));
      });
    }
    else if(val=='5')
    {
      for ($x = 833; $x <= 872; $x++) 
      {
      sub_array.push($x);
      }
      
      var $el = $("#Brgy");
      $el.empty();
      $.each(sub_array, function(key,value) {
      $el.append($("<option></option>")
      .attr("value", value).text(value));
      });
    }
    else if(val=='6')
    {
      for ($x = 649; $x <= 653; $x++) 
      {
      sub_array.push($x);
      }
      
      var $el = $("#Brgy");
      $el.empty();
      $.each(sub_array, function(key,value) {
      $el.append($("<option></option>")
      .attr("value", value).text(value));
      });
    }
    else if(val=='7')
    {
       for ($x = 306; $x <= 394; $x++) 
      {
      sub_array.push($x);
      }
      
      var $el = $("#Brgy");
      $el.empty();
      $.each(sub_array, function(key,value) {
      $el.append($("<option></option>")
      .attr("value", value).text(value));
      });
    }
    else if(val=='8')
    {
      for ($x = 395; $x <= 636; $x++) 
      {
      sub_array.push($x);
      }
      
      var $el = $("#Brgy");
      $el.empty();
      $.each(sub_array, function(key,value) {
      $el.append($("<option></option>")
      .attr("value", value).text(value));
      });
    }
    else if(val=='9')
    {
     for ($x = 637; $x <= 648; $x++) 
      {
      sub_array.push($x);
      }
      
      var $el = $("#Brgy");
      $el.empty();
      $.each(sub_array, function(key,value) {
      $el.append($("<option></option>")
      .attr("value", value).text(value));
      });
    }
    else if(val=='10')
    {
      for ($x = 268; $x <= 286; $x++) 
      {
      sub_array.push($x);
      }
      
      var $el = $("#Brgy");
      $el.empty();
      $.each(sub_array, function(key,value) {
      $el.append($("<option></option>")
      .attr("value", value).text(value));
      });
    }
    else if(val=='11')
    {
      for ($x = 745; $x <= 905; $x++) 
      {
      sub_array.push($x);
      }
      
      var $el = $("#Brgy");
      $el.empty();
      $.each(sub_array, function(key,value) {
      $el.append($("<option></option>")
      .attr("value", value).text(value));
      });
    }
    else if(val=='12')
    {
      for ($x = 297; $x <= 382; $x++) 
      {
      sub_array.push($x);
      }
      
      var $el = $("#Brgy");
      $el.empty();
      $.each(sub_array, function(key,value) {
      $el.append($("<option></option>")
      .attr("value", value).text(value));
      });
    }
    else if(val=='13')
    {
      for ($x = 1; $x <= 267; $x++) 
      {
      sub_array.push($x);
      }
      
      var $el = $("#Brgy");
      $el.empty();
      $.each(sub_array, function(key,value) {
      $el.append($("<option></option>")
      .attr("value", value).text(value));
      });
    }
    var table= $('#myTable').DataTable({
      "ajax": '<?php echo base_url('template/getHC'); ?>',
      "type": 'POST',
      
      //Set column definition initialisation properties.
            "columnDefs": [
                {"targets":-1,"data": null,'defaultContent': '<div class="dropdown"><a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a><div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow"><button id="logs" class="dropdown-item"><i class="fas fa-warehouse"></i>View Barangays</button><button id="update" class="dropdown-item"><i class="fas fa-edit"></i></i>Edit Health Center</button></div></div>'},
                {
      "targets": [1,2,3,4,5],
      "orderable": false}
            ]
    });

    $("#editUser").on("click",function(){

            $("#inputCode").prop("readonly",false);
    });

    $("#Brgy").on("click",function(){
        var value = $(this).val();
        $("#ta").text(value);
     });

   $("#Position").change(function() 
    {   
    var sub_array = [];
    var val= $(this).val();
    if(val=='0')
    {
      for ($x = 287; $x <= 296; $x++) 
      {
      sub_array.push($x);
      }
      
      var $el = $("#Brgy");
      $el.empty();
      $.each(sub_array, function(key,value) {
      $el.append($("<option></option>")
      .attr("value", value).text(value));
      });
    }
    else if (val=='1')
    {
      var super_array =['659-A','660-A','650-A'];
      for ($x = 659; $x <= 670; $x++) 
      {
      sub_array.push($x);
      super_array.push(sub_array.splice(0));
      }
      var $el = $("#Brgy");
      $el.empty();
      $.each(super_array, function(key,value) {
      $el.append($("<option></option>")
      .attr("value", value).text(value));
      });
    }
    else if(val=='2')
    {
      for ($x = 654; $x <= 658; $x++) 
      {
      sub_array.push($x);
      }
      
      var $el = $("#Brgy");
      $el.empty();
      $.each(sub_array, function(key,value) {
      $el.append($("<option></option>")
      .attr("value", value).text(value));
      });
    }
    else if(val=='3')
    {
      for ($x = 688; $x <= 744; $x++) 
      {
      sub_array.push($x);
      }
      
      var $el = $("#Brgy");
      $el.empty();
      $.each(sub_array, function(key,value) {
      $el.append($("<option></option>")
      .attr("value", value).text(value));
      });
    }
    else if(val=='4')
    {
      var super_array =['662','644-A','660-A','650-A'];
      var p = [];
      for ($x = 659; $x <= 670; $x++) 
      {
      sub_array.push($x);
      super_array.push(sub_array.splice(0));
      }
      for ($x = 809; $x <= 832; $x++) 
      {
      p.push($x);
      super_array.push(p.splice(0));
      }
      var $el = $("#Brgy");
      $el.empty();
      $.each(super_array, function(key,value) {
      $el.append($("<option></option>")
      .attr("value", value).text(value));
      });
    }
    else if(val=='5')
    {
      for ($x = 833; $x <= 872; $x++) 
      {
      sub_array.push($x);
      }
      
      var $el = $("#Brgy");
      $el.empty();
      $.each(sub_array, function(key,value) {
      $el.append($("<option></option>")
      .attr("value", value).text(value));
      });
    }
    else if(val=='6')
    {
      for ($x = 649; $x <= 653; $x++) 
      {
      sub_array.push($x);
      }
      
      var $el = $("#Brgy");
      $el.empty();
      $.each(sub_array, function(key,value) {
      $el.append($("<option></option>")
      .attr("value", value).text(value));
      });
    }
    else if(val=='7')
    {
       for ($x = 306; $x <= 394; $x++) 
      {
      sub_array.push($x);
      }
      
      var $el = $("#Brgy");
      $el.empty();
      $.each(sub_array, function(key,value) {
      $el.append($("<option></option>")
      .attr("value", value).text(value));
      });
    }
    else if(val=='8')
    {
      for ($x = 395; $x <= 636; $x++) 
      {
      sub_array.push($x);
      }
      
      var $el = $("#Brgy");
      $el.empty();
      $.each(sub_array, function(key,value) {
      $el.append($("<option></option>")
      .attr("value", value).text(value));
      });
    }
    else if(val=='9')
    {
     for ($x = 637; $x <= 648; $x++) 
      {
      sub_array.push($x);
      }
      
      var $el = $("#Brgy");
      $el.empty();
      $.each(sub_array, function(key,value) {
      $el.append($("<option></option>")
      .attr("value", value).text(value));
      });
    }
    else if(val=='10')
    {
      for ($x = 268; $x <= 286; $x++) 
      {
      sub_array.push($x);
      }
      
      var $el = $("#Brgy");
      $el.empty();
      $.each(sub_array, function(key,value) {
      $el.append($("<option></option>")
      .attr("value", value).text(value));
      });
    }
    else if(val=='11')
    {
      for ($x = 745; $x <= 905; $x++) 
      {
      sub_array.push($x);
      }
      
      var $el = $("#Brgy");
      $el.empty();
      $.each(sub_array, function(key,value) {
      $el.append($("<option></option>")
      .attr("value", value).text(value));
      });
    }
    else if(val=='12')
    {
      for ($x = 297; $x <= 382; $x++) 
      {
      sub_array.push($x);
      }
      
      var $el = $("#Brgy");
      $el.empty();
      $.each(sub_array, function(key,value) {
      $el.append($("<option></option>")
      .attr("value", value).text(value));
      });
    }
    else if(val=='13')
    {
      for ($x = 1; $x <= 267; $x++) 
      {
      sub_array.push($x);
      }
      
      var $el = $("#Brgy");
      $el.empty();
      $.each(sub_array, function(key,value) {
      $el.append($("<option></option>")
      .attr("value", value).text(value));
      });
    }
   });

    $("#healthcenter").on("click",function(){
        $("#editUser").html('Add User');
        $(".modal-title").html('Add User');
     });

    $('#exampleModalLong').on('hidden.bs.modal', function () {
    $(this).find('form').trigger('reset');
    })

    $('#myTable tbody').on( 'click', 'button', function (e) {
            var data = table.row($(this).parents('tr') ).data();
            var action=this.id;
            var HCID = data[0];
             $("#logs tbody").empty();
            if (action=='logs')
            {
             alert('yes')
            }
            if (action=='update')
            {
            values=new Array();
            $.ajax({
            url: '<?php echo base_url('template/editHC/'); ?>', 
            type: 'POST',
            data: {'HCID': HCID},
            success: function (result) {
            var parsed= JSON.parse(result);
            $.each(parsed,function(index,value)
                  {
                    $(".modal-body #inputHCID").val(value[0]);
                    $(".modal-body #inputHC").val(value[1]);
                    $(".modal-body #inputLoc").val(value[2]);
                    $('.modal-body #Position option')
                    .filter(function() { return $.trim( $(this).text() ) == value[3]; })
                    .attr('selected',true);
                    var data=($("#Position").prop('selectedIndex'));
                    $("#Position").val(data).change();

                    var values =value[4];
                    var selectedOptions = values.split(",");
                    for(var i in selectedOptions) {
                    var optionVal = selectedOptions[i];
                    $(".modal-body #Brgy").find("option[value="+optionVal+"]").prop("selected", "selected");
                    
                    }

                    var selOption = $('#Brgy').val();

                      $("#ta").text(selOption);

                    $(".modal-body #editUser").html('Edit User');
                    $(".modal-title").html('Edit User');
                    $("#exampleModalLong").modal('show')
                    $("#testform").attr("action",'<?php echo base_url('template/updateHC') ?>');
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