<?php
session_start();

 include "includes/connection.php";
 include "includes/secure.php";
    $q = " select * from apply";

    $result = mysqli_query($con, $q);

    $num = mysqli_num_rows($result);


 include('includes/headers.php');
 include('includes/navbar.php');

?>
  
   <?php

    $q1 = " select * from admin";

    $result1 = mysqli_query($con, $q1);

    $num1 = mysqli_num_rows($result1);

?>
   

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- total students Card  -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card bg-primary text-white border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                          Total Students</div>
                      <div class="h5 mb-0 font-weight-bold text-white-800"><?php 
                                    echo "$num";  ?></div>

                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-4x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Total Admin -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card bg-success border-left-danger text-white shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Total Admin</div>
                      <div class="h5 mb-0 font-weight-bold text-white-800"><?php 
                                    echo "$num1";  ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-4x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info bg-danger text-white shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold  text-uppercase mb-1">Total issue  Certificates</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-white-800">0</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-4x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger bg-info text-white shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold  text-uppercase mb-1">Pending Certificates</div>
                      <div class="h5 mb-0 font-weight-bold text-white-800">0</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-4x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php
 include('includes/script.php');
 include('includes/footer.php');

?>


 

