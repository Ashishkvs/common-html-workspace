
<?php
session_start();

 include "includes/connection.php";
 include "includes/secure.php";
 include('includes/headers.php');
 include('includes/navbar.php');

?>
<!-- Begin Page Content -->
        <div class="container-fluid">


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">All Students Data</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Mobile No.</th>
                      <th>Password</th>
                      <th>Aadhar</th>
                      <th>Father</th>
                      <th>Mother</th>
                      <th>DOB</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                   
<?php 
    $q = " select * from apply";

    $result = mysqli_query($con, $q);
    
    while ( $final = mysqli_fetch_array($result)) {
     
?>

                  <tbody>
                    <tr>
                      <td><?php echo $final['name']; ?></td>
                      <td><?php echo $final['email']; ?></td>
                      <td><?php echo $final['mobile']; ?></td>
                      <td><?php echo $final['password']; ?></td>
                      <td><?php echo $final['aadhar']; ?></td>
                      <td><?php echo $final['father']; ?></td>
                      <td><?php echo $final['mother']; ?></td>
                      <td><?php echo $final['dob']; ?></td>
                      <td><a href="edit-st.php?id=<?php echo $final['id'] ?>" class="btn btn-success"><i class="fa fa-pencil"></i>Edit</a></td>
                      <td><a href="delete-st.php?id=<?php echo $final['id'] ?>" class="btn btn-danger">Delete</a></td>
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