<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <!--<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>-->
  </div>

  <!-- Content Row -->
  <div class="row pb-3">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Admin</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

               <h4>Total Admin: 3</h4>

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Earnings (Annual)</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">RM100,000</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">10%</div>
                </div>
                <div class="col">
                  <div class="progress progress-sm mr-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="50"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Content Row -->
<hr>
  <!-- priavte table -->
  <p class="text-danger"><i class="fas fa-exclamation-circle text-danger"></i> The Edit Function is Under Construction</p>
<h1 class="text-center font-weight-bold pt-4 mb-4 mt-2">
      Customers' Details(Private Vehicles)
    <form action="email.php"  method="POST"  style="display: inline!important;">
    <button type="button" name="quotation" class="btn btn-primary btn-lg mr-auto my-auto quote">Send Quotation</button>
    </form></h1>

<?php
  $connection = new mysqli("mysql.hoster905.com","teamtwo","gohhozohwungaif","istepstem_team_two");
  
  $query = "SELECT * FROM `private vehicles`";
  $query_run = mysqli_query($connection, $query);
?>
<table class="table table-striped table-dark mx-auto font-weight-bold">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Full Name</th>
      <th scope="col">NRIC</th>
      <th scope="col">Vehicle Registration Number</th>
      <th scope="col">E-hailing</th>
      <th scope="col">Email</th>
      <th scope="col">Phone number</th>
      <th scope="col">Postcode</th>
      <th scope="col">EDIT</th>
      <th scope="col">DELETE</th>
    </tr>
  </thead>
<?php
  if($query_run) {
    foreach($query_run as $row){
?>
  <tbody>
    <tr>
      <td><?php echo $row['ID']?></td>
      <td><?php echo $row['Full Name']?></td>
      <td><?php echo $row['NRIC']?></td>
      <td><?php echo $row['Vehicle Registration Number']?></td>
      <td><?php echo $row['E-Hailing']?></td>
      <td><?php echo $row['Email']?></td>
      <td><?php echo $row['Phone Number']?></td>
      <td><?php echo $row['Postcode']?></td>
      <td>
        <button type="button" class="btn btn-success editbtn"> Edit </button>
      </td>
       <td>
        <button type="button" class="btn btn-danger deletebtn"> Delete </button>
      </td>
    </tr>
  </tbody>
<?php
    }
  }
  else {
    echo "No Record Found";
  }
