
<?php
session_start();

 
 include "includes/securre.php";
 include "includes/connection.php";
 include('includes/headers.php');
 include('includes/navbar.php');




 if (isset($_POST['submit'])) {
  
    

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    

  $qy= " insert  into admin(name , email , password) values ('$name' , '$email' , '$password' )";
  mysqli_query($con, $qy);
  echo '<div class="alert text-center alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> New Admin Successfully Registered.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  unset($_POST['submit']);

         

 }



?>
    <div class="container ">
     <div class="row py-5 justify-content-lg-center">
	   <div class="col-12 col-lg-6 col-md-6 col-sm-12 centercard ">
	     <div class="card  shadow " >
          <div class="card-header text-center font-weight-bold text-white bg-success">Add Students</div>

          <div class="card-body">
     <form  method="POST" class="was-validated" >
    

    <div class="form-check">
      <label for="email">New Admin Name </label>
     <input type="text" class="form-control" id="email" placeholder="Enter Name" name="name" required autocomplete="off">
     <div class="valid-feedback">Valid.</div>
     <div class="invalid-feedback">Please fill out this field.</div>
    </div>
   

    <div class="form-check">
      <label for="email">Email Id of New Admin </label>
     <input type="email" class="form-control" id="email" placeholder="Enter Email Id" name="email" required autocomplete="off">
     <div class="valid-feedback">Valid.</div>
     <div class="invalid-feedback">Please fill out this field.</div>
    </div>


    <div class="form-check">
      <label for="password">New Admin Password</label>
     <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
     <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    
    <div class="text-center">
       <button type="submit" class="btn btn-primary w-75" name="submit">Submit</button>
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
