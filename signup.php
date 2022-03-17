<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Classimax</title>
  
  <!-- FAVICON -->
  <link href="img/favicon.png" rel="shortcut icon">
  <!-- PLUGINS CSS STYLE -->
  <!-- <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap-slider.css">
  <!-- Font Awesome -->
  <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Owl Carousel -->
  <link href="plugins/slick-carousel/slick/slick.css" rel="stylesheet">
  <link href="plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
  <!-- Fancy Box -->
  <link href="plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
  <link href="plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="css/style.css" rel="stylesheet">


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body class="body-wrapper">



<section class="login py-5 border-top-1">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-8 align-item-center">
            <div class="border border">
            <h3 class="bg-gray p-4">Register Now</h3>
            <form action="signup.php" method="POST" enctype="multipart/form-data">

             <fieldset class="p-4">
            <input type="text" placeholder="First Name*" name="fname" class="border p-3 w-100 my-2" required>
              <input type="text" placeholder="Last Name*" name="lname" class="border p-3 w-100 my-2" required>
              <input type="text" placeholder="Username*" name="user"  class="border p-3 w-100 my-2" required>
              <input type="email" placeholder="Email*" name="email" class="border p-3 w-100 my-2" required>
              <input type="password" placeholder="Password*" name="pass" class="border p-3 w-100 my-2" required>
              <div class="border p-3 w-100 my-2" >
	               <i class="fa fa-user text-center px-3"></i>
	               <input type="file" name="image" class="form-control-file mt-2 pt-1" id="input-file" required>
	                </div>
           
    <?php
include 'connection.php';
if(isset($_POST['btn'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $user = $_POST['user'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $image = $_FILES['image']['name'];
    $tmpimage = $_FILES['image']['tmp_name'];

    $pass =password_hash($pass,PASSWORD_BCRYPT);
    
    if(move_uploaded_file($tmpimage,"images/".$image)){

      $query =mysqli_query($conn,"INSERT into reg values('','$fname','$lname','$user','$email','$pass','$image','Not verified') ");

    
      if($query){
        echo "<script>alert('chalye mohtaram/mohtarma login karye');window.location.href='login.php'</script>";
      }
    }
    else{
          echo "<script>alert('wrong')</script>"  ;
    }
  mail($email,'PHP MAIL','localhost/project\verify.php','From:zaid25009@gmail.com') ;   
}
  ?>
    <button type="submit" name="btn" class="d-block py-3 px-4 bg-primary text-white border-0 rounded font-weight-bold">Register Now</button>
             </fieldset>
                </form>
                </div>
                </div>
            </div>
        </div>
    </section>
<!--============================
=            Footer            =
=============================-->


  <!-- To Top -->
  <div class="top-to">
    <a id="top" class="" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
</footer>

<!-- JAVASCRIPTS -->
<script src="plugins/jQuery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/popper.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap-slider.js"></script>
  <!-- tether js -->
<script src="plugins/tether/js/tether.min.js"></script>
<script src="plugins/raty/jquery.raty-fa.js"></script>
<script src="plugins/slick-carousel/slick/slick.min.js"></script>
<script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<script src="plugins/fancybox/jquery.fancybox.pack.js"></script>
<script src="plugins/smoothscroll/SmoothScroll.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>
<script src="js/script.js"></script>

</body>

</html>