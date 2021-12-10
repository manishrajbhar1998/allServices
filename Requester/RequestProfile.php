<?php

session_start();
include('../dbConnection.php');


// Checking is session set
if(isset($_SESSION['is_login'])){
    $email = $_SESSION['remail'];


   $sql = "SELECT r_name, r_email FROM newregisteration WHERE r_email = '$email' ";
   $result = $con->query($sql);

   if($result->num_rows >= 1){
       $row = $result->fetch_assoc();
       $name = $row['r_name'];
   }

   if(isset($_POST['update'])){
    //    checking name wile updating is empty or not
       if($_POST['rname'] == ""){
           $msg = "<div class='alert alert-warning mt-2'>Fill all Fields </div>";

         // if not empty   
       }else{
             $name = $_POST['rname'];
             $sql = "UPDATE newregisteration SET r_name = '$name' WHERE r_email='$email' ";
             if($con->query($sql)){
                $msg = "<div class='alert alert-success mt-2' role='alert'>Updated Successfully</div>";
             }else{
                $msg = "<div class='alert alert-warning mt-2' role='alert'>Unable to Update</div>";
             }
       }
   }

//    if session not set direct to login page
}else{
    echo "<script>location.href='Login.php' </script>";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Fontawsome css -->
    <link rel="stylesheet" href="../css/fontawsome.min.css">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <!-- Custom css -->
    <link rel="stylesheet" href="../css/custom.css">

</head>
<body>
    <!-- Top Navbar -->
    <nav class="navbar nav-bar-dark fixed-top bg-primary flex-md-nowrap shadow ">
        <a href="RequestProfile.php" class="navbar-brand col-sm-3 col-md-2 text-white mr-0">Eco-Electronics</a>
    </nav>

    
    <div class="container-fluid mt-5 py-5">
        <div class="row">
            <!-- Side Bar start-->
            <nav class="col-sm-2 bg-light-sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item"><a href="RequestProfile.php" class="nav-link active"><i class="fas fa-user"></i>Profile</a></li>
                        <li class="nav-item"><a href="submitRequest.php" class="nav-link"><i class="fab fa-accessible-icon"></i>Submit Request</a></li>
                        <li class="nav-item"><a href="CheckStatus.php" class="nav-link"><i class="fab fa-servicestack"></i>Check Status</a></li>
                        <li class="nav-item"><a href="changePassword.php" class="nav-link"><i class="fas fa-key"></i>Change Password</a></li>
                        <li class="nav-item"><a href="logout.php" class="nav-link"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                    </ul>
                </div>
            </nav>
           <!-- Side Bar ends-->

           <!-- Profile area start -->
           <div class="col-sm-6">
               <form action="" method="post" class="shadow-lg p-3">
                   <div class="form-group mt-4">
                       <label for="inputEmail">Email</label>
                       <input type="email" name="remail" id="inputEmail" value="<?php echo $email; ?>" class="form-control" >
                   </div>

                   <div class="form-group mt-4">
                       <label for="name">Name</label>
                       <input type="text" name="rname" id="name" value="<?php echo $name; ?>"  class="form-control" >
                   </div>

                   <button type="submit" class="btn btn-danger mt-4" name="update">Update</button>
                   <?php  if(isset($msg)){echo $msg;}?>
               </form>
           </div>

           <!-- Profile area end -->
            
        </div>
    </div>

    <!-- Javascript files -->
    <script src="../js/Jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/fontawsome.min.js"></script>
</body>
</html>