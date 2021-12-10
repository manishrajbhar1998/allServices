<?php

session_start();
include('../dbConnection.php');

if(!isset($_SESSION['is_login'])){
    if(isset($_POST['login'])){

        $email = mysqli_real_escape_string($con,trim($_POST['remail']));
        $password = mysqli_real_escape_string($con,trim($_POST['rpassword']));
        
        $sql = "SELECT r_email, r_password from newregisteration where r_email = '".$email."' AND r_password = '".$password."' limit 1";
        $result = $con->query($sql);
        if($result->num_rows == 1){
            $_SESSION['is_login'] = true;
            $_SESSION['remail'] = $email;
            echo "<script> location.href='RequestProfile.php'</script>";
            exit;
            
        }else{
            $msg = "<div class='alert alert-warning mt-3'> Enter valid email and password</div>";
        }
        
    }
}else{
    echo "<script> location.href='RequestProfile.php'</script>";
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>

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

    <div class="mt-5 text-center" style="font-size: 2rem;">
        <i class="fas fa-stethoscope"></i><span> &nbsp; Oline Service Management System</span>
    </div>
    <p class="text-center  mt-5 mb-5"><i class="fas fa-user-secret text-danger"></i>&nbsp;Requester Area</p>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-4">
                <form action="" method="post" class="shadow-lg p-4">
                    <div class="form-group m-3">
                        <i class="fas fa-user"></i>
                        <label for="" class="font-weight-bold">&nbsp;Email</label>
                       <input type="email" class="form-control" placeholder="Email" name="remail">
                       <small class="form-text">
                           We'll never share your email with anyone else.
                       </small>
                    </div>
                    <div class="form-group m-3">
                        <i class="fas fa-key"></i>
                        <label for="" class="font-weight-bold">&nbsp;Password</label>
                        <input type="password" class="form-control" placeholder="password" name="rpassword">
                    </div>
                    <button type="submit" class="btn btn-outline-danger mt-3" name="login">Login</button>
                    <?php if(isset($msg)){echo $msg ;}?>
                </form>
                <div class="text-center"><a href="../index.php" class="btn btn-info mt-3 shadow-sm"><i class="fas fa-arrow-left"></i>&nbsp;Back to Home</a></div>
                
            </div>
        </div>
    </div>
    
    <!-- Javascript files -->
    <script src="../js/Jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/fontawsome.min.js"></script>
</body>
</html>