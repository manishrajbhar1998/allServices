<?php

include('../dbConnection.php');
define('TITLE','Submit Request');
session_start();
// checking is login or not
if(isset($_SESSION['is_login'])){
    $email = $_SESSION['remail'];
}else{
    echo "<script>location.href='Login.php'</script>";
}

// putting data into submitRequest
if(isset($_POST['submit'])){
   $title = $_POST['title'];
   $description = $_POST['description'];
   $name = $_POST['name'];
   $address1 = $_POST['address1'];
   $address2 = $_POST['address2'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $zip = $_POST['zip'];
   $email = $_POST['email'];
   $mobile = $_POST['mobile'];  
   $date = $_POST['date'];

   $sql = "INSERT INTO submitRequest(title,description,name,address1,address2,city,state,zip,email,mobile,date) 
           VALUES('$title','$description','$name','$address1','$address2','$city','$state','$zip','$email','$mobile','$date')";
    
    if($con->query($sql)){
        $msg = "<div class='alert alert-success mt-2' role='alert'>Updated Successfully</div>";
    }else{
        $msg = "<div class='alert alert-danger mt-2' role='alert'>Unable to submit</div>";
    }
    
}









include('includes/header.php');
?>

<!-- start submite Request start -->
<div class="col-sm-9 col-md-10">
<?php if(isset($msg)){echo $msg;}?>
    <form  action="" method="post" class="mx-5 shadow p-3">
        <div class="form-group">
            <label for="request-title">Request Title</label>
            <input type="text" name="title" placeholder="Enter Title" for="request-title" class="form-control" required>
        </div>

        <div class="form-group mt-3">
            <label for="request-title">Description</label>
            <input type="text" name="description" placeholder="Enter Description" for="request-title" class="form-control" required>
        </div>

        <div class="form-group mt-3">
            <label for="requestName">Name</label>
            <input type="text" name="name" placeholder="Enter name" for="requestName" class="form-control" required>
        </div>
        <!-- address 1 and 2 -->
        <div class="row">
            <div class="form-group col-md-6 mt-3">
                <label for="address1">Address Line 1</label>
                <input type="text" name="address1" placeholder="House No. 123" id="address1" class="form-control" required>
            </div>

            <div class="form-group col-md-6 mt-3">
                <label for="address2">Address Line 1</label>
                <input type="text" name="address2" placeholder="Railway Colony" id="address2" class="form-control" required>
            </div>
        </div>
        <!-- city state pincode -->
        <div class="row">
            <div class="form-group col-md-6 mt-3">
                <label for="city">City</label>
                <input type="text" name="city"  id="city" class="form-control" required>
            </div>

            <div class="form-group col-md-4 mt-3">
                <label for="state">State</label>
                <input type="text" name="state" id="state" class="form-control" required>
            </div>

            <div class="form-group col-md-2 mt-3">
                <label for="zip">Zip</label>
                <input type="number" name="zip" id="zip" onkeypress="isInputNumber(event)" maxlength="6" class="form-control" required>
            </div>
        </div>
        <!-- email mobile Date -->
        <div class="row">
            <div class="form-group col-md-4 mt-3">
                <label for="email">Email</label>
                <input type="email" name="email"  id="email" class="form-control" required>
            </div>

            <div class="form-group col-md-4 mt-3">
                <label for="mobile">Mobile</label>
                <input type="number" name="mobile" id="mobile"  maxlength="10" class="form-control" required>
            </div>

            <div class="form-group col-md-2 mt-3">
                <label for="date">Date</label>
                <input type="date" name="date" id="date" class="form-control" required>
            </div>
        </div>

        <!-- buttons -->
        <button type="submit" class="btn btn-danger mt-3" name="submit">Submit</button>
        <button type="reset" class="btn btn-primary mt-3">Reset</button>
    </form> 
    
</div>
<!-- start submite Request start -->

<!-- Script for mobile and zip -->
<script>
    function isInputNumber(evt){
        var ch = String.formCharCode(evt.which);
        if(!(/[0-9]/.test(ch))){
            evt.preventDefault();
        }
    }
</script>




<?php
 include('includes/footer.php');
?>