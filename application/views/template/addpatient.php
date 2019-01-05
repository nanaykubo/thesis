<!DOCTYPE html>
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
  <!-- Argon CSS -->
  <link type="text/css" href="../assets/css/argon.css?v=1.0.0" rel="stylesheet">
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
              <h3 class="mb-0">Patients</h3>
            </div>
            <div class="table-responsive">
              <table class="table table-hover align-items-center ">
                <thead class="thead-light">
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">ID</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Middle Name</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">Sex</th>
                    <th scope="col">Address</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <td>
                  <a href="records" class="fas fa-folder-open text-orange fa-2x"></a></td>
                  <td>1</td>
                  <td>Basco</td>
                  <td>Karen</td>
                  <td>D</td>
                  <td>June 23 1996</td>
                  <td>Female</td>
                  <td>San Andres, Manila, NCR Fifth District, NCR</td>
                  <td>

                  <a href="#" data-toggle="modal" data-target="#exampleModalLong" class="fas fa-edit fa-2x"></a>  
                  <a href="#" class="fas fa-times text-red fa-2x"></a>    
                  </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>

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
<form class="needs-validation" novalidate>
<div class="tab-content " id="nav-tabContent">
  <!-- patient tab -->
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
      <br/>

      <!-- body -->  <div class="form-row">
    <div class="col-md-12">
    <label for="inputAddress">ID *</label>
    <input type="text" required class="form-control" id="inputAddress" placeholder="Enter your ID">
    <div class="invalid-feedback">
          Please enter an ID
        </div>
        <br/>
  </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">First Name *</label>
      <input type="text" class="form-control" id="validationCustom02" placeholder="First Name"required>
      <div class="invalid-feedback">
          Please enter your First Name
        </div>
    </div>
     <div class="col-md-4 mb-3">
      <label for="validationCustom02">Middle name</label>
      <input type="text" class="form-control" id="validationCustom02" placeholder="Middle name">
    </div>
     <div class="col-md-4 mb-3">
      <label for="validationCustom01">Last Name *</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="Last Name" required>
      <div class="invalid-feedback">
          Please enter your Last Name
        </div>
    </div>
    <div class="col-md-4 mb-3">
    <label for="validationCustom01">Sex *</label>
    <select class="custom-select" required>
      <option value="">Select...</option>
      <option>Male</option>
      <option>Female</option>
    </select>
    <div class="invalid-feedback">Example invalid custom select feedback</div>
  </div>
  <div class="col-md-4 mb-3">
    <label for="validationCustom01">Birth Date *</label>
    <input type="date" class="form-control" id="validationCustom01" placeholder="Last Name" required>
    <div class="invalid-feedback">Please enter your Birth Date</div>
  </div>
  <div class="col-md-4 mb-3">
    <label for="validationCustom01">Religion *</label>
    <select class="custom-select" required>
      <option value="">Select...</option>
      <option>Catholic</option>
      <option>Christian</option>
      <option>Born Again</option>
    </select>
    <div class="invalid-feedback">Please Select one of the following options</div>
  </div>
  <div class="col-md-4 mb-3">
    <label for="validationCustom01">Nationality *</label>
    <select class="custom-select" required>
      <option value="">Select...</option>
      <option>Catholic</option>
      <option>Christian</option>
      <option>Born Again</option>
    </select>
    <div class="invalid-feedback">Please Select one of the following options</div>
  </div>
  <div class="col-md-4 mb-3">
    <label for="validationCustom01">Civil Status *</label>
    <select class="custom-select" required>
      <option value="">Select...</option>
      <option>Catholic</option>
      <option>Christian</option>
      <option>Born Again</option>
    </select>
    <div class="invalid-feedback">Please Select one of the following options</div>
  </div>
  <div class="col-md-4 mb-3">
    <label for="validationCustom01">BloodType *</label>
    <select class="custom-select" required>
      <option value="">Select...</option>
      <option>Catholic</option>
      <option>Christian</option>
      <option>Born Again</option>
    </select>
    <div class="invalid-feedback">Please Select one of the following options</div>
  </div>
  <div class="col-md-4 mb-3">
      <label for="validationCustom01">Philhealth No *</label>
      <input type="text" class="form-control" id="validationCustom02" placeholder="First Name"required>
      <div class="invalid-feedback">
          Please enter your Philhealth No
        </div>
</div>
    </div>

  </div>
  <!-- body -->
  <!-- contact tab -->
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
<br/>
  <div class="form-row">
    <div class="col-md-12">
    <label for="inputAddress">Permanent Address *</label>     <small id="passwordHelpBlock" class="form-text text-muted"> (House/Bldg. No., Street, Subdivision)</small>
    <br/>
    <input type="text" required class="form-control" id="inputAddress" placeholder="(House/Bldg. No., Street, Subdivision" required>
    <div class="invalid-feedback">
          Please your House/Bldg, No. , Street, Subdivision
        </div>
  </div>

      <div class="col-md-4 mb-3">
        <br/>
    <label for="validationCustom01">Region *</label>
    <select class="custom-select" required>
      <option value="">Select Region...</option>
      <option>Taguig</option>
      <option>Makati</option>
      <option>Manila</option>
    </select>
    <div class="invalid-feedback">Please Select one of the following options</div>
  </div>
  <br/>
  <div class="col-md-4 mb-3">
        <br/>
    <label for="validationCustom01">Province *</label>
    <select class="custom-select" required>
      <option value="">Select Province...</option>
      <option>Taguig</option>
      <option>Makati</option>
      <option>Manila</option>
    </select>
    <div class="invalid-feedback">Please Select one of the following options</div>
  </div>
    <div class="col-md-4 mb-3">
        <br/>
    <label for="validationCustom01">City/Municipality *</label>
    <select class="custom-select" required>
      <option value="">Select City/Municipality...</option>
      <option>Taguig</option>
      <option>Makati</option>
      <option>Manila</option>
    </select>
    <div class="invalid-feedback">Please Select one of the following options</div>
  </div>
        <div class="col-md-4 mb-3">
      <label for="validationCustom01">Zip Code *</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="Zip Code" required>
      <div class="invalid-feedback">
          Please enter ZipCode
        </div>
    </div>

    <div class="col-md-4">
      <label for="validationCustom01">Mobile *</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="Mobile" required>
      <div class="invalid-feedback">
          Please enter Mobile
        </div>
    </div>

    <div class="col-md-4">
      <label for="validationCustom01">Landline </label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="Landline" required>
      <div class="invalid-feedback">
          Please enter Landline
        </div>
    </div>

    <div class="col-md-12">
    <label for="inputAddress">Email *</label>   
    <br/>
    <input type="text" class="form-control" placeholder="Email" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
    <div class="invalid-feedback">
          Please enter your email
        </div>
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
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Optional JS -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBd3PjUqq81lIOfBPYXrQGWwK5T4ystZjA"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.0.0"></script>
</body>

</html>