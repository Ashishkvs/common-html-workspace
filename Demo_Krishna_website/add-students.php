
<?php
session_start();

 
 include "includes/secure.php";
 include "includes/connection.php";
 include('includes/headers.php');
 include('includes/navbar.php');



 if (isset($_POST['submit'])) {
  
    

    $name = $_POST['name'];
    $father = $_POST['father'];
    $mother = $_POST['mother'];
    $dob = $_POST['dob'];
    $aadhar = $_POST['aadhar'];
    $mobile  = $_POST['mobile'];
    $email = $_POST['email'];
    $full  = $_POST['full'];
    $password = $_POST['password'];
    $full = $_POST['full'];



  $qy= " insert  into apply(name , father , mother , dob , aadhar , mobile , email , full , password) values ('$name' , '$father' , '$mother' , '$dob' , '$aadhar' , '$mobile' , '$email' , '$full' , '$password' )";
  mysqli_query($con, $qy);
  echo '<div class="alert text-center alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Student Successfully Registered.
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
     <form method="post" class="was-validated" >
    
    <div class="form-check">
      <label for="name">Name</label>
     <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name" required autocomplete="off" >
     <div class="valid-feedback">Valid.</div>
     <div class="invalid-feedback">Please fill out this field.</div>
   </div>
    
    <div class="form-check">  
      <label for="father">Father's Name</label>
     <input type="text" class="form-control" id="father" placeholder="Enter your father's name" name="father" required autocomplete="off">
     <div class="valid-feedback">Valid.</div>
     <div class="invalid-feedback">Please fill out this field.</div>
   </div>

   <div class="form-check">
      <label for="mname">Mother's Name</label>
     <input type="text" class="form-control" id="mname" placeholder="Enter Your Mother's Name" name="mother" required autocomplete="off">
     <div class="valid-feedback">Valid.</div>
     <div class="invalid-feedback">Please fill out this field.</div>
   </div> 

    <div class="form-check">
      <label for="dob">Date of Birth</label>
     <input type="text" class="form-control" id="dob" placeholder="dd/mm/yy" name="dob" required autocomplete="off">
     <div class="valid-feedback">Valid.</div>
     <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-check">
     	<p class="font-weight-bold">Gender</p>
       <label class="form-check-label">
      <input type="radio" class="form-check-input ml-2" name="gender"> <p class="ml-4">Male</p>
       </label>

       <label class="form-check-label">
      <input type="radio" class="form-check-input ml-2" name="gender"><p class="ml-4">Female</p>
       </label>
    </div>

    <div class="form-check">
      <label for="aadhar">Aadhar Number</label>
     <input type="number" class="form-control" id="aadhar" placeholder="Aadhar Number" name="aadhar" required autocomplete="off">
     <div class="valid-feedback">Valid.</div>
     <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-check">  
      <label for="mno">Mobile Number</label>
     <input type="number" class="form-control" id="mno" placeholder="Mobile Number" name="mobile" required autocomplete="off">
     <div class="valid-feedback">Valid.</div>
     <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-check">
      <label for="email">Email Id</label>
     <input type="email" class="form-control" id="email" placeholder="Email Id" name="email" required autocomplete="off">
     <div class="valid-feedback">Valid.</div>
     <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-check">
       <label for="fullad">Full Address</label>
      <textarea  type="text" class="form-control" id="fullad" placeholder="Full Address" name="full" required autocomplete="off"></textarea>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-check">
      <label for="password">Password</label>
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