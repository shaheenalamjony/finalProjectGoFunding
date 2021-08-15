<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- font awesome CSS-->
    <link rel="stylesheet" href="css/all.min.css">
    
    <!-- Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet"> 

    <!-- Custom CSS-->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="custom.css">

    <title>GoFunding</title>
</head>


<body data-spy="scroll" data-target="#navbarSupportedContent">

    <!-- Start Navigation -->
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">GoFundme</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#discover">Discover</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#service">Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#sign">Sign up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="userRegistration.php">Registration</a>
              </li>
              
            </ul>
            
              <button class="btn btn-success text-dark"  type="submit"><a href="user/userlogin.php">Login</a></button>
             
          </div>
        </div>
      </nav>
      <div class= "mid">
        <video autoplay muted loop>
          <source class="embed-responsive" style="background-color:yellow" src="" type="video/mp4">
        </video>
        <div class = "hero text-center">
          <h1 class ="text-danger display=4 font-weight-bold">Virtual Banking Made Easy </h1>
          <p class="text-danger mx-auto">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione veritatis deserunt commodi<br>
        ipsum dolor sit amet consectetur, adipisicing elit</p>
          <a class= "text-danger" href =  "#">Get Started</a>
        </div>
        </div>
        


  </header>
  <section id="about" class="about  py-5">
    <div class="row align-items-center container my-5 mx-auto">
      <div class="text col-lg-6 col-md-6 col-md-12 w-50 pt-5 pb-5">
        <h6>Premium Bank</h6>
        <h2>Unlimited Transiction with zero fees</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione veritatis deserunt commodi</p>
        <a href="#">Learn more</a>
      </div>
      <div class="img col-lg-6 col-md-6 col-md-12 w-50  pt-5 pb-5">
      <img class="img-fluid" src="images/1.svg">
    </div>
  </div>
   </section>
   <section id="discover" class="discover  py-5">
    <div class="row align-items-center container my-5 mx-auto">
      <div class="img col-lg-6 col-md-6 col-md-12 w-50  pt-5 pb-5">
        <img class="img-fluid" src="images/2.png">
      </div>
      <div class="text col-lg-6 col-md-6 col-md-12 w-50 pt-5 pb-5">
        <h6>Unlimited Access</h6>
        <h2>Login to your account at any time</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione veritatis deserunt commodi</p>
        <a href="#">Learn more</a>
      </div>
      </div>
   </section>


   <section id="service" class="Service  py-5">
     <div class="col mx-auto align-items-center my-5">

     
     <div class="heading text-center pt-5">
       <h2 class="font-weight-bold pb-5 text-light">Our Service</h2>
     </div>
    <div class="row mx-auto justify-content-center align-items-center text-center container">
      <div class="one col-lg-3 col-md-3 col-12 w-25 m-2">
       <img class="img-fluid w-75" src="images/1.svg"> 
       <h5 class="font-weight-bold pt-4"> Reduce Expenses</h5>
       <p> This our Description section </p>
      </div>

      <div class="one col-lg-3 col-md-3 col-12 w-25 m-2">
        <img class="img-fluid w-75" src="images/1.svg"> 
        <h5 class="font-weight-bold pt-4"> Virtual Office</h5>
        <p> This our Description section </p>
       </div>

       <div class="one col-lg-3 col-md-3 col-12 w-25 m-2">
        <img class="img-fluid w-75" src="images/1.svg"> 
        <h5 class="font-weight-bold pt-4"> Premium Benifities</h5>
        <p> This our Description section </p>
       </div>
      
      
      </div>
    </div>
   </section>

   <section id="sign" class="sign  py-5">
    <div class="row align-items-center container my-5 mx-auto">
      <div class="text col-lg-6 col-md-6 col-md-12 w-50 pt-5 pb-5">
        <h6>Premium Bank</h6>
        <h2>Creating an account is extremely easy</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione veritatis deserunt commodi</p>
        <a href="#">Learn more</a>
      </div>
      <div class="img col-lg-6 col-md-6 col-md-12 w-50  pt-5 pb-5">
      <img class="img-fluid" src="images/4.png">
    </div>
  </div>
   </section>
     
   <!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4 text-light">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-8 mx-auto">

        <!-- Content -->
       
          <?php
          //include 'UserRegistration.php';
          ?>
          <!-- end contact  -->

      </div>
      <!-- Grid column -->

     
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <hr>

  <!-- Call to action -->
  <ul class="list-unstyled list-inline text-center py-2">
    <li class="list-inline-item">
      <h5 class="mb-1">Register for free</h5>
    </li>
    <li class="list-inline-item">
      <a href="#!" class="btn btn-danger btn-rounded">Sign up!</a>
    </li>
  </ul>
  <!-- Call to action -->

  <hr>

  <!-- Social buttons -->
  <ul class="list-unstyled list-inline text-center">
    <li class="list-inline-item">
      <a class="btn-floating btn-fb mx-1">
        <i class="fab fa-facebook-f"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-tw mx-1">
        <i class="fab fa-twitter"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-gplus mx-1">
        <i class="fab fa-google-plus-g"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-li mx-1">
        <i class="fab fa-linkedin-in"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-dribbble mx-1">
        <i class="fab fa-dribbble"> </i>
      </a>
    </li>
  </ul>
  <!-- Social buttons -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
    <small class="ml-2 bg-light"><a href="#">Admin Login</a></small>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->






   
    <!-- End Navigation -->

    <!-- javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
</body>
</html>