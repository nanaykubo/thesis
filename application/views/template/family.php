<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <title>MedRec Tracking System</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link type="text/css" href="../assets/css/argon.css?v=1.0.0" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link href="../assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="../assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link type="text/css" href="../assets/css/argon.css?v=1.0.0" rel="stylesheet">
  <!-- Argon CSS -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>

  </head>
<body style="background: linear-gradient(to bottom, #ffffff 14%, #ffffff 108%);">
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
            <a class="nav-link " href="userpage">
              <i class="fas fa-plus-circle text-green"></i> Add Patient
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="family">
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
   <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block">List of Families</a>
        <!-- Form -->
        <form style="margin-left: 320px;">
         
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
                  <span class="mb-0 text-sm  font-weight-bold"><?php echo strtoupper($data[1]['userlist'][0]->FN) ?> <?php echo strtoupper($data[1]['userlist'][0]->LN) ?></span>
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
            </div>
          </div>
    </div>
      
    <!-- Page content -->
      
      <div class="container mt--9">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
               <h1 style="text-align: center;"><?php echo $data[2]['hname'][0]->Name?> LIST OF FAMILIES</h1>
              <hr class="my-3">
              <button class="btn btn-icon btn-3 btn-secondary" id="addfamily" data-toggle="modal" data-target="#exampleModal" type="button">
      <span class="btn-inner--icon" ><i class="fas fa-folder-plus"></i></span>
      
      <span class="btn-inner--text">Add New Family</span>
        </button>
         <small id="passwordHelpBlock" class="form-text text-muted">
(Click the button to Add Family)
</small>  

              <h1 class="mb-0">Families</h1>
              <br/>
    <table id="example" class="table align-items-center table-flush" cellspacing="0" width="100%">
      <thead class="thead-light">
      <tr>
      <th scope="col">Family No</th>
      <th scope="col">Last Name</th>
      <th scope="col">First Name</th>
      <th scope="col">Middle Name</th>
      <th scope="col">Address</th>
      <th scope="col"></th>
      </tr>
      </thead>
      <tbody></tbody>
      </table>
   </div>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
  <form action="<?php echo base_url('template/submitFamilyRecords') ?>" id="testform" method="post">
  <input type="hidden" name="txtHCID" id="txtHCID" value="<?php echo $data[1]['userlist'][0]->HCID?>"/>
  <input type="hidden" name="inputAssist" id="inputAssist" value="<?php echo $data[1]['userlist'][0]->code?>"/>
  <input type="hidden" name="inputinsert" id="inputinsert" value="<?php echo date('Y-m-d H:i:s'); ?>"/>
  <input type="hidden" name="inputnote" id="inputnote"/>
  <input type="hidden" name="inputFam" id="inputFam" value=""/>
  <h2>Family Head</h2>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Last Name</label>
      <input type="text" class="form-control" id="inputLN" name="inputLN" placeholder="Last Name">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">First Name</label>
      <input type="text" class="form-control" id="inputFN" name="inputFN" placeholder="First Name">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Middle Name</label>
      <input type="text" class="form-control" id="inputMN" name="inputMN" placeholder="Middle Name">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Brgy</label>
      <select class="custom-select" style="text-transform: uppercase;" id="inputBrgy" name="inputBrgy" required>
      <option value="">Select Brgy...</option>
      <?php foreach ($data[0]['brgylist'] as $test) { ?>
        <option><?php echo $test->BRGY; ?>
        <?php }?></option>
    </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">City/Municipality</label>
      <select class="custom-select" style="text-transform: uppercase;" id="inputC" name="inputC" required>
          <option value="TAGUIG">Taguig</option>
          <option value="MAKATI">Makati</option>
          <option value="MANILA">Manila</option>
    </select>
    </div>
    <div class="form-group col-md-4">
    <label for="inputPassword4">Health Center</label>
    <input type="text" class="form-control" id="inputHCID" name="inputHCID" value="<?php echo $data[2]['hname'][0]->Name?>" disabled>
    </div>
  </div>
  <div class="modal-footer">
        <div class="form-group">
  </div>
  <button class="btn btn-primary" id="buttonAdd" type="submit">Add Family</button>
      </div>
</form>
    </div>
  </div>
</div>
    </div>
  </div>
</div>

 <!-- Core -->
<div class="modal fade" id="report" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<div class="modal" id="myModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body ">
        <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Family Members (Relation) :">
         <ol id="friendsList">
         </ol>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" onclick="javascript:window.location.reload()" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready( function () {
    var table = $('#example').DataTable({
      "ajax": '<?php echo base_url('template/getFamilyCode/'.$data[2]['hname'][0]->HCID); ?>',
      "type": 'POST',
      "columnDefs": [
                {"targets":-1,"data": null,'defaultContent': '<div class="dropdown"><a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a><div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow"><button id="viewBtn" class="dropdown-item"><i class="fas fa-users"></i>View Family Members</button><button id="editBtn" class="dropdown-item"><i class="fas fa-edit"></i>Edit</button><button id="deleteBtn" class="dropdown-item"><i class="fas fa-trash-alt"></i>Delete</button></div></div>'},
                {
      "targets": [1,2,3,4,5],
      "orderable": false}
                ]
    });

    $('#exampleModal').on('hidden.bs.modal', function () {
    $(this).find('form').trigger('reset');
    })

     $("#addfamily").on("click",function(){
        $(".modal-body #buttonAdd").html('Add Family');
     });

     $("#nav").click(function(){
      $("#report").modal('show')
    }); 


    $('#example tbody').on( 'click', 'button', function (e) {
            var data = table.row($(this).parents('tr') ).data();
            var action=this.id;
            var FNo = data[0];
            $("#friendsList").empty();
            if (action=='viewBtn')
            {
                $("#FamNo").val(FNo);
                $.ajax(
                {
                url:'<?php echo base_url('template/getFDesc/'); ?>',
                type:'POST',
                data:{'FNo': FNo},
                success: function(data){
                  if(data==0)
                  {
                      $(".modal-body").html('No Family Tags');
                     $("#myModal").modal('show')
                  }
                  else
                  {
                var parsed= JSON.parse(data);
                 $.each(parsed,function(index,value)
                  {
                     $("#friendsList").append('<li>'+value[0]+":"+" " +value[1]+" "+value[2]+" "+ value[3]+" "
                      +"("+value[4]+")"+'</li>');
                     $("#myModal").modal('show')
                  });
                }
                }
                }
                );
            }
            if (action=='deleteBtn')
            {
                window.location.href = "deleteFam/"+ FNo;
            }
            if (action=='editBtn')
            {
                $.ajax(
                {
                url:'<?php echo base_url('template/getFInfo/'); ?>',
                type:'POST',
                data:{'FNo': FNo},
                success: function(data){
                var parsed= JSON.parse(data);
                 $.each(parsed,function(index,value)
                  {
                    $(".modal-body #inputLN").val(value[1]);
                    $(".modal-body #inputFN").val(value[2]);
                    $(".modal-body #inputMN").val(value[3]);
                    $(".modal-body #inputBrgy").val(value[4]).change();
                    $(".modal-body #inputC").val(value[5]).change();
                    $("#exampleModal").modal('show')
                    $(".modal-body #inputFam").val(value[0]);
                    $(".modal-body #buttonAdd").html('Edit Family');
                    $("#testform").attr("action",'<?php echo base_url('template/editFam/') ?>');
                  });
                }
                }
                );
            }
            });
});
</script>

</body>
</html>