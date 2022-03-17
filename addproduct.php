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
 

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body class="body-wrapper">

<?php  include 'header.php'; ?>

<section class="login py-5 border-top-1">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-8 align-item-center">
            <div class="border border">
            <h3 class="bg-gray p-4">Add Product</h3>
            <form action="addproduct.php" method="POST" enctype="multipart/form-data">

             <fieldset class="p-4">
            <input type="text" placeholder="Product Name" name="pname" class="border p-3 w-100 my-2" required>
            <div class="border p-3 w-100 my-2" >
	               <i class="fa fa-user text-center px-3"></i>
	               <input type="file" name="pimage" class="form-control-file mt-2 pt-1" id="input-file" required>
	                </div>
              <input type="number" placeholder="Bid Price" name="pprice" class="border p-3 w-100 my-2" required>
<textarea  name="description" id="" cols="41" rows="6" name="description" required></textarea>
              
           
    <?php
include 'connection.php';
if(isset($_POST['btn'])){
    $pname = $_POST['pname'];
    
    $pprice = $_POST['pprice'];
    $description = $_POST['description'];
    $pimage = $_FILES['pimage']['name'];
    $tmpimage = $_FILES['pimage']['tmp_name'];
    $upid=rand(10000, 99999);
    $pass =password_hash($pass,PASSWORD_BCRYPT);
    
    if(move_uploaded_file($tmpimage,"productimage/".$pimage)){

      $query =mysqli_query($conn,"INSERT into product_detail values('','$upid','$pname','$pimage','RS: $pprice','$description') ");

    
      if($query){
        echo "<script>alert('Product has been successfully added');window.location.href='Product.php'</script>";
      }
    
    else{
          echo "<script>alert('wrong')</script>"  ;
    }
}

}
  ?>
    <button type="submit" name="btn" class="d-block py-3 px-4 bg-primary text-white border-0 rounded font-weight-bold">Add Product</button>
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
  <?php  include 'footer.php'; ?>

</body>

</html>