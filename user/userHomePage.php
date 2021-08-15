<?php
session_start();
if($_SESSION['is_login']){
    $email = $_SESSION['email'];
}else{
  header("location:userLogin.php");
}
?>




<!DOCTYPE html>
<html>
    <head>
<title>crowdfund</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel= "stylesheet" type="text/css" href="../css/homepage.css">
</head>
<body data-spy="scroll" data-target="#navbarSupportedContent">
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
                <a class="nav-link" href="#discover">Fundraise for</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#service">Service</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link" href="#howitworks">How it works</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../donate.php">Donate Now</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../viewer/donarList.php">Donar List</a>
              </li>
              <li class="nav-item bg-danger">
                <a class="nav-link" href="profileUpdate.php">Profile</a>
              </li>
              
            </ul>
            <button  class="btn btn-success text-dark mx-3" type="submit" ><?php echo $email; ?></button> 

            <button  class="btn btn-success text-dark" type="submit" ><a href="../logout.php"> Logout </a></button> 
            
              
             
          </div>
        </div>
      </nav>
      <div class= "mid">
        <video  muted loop>
          <source class="embed-responsive" src="../images/1.mp4" type="video/mp4">
        </video>
        <div class = "hero text-center">
          <h1 class ="text-light display=4 font-weight-bold">Charity fundraising made easy</h1>
          <p class="text-light mx-auto">Fundraising for the people and causes you care about</p>
          <a class= "text-dark" href =  "#">Donate Monthly</a>
        </div>
        </div>
        


  </header>
  <section id="about" class="about  py-5">
    <div class="row align-items-center container my-5 mx-auto">
      <div class="text col-lg-6 col-md-6 col-md-12 w-50 pt-5 pb-5">
        <h6>GoFundme</h6>
        <h5>We Help Different organization Get Crowdfunded</h5>
        <p>

         The name of our crowdfunding website is gofundme.We raise fund for different non government organization.Our team takes a very hands-on approach to help organizations understand the fundraising process and launch their funding campaigns.
          
        
          </p>
        <a href="#">Learn more</a>
      </div>
      <div class="img col-lg-6 col-md-6 col-md-12 w-50  pt-5 pb-5">
      <img class="img-fluid" src="../images/s.jpg">
    </div>
  </div>
   </section>
   <section id="discover" class="discover  py-5">
    <div class="row align-items-center container my-5 mx-auto">
      <div class="img col-lg-6 col-md-6 col-md-12 w-50  pt-5 pb-5">
        <img class="img-fluid" src="../images/2.png">
      </div>
      <div class="text col-lg-6 col-md-6 col-md-12 w-50 pt-5 pb-5">
        <h3>Raise Money</h3>
        <h2>Get help for fundraising with Gofundme</h2>
        <p> Our organization raise fund for medical,memorial,education,emergency,non-profit and financial emergency.Our team members in charity and social fundraising are standing by to help, whether you have questions about setting up your campaign, running a report, or just need someone to bounce fundraising ideas.Our purpose for helping those kind of people and organization.</p>
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
       <img class="img-fluid w-75" src="../images/d.jpg"> 
       <h5 class="font-weight-bold pt-4"> Collect Fund</h5>
       <p> By this website one can donate money and fundraising for different organization and people </p>
      </div>

      <div class="one col-lg-3 col-md-3 col-12 w-25 m-2">
        <img class="img-fluid w-75" src="../images/a.jpg"> 
        <h5 class="font-weight-bold pt-4"> Simple setup</h5>
        <p> Configure everything from simple donation pages to complex fundraising programs in just a few minutes </p>
       </div>

       <div class="one col-lg-3 col-md-3 col-12 w-25 m-2">
        <img class="img-fluid w-75" src="../images/a1.jpg"> 
        <h5 class="font-weight-bold pt-4"> Expert advice</h5>
        <p>Our Charity Services team is standing to share tips and best practices to help maximize your fundraising efforts</p>
       </div>
      
      
      </div>
    </div>
   </section>

   
   <section id="howitworks" class="howitworks  py-5">
    <div class="row align-items-center container my--5 mx-auto">
      
      <div class="img col-lg-3 col-md-3 col-md-6 w-50  pt-3 pb-3">
        
        </div>
      <div class="text col-lg-12 col-md-12 col-md-12 w-50 pt-5 pb-5">
        <h3>What is Crowdfunding?</h3>
        
        <p>In its simplest form, Crowdfunding is a practice of giving monetary funds to overcome specific social, cultural, or economic hurdles individuals face in their daily lives.</p><br>
        <h3>So how does Crowdfunding work On this site</h3>
        <p>Let us assume an individual, unfortunately, meets with an accident on the road. His medical expenses and hospital bills start piling up. Now he needs 5 Lakh to pay his expensive medical bills. Fortunately, his best friend signed up in this site crowdfunding platform, completed the process of submitting valid documents needed for verification. In a few minutes, he created a crowdfunding campaign to raise funds for his friends medical expenses. Now, this campaign can be shared with all his near and dear ones through WhatsApp, Instagrm, Twitter, Facebook and E-mail. In a matter of few minutes, funds start coming in to support the financial needs of the injured friend.  </p>
        <h3>Step by step procedure</h3>
        <img class="img-fluid" src="../images/5.png"><br>
        <p>1.Create your account by Registration and do Login </p> <br>
        <img class="img-fluid" src="../images/6.png">
        <p>2.It will take only 2 minutes. Just tell us a few details about you and the ones you are raising funds for.</p>
        <img class="img-fluid" src="../images/7.png">
        <p>3.After confirmation,share your fundraiser online</p>
        <img class="img-fluid" src="../images/8.png">
        <p>4.Receive donations from around the world</p>
        <img class="img-fluid" src="../images/9.png">
        <p>4.The funds raised can be withdrawn without any hassle directly to your bank account.</p>
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
      <div class="col-md-4 mx-auto">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Footer Content</h5>
        <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
          consectetur
          adipisicing elit.</p>

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
  <div class="footer-copyright text-center py-3">© 2021 Copyright:@Group-4
  </div>


  <!-- Copyright -->

</footer>
<!-- Footer -->








    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    

</body>
</html>