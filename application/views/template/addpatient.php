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
  <?php include('inc/sidenav.php'); ?>
</div>
  <!-- Main content -->
  <div class="main-content">
    <?php include('inc/topnav.php'); ?>

    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->

          <!-- Button -->
     <button class="btn btn-icon btn-3 btn-secondary" data-toggle="modal" data-target="#exampleModalLong" type="button">
      <span class="btn-inner--icon"><i class="fas fa-user-plus fa-lg text-default"></i></span>
      
      <span class="btn-inner--text">Add Patient</span>
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
      <th scope="col">ID</th>
      <th scope="col">Status</th>
      <th scope="col">Last Name</th>
      <th scope="col">First Name</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Sex</th>
      <th scope="col">Address</th>
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
   <input type="hidden" name="inputDel" id="inputDel" value="1"/>
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
          <option value="DAUGHTER">DAUGHTER</option>
          <option value="SON">SON</option>
          <option value="NEPHEW">NEPHEW</option>
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
        <option><?php echo $test->Brgy; ?>
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
      "ajax": '<?php echo base_url('template/getEventDatatable/'.$data[3]['userlist'][0]->HCID); ?>',
      "type": 'POST',
      //Set column definition initialisation properties.
            "columnDefs": [
                {"targets":-1,"className": 'dt-body-center',"data": null,'defaultContent': '<div class="dropdown"><a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a><div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow"><button id="viewBtn" class="dropdown-item"><i class="fas fa-folder"></i>View Records</button><button id="editBtn" class="dropdown-item"><i class="fas fa-edit"></i>Edit</button><button id="deleteBtn" class="dropdown-item"><i class="fas fa-trash-alt"></i>Delete</button></div></div>'},
                {
      "targets": [1,2,3,4,5,6,7],
      "orderable": false}
            ]
    });

    $('#myTable tbody').on( 'click', 'button', function (e) {
            var data = table.row($(this).parents('tr') ).data();
            var action=this.id;
            var ID = data[0];
            var code = $('#inputassist').val();
            var FN = data[2];
            var LN = data[3];
            var note = "DELETED" + " " + "PATIENT" + " " + FN + " " + LN;
            var date = $('#inputinsert').val();
            if (action=='viewBtn')
            {
            window.location.href = "getRecords/"+ ID;
            }
            if (action=='deleteBtn')
            {
            window.location.href = "deletePInfo/"+ ID + "/" + code + "/" + note + "/" + date;
            }
            if (action=='editBtn')
            {
              $.ajax({
                  url: '<?php echo base_url('template/edit/'); ?>',  
                  type: 'POST',
                  data: {'ID': ID},
                  success: function (result) 
                  {
                    alert(result)
                  var parsed= JSON.parse(result);
                  $.each(parsed,function(index,value)
                  {

                    $(".modal-body #inputID").val(value[0]);
                    $(".modal-body #inputFN").val(value[1]);
                    $(".modal-body #inputMN").val(value[2]);
                    $(".modal-body #inputLN").val(value[3]);
                    $(".modal-body #inputS").val(value[4]).change();
                    $(".modal-body #inputSe").val(value[5]).change();
                    $(".modal-body #inputRe").val(value[6]).change();
                    $(".modal-body #inputBD").val(value[7]);
                    $(".modal-body #inputType").val(value[8]);
                    $(".modal-body #inputAge").val(value[9]);
                    $(".modal-body #inputN").val(value[10]).change();
                    $(".modal-body #inputCS").val(value[11]).change();
                    $(".modal-body #inputPN").val(value[12]);
                    $(".modal-body #inputFam").val(value[13]);
                    $(".modal-body #inputAdd").val(value[14]);
                    $(".modal-body #inputBrgy").val(value[15]);
                    $(".modal-body #inputSt").val(value[16]).change();
                    $(".modal-body #inputC").val(value[17]).change();
                    $(".modal-body #inputZ").val(value[18]);
                    $(".modal-body #inputM").val(value[19]);
                    $(".modal-body #inputR").val(value[20]);
                    $(".modal-body #inputRel").val(value[21]).change();
                    $(".modal-body #txtHCID").val(value[22]);
                    
                    var val = $("#inputType").val();
                    if(val=='CHILD' || val== 'ADOLESCENCE')
                    {
                      $("#inputPN").prop("disabled",true);
                    }
                    else
                    {
                      $("#inputPN").prop("disabled",false);
                    }
                    $("#exampleModalLong").modal('show')
                    $("#testform").attr("action",'<?php echo base_url('template/updateNewRecords') ?>');
                  });
                  } 
                  });
            }
            });
  });

  function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    alert ("No Characters Allowed")
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
};

$("#inputFam").change(function() 
  {    
    if($(this).val()=="New")
    {
      window.location="family";
    }
    else
    {
      
    }
  });

 $("#inputBD").change(function() 
  {    
    $val= $(this).val();
    var today = new Date();
    var birthDate = new Date($val);
    var age = today.getFullYear() - birthDate.getFullYear();
    if(age > 59)
    {
        document.getElementById("inputType").value = "SENIOR";
        document.getElementById("inputAge").value = age;
        document.getElementById("inputPN").disabled = false;
    }
    else if (age > 19)
    {
      document.getElementById("inputType").value = "ADULT";
      document.getElementById("inputAge").value = age;
      document.getElementById("inputPN").disabled = false; 
    }
     else if (age > 12)
    {
      document.getElementById("inputType").value = "ADOLESCENCE";
      document.getElementById("inputAge").value = age;
      document.getElementById("inputPN").disabled = true; 
     
    }
     else
    {
     document.getElementById("inputType").value = "CHILD";
     document.getElementById("inputAge").value = age;
     document.getElementById("inputPN").disabled = true; 
    }
  });

$('#inputID').change(function(){
   var username = $('#inputID').val();
   if(username != ''){
    $.ajax({
     url: "<?php echo base_url(); ?>template/checkUsername",
     method: "POST",
     data: {username:username},
     success: function(data){
      $('#username_result').html(data);
     }
    });
   }
  });
</script>
</body>

</html>