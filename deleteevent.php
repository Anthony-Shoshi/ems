<?php 
//session_start();
if (isset($_GET['eid'])) {
	$eid = $_GET['eid'];
}
//$eid = $_SESSION['id'];
$con = mysqli_connect("localhost","root","","event_management");
$query = "DELETE FROM addevent WHERE id = '$eid'";
$result = mysqli_query($con,$query);
if ($result) {
	header("location:eventreport.php");
}

 ?>