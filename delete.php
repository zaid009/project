<?PHP
$con = mysqli_connect("localhost","root","","crud") or die("Connection Lost"); 
$id = $_GET["id"];
$query =mysqli_query($con,"DELETE from c where Id='$id'");

header('location: read.php');
?>