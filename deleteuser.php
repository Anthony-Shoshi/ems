<?php
//session_start();
if (isset($_GET['uid'])){
  $uid = $_GET['uid']; 
}
//$uid = $_SESSION['uid'];
$con = mysqli_connect("localhost","root","","event_management");
$query = "DELETE FROM user WHERE uid = '$uid'";
$result = mysqli_query($con,$query);
if ($result=!false) {
  header("location:userreport.php");
}
?>