?>
</table>
<!-- Modal Private (EDIT) -->
    <div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title font-weight-bold" id="exampleModalLabel">Edit Customers' Details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
    
                <form action ="updatedata.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="update_id" id="update_id">
                        <div class="form-group">
                            <label>Full Name(As per NRIC)</label>
                            <input type="text" name="fname" id="fname" class="form-control" placeholder="Theng Pei Yi" maxlength="20"
                                required>
                        </div>
    
                        <div class="form-group">
                            <label>NRIC</label>
                            <input type="number" name="ic" id="ic" class="form-control" maxlength="12" placeholder="059190120194"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                required>
                        </div>
    
                        <div class="form-group">
                            <label>Vehicle Registration Number</label>
                            <input type="text" name="Vrn" id="vrn" class="form-control" placeholder="PGA9234" maxlength="7"
                                required>
                        </div>
    
                        <label class="d-block">E-Hailing</label>
                        <div class="form-check d-flex ml-auto">
                            <div>
                                <input type="radio" name="eh" id="eh" class="form-check-input"
                                    style="cursor:pointer!important" value="Yes" >
                                <label class="form-check-label" for="exampleRadios1">
                                    Yes
                                </label>
                            </div>
                            <div style="margin-left: 10%!important">
                                <input type="radio" name="eh" id="eh" class="form-check-input"
                                    style="cursor:pointer!important" value="No" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    No
                                </label>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="Email" id="email" class="form-control" placeholder="thengpy05@gmail.com"
                                required>
                        </div>
    
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" name="phone_no" id="phone" class="form-control" placeholder="0134048128"
                                maxlength="10"
                                
                                required>
                        </div>
    
                        <div class="form-group">
                            <label>Postcode(Vehicle Location)</label>
                            <input type="number" name="Postcode" id="postcode" class="form-control" placeholder="11920" maxlength="5"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                required>
                        </div>
    
                    </div>
                    <div class="modal-footer">
                      <!--<form action="email.php" method="POST">-->
                        <!--<button type="button" name="quotation" class="btn btn-warning mr-auto">Send Quotation</button>-->
                      <!--</form>-->
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<!-- MODAL BUSINESS (EDIT) -->
    <div class="modal fade" id="editmodal_b" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title font-weight-bold" id="exampleModalLabel">Edit Customers' Details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
    
                <form action ="updatedata_b.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="update_id_b" id="update_id_b">
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" name="fname_b" id="fname_b" class="form-control" placeholder="Theng Pei Yi" maxlength="20"
                                required>
                        </div>
    
                        <div class="form-group">
                            <label>Business Registration Number</label>
                            <input type="text" name="brn" id="brn" class="form-control" maxlength="12" placeholder="059190120194"
                                
                                required>
                        </div>
    
                        <div class="form-group">
                            <label>Vehicle Registration Number</label>
                            <input type="text" name="Vrn_b" id="vrn_b" class="form-control" placeholder="PGA9234" maxlength="7"
                                required>
                        </div>
    
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="Email_b" id="email_b" class="form-control" placeholder="thengpy05@gmail.com"
                                required>
                        </div>
    
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" name="phone_no_b" id="phone_b" class="form-control" placeholder="0134048128"
                                maxlength="10"
                                
                                required>
                        </div>
    
                        <div class="form-group">
                            <label>Postcode(Vehicle Location)</label>
                            <input type="text" name="Postcode_b" id="postcode_b" class="form-control" placeholder="11920" maxlength="5"
                                required>
                        </div>
    
                    </div>
                    <div class="modal-footer">
                         <!--<form action="email.php" method="POST">-->
                        <!--<button type="button" name="quotation" class="btn btn-warning mr-auto">Send Quotation</button>-->
                      <!--</form>-->
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="updatedata_b" class="btn btn-primary">Update Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- MODAL PRIVATE (DELETE) -->
    <div class="modal fade text-center" id="deletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                   <h2 class="model-title text-danger text-center w-100"><i class="fas fa-exclamation-triangle text-danger" style="font-size: 3rem!important"></i> Caution</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
    
                <form action ="deletedata.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="delete_id" id="delete_id">
                        <h3>Are You Sure?</h3>
                        <h5>The data will be deleted permanently.</h5>
    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                        <button type="submit"  name="deletedata" class="btn btn-primary">YES</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- MODAL BUSINESS (DELETE) -->
    <div class="modal fade text-center" id="deletemodal_b" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                     <h2 class="text-danger model-title text-center w-100"><i class="fas fa-exclamation-triangle text-danger" style="font-size: 3rem!important"></i> Caution</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
    
                <form action ="deletedata_b.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="delete_id_b" id="delete_id_b">
                        <h3>Are You Sure?</h3>
                        <h5>The data will be deleted permanently.</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                        <button type="submit"  name="deletedata_b" class="btn btn-primary">YES</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




<!-- business table -->
           
            
<h1 class="text-center font-weight-bold pt-4 mt-5 mb-4">Customers' Details(Business Vehicles) 
<form action="email_b.php"  method="POST" style="display: inline!important;">
<button type="button" name="quotation_b" class="btn btn-lg btn-primary my-auto quote_b">Send Quotation</button>
</form>
</h1>
<?php
  $connection2 = new mysqli("mysql.hoster905.com","teamtwo","gohhozohwungaif","istepstem_team_two");
  
  $query2 = "SELECT * FROM `business vehicles`";
  $query_run2 = mysqli_query($connection, $query2);
?>
<table class="table table-dark table-striped mx-auto font-weight-bold  mb-5">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Company Name</th>
      <th scope="col">Business Registration Number</th>
      <th scope="col">Vehicle Registration Number</th>
      <th scope="col">Email</th>
      <th scope="col">Phone number</th>
      <th scope="col">Postcode</th>
      <th scope="col">EDIT</th>
      <th scope="col">DELETE</th>
    </tr>
  </thead>
<?php
  if($query_run2) {
    foreach($query_run2 as $row2){
?>
  <tbody>
    <tr>
      <td><?php echo $row2['ID']?></td>
      <td><?php echo $row2['Company Name']?></td>
      <td><?php echo $row2['Business Registration Number']?></td>
      <td><?php echo $row2['Vehicle Registration Number']?></td>
      <td><?php echo $row2['Email']?></td>
      <td><?php echo $row2['Phone Number']?></td>
      <td><?php echo $row2['Postcode']?></td>
      <td>
        <button type="button" class="btn btn-success editbtn_b">Edit</button>
      </td>
      <td>
        <button type="button" class="btn btn-danger deletebtn_b"> Delete </button>
      </td>
    </tr>
    
  </tbody>
<?php
    }
  }
  else {
    echo "No Record Found";
  }
  ?>
</table>






  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>