<?php

// including connection file
include_once('dbConnection.php');

if(isset($_POST['signup'])){

    // Checking all Field should not be empty (if empty then if condition work other wise else condition)
    if(($_POST['rname'] == "") || ($_POST['remail'] == "") || ($_POST['rpassword'] == "")){

        $regmsg = "<div class='alert alert-danger mt-2' role='alert'>All Fields are Required</div>";
    }else{
        
        // takeing all name value;
        $name = $_POST['rname'];
        $email = $_POST['remail'];
        $password = $_POST['rpassword'];

        // checking email is allready register or not
        $sql = "SELECT r_email FROM newregisteration WHERE r_email = '$email' ";
        $result = $con->query($sql);
        
        if($result->num_rows >= 1){
            // if email allready register
            $regmsg = "<div class='alert alert-warning mt-2' role='alert'>This Email id is Allrady Register !</div>";
        }else{
            // if new email
            $sql1 = "INSERT INTO newregisteration(r_name,r_email,r_password) VALUES('$name','$email','$password')";
            $exec = $con->query($sql1);

            // if sql1 query executed successfully
            if($exec == TRUE){
                $regmsg = "<div class='alert alert-success mt-2' role='alert'>Account created successfuly</div>";
                // if query not successfull
            }else{
                $regmsg = "<div class='alert alert-warning mt-2' role='aler'>Unable to create Account</div>";
            }
        }
    
    }


}

?> 
    
<!-- Registration Start -->
    <div class="container pt-5" id="register">
         <h2 class="text-center">Create an Account</h2>
         <div class="row mt-4 mt-4">
             <div class="col-md-6 offset-md-3">
                 <form action="" method="post" class="shadow-lg p-4">
                     <div class="form-group">
                         <i class="fas fa-user"></i><label for="name" class="font-weight-bold p-2">Name</label>
                         <input type="text" class="form-control" placeholder="Name" name="rname">
                     </div>
                     <div class="form-group">
                        <i class="fas fa-envelope"></i><label for="emal" class="font-weight-bold p-2">Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="remail">
                        <small class="form-text">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key"></i><label for="pass" class="font-weight-bold p-2">New Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="rpassword">
                    </div>
                   <button type="submit" class="btn btn-danger mt-5 btn-block" name="signup">Sign Up</button>
                   <p><em style="font-size: 13px;">Note - By clicking Sign Up, you agree to our Terms, Data Ploicy and Cookies Policy</em></p> 
                   <?php  if(isset($regmsg)) {echo $regmsg;} ?>
                 </form>
             </div>
         </div>
     </div>
<!-- Registration end -->