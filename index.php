<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Services</title>

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fontawsome css -->
    <link rel="stylesheet" href="css/fontawsome.min.css">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <!-- Custom css -->
    <link rel="stylesheet" href="css/custom.css">

</head>
<body>
    
    <!-- Navination start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> Eco-Electron </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"            data-bs-target="#navbarSupportedContent"aria-controls="navbarSupportedContent" aria-expanded="false"           aria-label="Togglenavigation">
            <span class="navbar-toggler-icon"></span>
            </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                    <li class="nav-item"></li><a class="nav-link" href="#">About us</a></li>
                    <li class="nav-item"></li><a class="nav-link" href="#register">Registration</a></li>
                    <li class="nav-item"></li><a class="nav-link" href="Requester/Login.php">Login</a></li>
                    <li class="nav-item"></li><a class="nav-link" href="#">Contact us</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
          </div>
        </div>
    </nav> 
    <!-- Navigation end -->

    <!-- Header Jumbotron start -->
    <header class="jumbotron">
      <div class="header-info">
          <h1 class="text-danger">Welcome to AllServices.com</h1>
          <hr>
          <p class="text-dark">We to here to help you with all type electronic machine services and New part.</p>
          <a href="Requester/Login.php" class="btn btn-primary">Login</a>
          <a href="#register" class="btn btn-success">Sign Up</a>
      </div>
    </header>
    <!-- Header Jumbotron end -->

    <!-- Introduction of Eco-Electron start -->
    <div class="container">
        <div class="jumbotron">
            <h3 class="text-center">Eco-Electron </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, iure aliquam. Molestiae reiciendis quam possimus cum totam nemo, alias, quasi eum optio est quo ullam similique delectus eligendi inventore vero id facere accusamus a officia reprehenderit facilis iure? Nihil, ullam non natus qui, porro, at alias totam consectetur deleniti sed quae. Exercitationem a nobis mollitia ut, natus consequuntur cum ea recusandae nemo perferendis eum nihil eveniet magni nisi similique officiis suscipit quasi, quod aspernatur et blanditiis. Expedita sit iste non, eius, pariatur reprehenderit, natus odit velit vitae ipsum exercitationem at aut vel ex. Consequuntur facilis sit, eius vitae vero odit.</p>
        </div>
    </div>
    <!-- Introduction of Eco-Electron end -->

    <!-- Our Services start -->
    <div class="container text-center border-bottom">
        <h2>Our Services</h2>
        <div class="row mt-4">
            <div class="col-sm-4 md-4">
                <a href="#"><i class="fas fa-tv fa-8x mb-2"></i></a>
                <h4>Electronic Appliance</h4>
            </div>
            <div class="col-sm-4 md-4">
                <a href="#"><i class="fas fa-sliders-h fa-8x mb-2 text-danger"></i></a>
                <h4>Preventive Maintenances</h4>
            </div>
            <div class="col-sm-4 md-4">
                <a href="#"><i class="fas fa-cogs fa-8x mb-2 text-info"></i></a>
                <h4>Fault Repaire</h4>
            </div>
        </div>

    </div>
    <!-- Our Services ends -->

    <!-- Registration Start -->
     <?php include('UserRegistration.php'); ?>
    <!-- Registration end -->

    <!-- Happy customer start -->
     <div class="jumbotron bg-danger">
        <div class="container p-2">
            <h2 class="text-center text-white">Happy Customer</h2>
            <div class="row m-4">

                <div class="col-md-6 col-lg-3">
                   <div class="card shadow-lg mb-2">
                       <div class="card-body text-center">
                           <img src="images/people1.jpg" class="img-fluid" style="border-radius: 100px; width: 200px; height: 300px;" alt="people1">
                           <h4 class="card-title">Rayan philip</h4>
                           <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, magnam!</p>
                       </div>
                   </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="images/people2.jpg" class="img-fluid" style="border-radius: 100px; width: 200px; height: 300px;" alt="people1">
                            <h4 class="card-title">Justin philip</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, magnam!</p>
                        </div>
                    </div>
                 </div>

                 <div class="col-md-6 col-lg-3">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="images/people3.jpg" class="img-fluid" style="border-radius: 100px; width: 200px; height: 300px;" alt="people1">
                            <h4 class="card-title">Aaryan philip</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, magnam!</p>
                        </div>
                    </div>
                 </div>

                 <div class="col-md-6 col-lg-3">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="images/people4.jpg" class="img-fluid" style="border-radius: 100px; width: 200px; height: 300px;" alt="people1">
                            <h4 class="card-title">Rivya philip</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, magnam!</p>
                        </div>
                    </div>
                 </div>

            </div>
        </div>
     </div>
    <!-- Happy customer end -->

    <!-- Contact us Start -->
     <?php  include('ContactForm.php');?>
    <!-- Contact us end -->

    <!-- Footer start -->
     <footer class="container-fluid bg-dark text-white mt-5">
        <div class="container">
            <div class="row py-3">

                <div class="col-md-6 ">
                    <span class="pr-2">Follow us:</span>
                    <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f" cla></i></a>
                    <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
                    <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
                    <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
                </div>

                <div class="col-md-6 text-right">
                    <small>Designed by Manish &copy; 2021</small>
                    <small class="ml-2"><a href="#">Admin Login</a></small>
                </div>
            </div>
        </div>
     </footer>
    <!-- Footer ends -->

    <!-- Javascript files -->
    <script src="js/Jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/fontawsome.min.js"></script>
</body>
</html>