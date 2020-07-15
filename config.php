
<?php
$con=mysqli_connect('localhost','root','','delight');
if ($con->connect_error) {
die("Database Connection failed: " . $con->connect_error);
}
?>