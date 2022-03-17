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



  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body class="body-wrapper">

<?php
include 'header.php'
?>
<!--==================================
=            User Profile            =
===================================-->

<section class="user-profile section">
<div class="container">
<div class="row">
	<div class="col-md-10 offset-md-1 col-lg-3 offset-lg-0">
	<div class="sidebar">
					<!-- User Widget -->
	<div class="widget user">
						<!-- User Image -->

		<?php
include 'connection.php';
$Id=$_SESSION['id'];
$q = mysqli_query($conn,"SELECT * from reg where Id='$Id'");
$row = mysqli_fetch_array($q);

		?>
			<div class="image d-flex justify-content-center">
	<?php echo '<img src="images/'.$row['image'].'">'?>
		</div>
						<!-- User Name -->
		<h6 class="text-center" ><?php echo $row['fname'].' '.$row['lname']  ?></h5>
	<h6 class="text-center" ><?php echo $row['username'] ?></h5>
	<h6 class="text-center" ><?php echo $row['Email'] ?></h5>
		</div>
					<!-- Dashboard Links -->
					
		</div>
	</div>
	<div class="col-md-10 offset-md-1 col-lg-9 offset-lg-0">
				<!-- Edit Profile Welcome Text -->
	<div class="widget welcome-message">
		<h2>Edit profile</h2>
		
		</div>
				<!-- Edit Personal Info -->
		<div class="row">
			<div class="col-lg-6 col-md-6">
			<div class="widget personal-info">
		<h3 class="widget-header user">Edit Personal Information</h3>
							<!-- Submit button -->
<a href="edit-profile.php?id=<?php echo $row['Id']; ?>" class="btn btn-success" style="color: #fff;"type="submit">EDIT PROFILE</a>

						</div>
  </div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--============================
=            Footer            =
=============================-->

<?php

include 'footer.php';
?>
  <!-- To Top -->
  <div class="top-to">
    <a id="top" class="" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
</footer>

<!-- JAVASCRIPTS -->

</body>

</html>