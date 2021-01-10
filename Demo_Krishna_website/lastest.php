<?php
session_start();

if (!isset($_SESSION['email'])) {
 header('location:admin-login.php');}

 include "includes/secure.php";
 include "includes/connection.php";
 include('includes/headers.php');
 include('includes/navbar.php');

if (isset($_POST['update'])) {

   $new = $_POST['massage'];

   $up = "UPDATE `lastest_news` SET `id`='1',`news`= '$new' ";
    mysqli_query($con, $up);

    echo '<div class="alert text-center alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Student Successfully Registered.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

   unset($_POST['update']);
 

         

}

?>


<section class="">
  <h2 class="text-center text-white mt-5 ">Login Page</h2>
  <hr>
  
    
    <div class="container ">
     <div class="row py-5 justify-content-lg-center">
	   <div class="col-12 col-lg-6 col-md-6 col-sm-12 centercard ">
	     <div class="card  shadow " >
          <div class="card-header text-center font-weight-bold text-white bg-success">Update Lastest News On Website Directly </div>

          <div class="card-body">
     <form method="post" class="was-validated" >

    <div class="form-check">
      <label for="massage">Lastest News</label>
     <textarea name="massage" id="massage" class="form-control"  placeholder="Enter Lastest News">
     </textarea>
     <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
<br>
    
    <div class="text-center">
       <button type="submit" class="btn btn-primary w-75" name="update">Update Now</button>
    </div>

</form>

          </div>	
         </div>
       </div>
     </div>
   </div>




<?php
 include('includes/script.php');
 include('includes/footer.php');

?>