
<?php
session_start();

 include "includes/secure.php";
 include "includes/connection.php";
 include('includes/headers.php');
 include('includes/navbar.php');

?>


<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Students Data</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr class="text-center">
                      <th>Name</th>
                      <th>Mobile No.</th>
                    </tr>
                  </thead>
                    
<?php 
    $q = " select * from apply";

    $result = mysqli_query($con, $q);
    
    while ( $final = mysqli_fetch_array($result)) {
     
?>                  
                  <tbody>
                    <tr class="text-center">
                      <td><?php echo $final['name']; ?></td>
                      <td><?php echo $final['mobile']; ?></td>
                    </tr>
  <?php } ?>
                  </tbody>
                 </table>
              </div>
            </div>     
          </div>
        </div>
        <!-- /.container-fluid -->







<?php
 include('includes/script.php');
 include('includes/footer.php');

?>