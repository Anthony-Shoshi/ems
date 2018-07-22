<?php
//session_start();
$con = mysqli_connect("localhost","root","","event_management");
if (isset($_GET['thid'])){
  $thid = $_GET['thid']; 
}
//$thid = $_SESSION['id'];
$query = "DELETE FROM addtheme WHERE id = '$thid'";
$result = mysqli_query($con,$query);
if ($result=!false) {
  header("location:themereport.php");

}
?>