
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    
<?php
include 'header.php';
?>
<form method="post">

<div class="form-group">
<input type="text" placeholder="Firstname*" name="firstname" class="border p-3 w-100 my-2"><br>
</div>

<input type="text" placeholder="Lastname*" name="lastname"class="border p-3 w-100 my-2"><br>

<input type="text" placeholder="Username*" name="uname" class="border p-3 w-100 my-2"><br>

<input type="email" placeholder="Email*" name="email"class="border p-3 w-100 my-2"><br>    
<button type="submit" name="btn" class="d-block py-3 px-4 bg-primary text-white border-0 rounded font-weight-bold">Create</button>
</form>






<?php 
$conn = mysqli_connect("localhost","root","","register") or die("Connection Lost"); 
if(isset($_POST['btn'])){
$id = $_GET["id"];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$uname = $_POST['uname'];
$email = $_POST['email'];

$query = mysqli_query($conn,"UPDATE reg SET Id='$id', fname='$firstname', lname='$lastname', username='$uname', Email='$email' WHERE Id='$id'");


header('Location:userprofile.php');


}

?>
    </body>
</html>