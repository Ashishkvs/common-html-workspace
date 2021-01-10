
<?php
session_start();

 include "includes/secure.php";
 include "includes/connection.php";
 include('includes/headers.php');
 include('includes/navbar.php');

?>
 <section class="">
  <h2 class="text-center text-white mt-5 ">Login Page</h2>
  <hr>
   
    
    <div class="container ">
     <div class="row py-5 justify-content-lg-center">
	   <div class="col-12 col-lg-6 col-md-6 col-sm-12 centercard ">
	     <div class="card  shadow " >
          <div class="card-header text-center font-weight-bold text-white bg-success">Send Massage To All Users </div>

          <div class="card-body">
     <form action="apply_action.php" method="POST" class="was-validated" >

    <div class="form-check">
      <label for="email">Email Id</label>
     <input type="email" class="form-control" id="email" placeholder="Email Id" name="email" required autocomplete="off">
     <div class="valid-feedback">Valid.</div>
     <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-check">
      <label for="massage">Massage</label>
     <textarea name="massage" id="massage" class="form-control"></textarea>
     <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
<br>
    
    <div class="text-center">
       <button type="submit" class="btn btn-primary w-75" name="Send">Send Now</button>
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