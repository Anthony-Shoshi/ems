<?php
//session_start();
$con = mysqli_connect("localhost","root","","event_management");
if (isset($_GET['transid'])){
  $transid = $_GET['transid']; 
}
//$thid = $_SESSION['id'];
$query = "DELETE FROM transport WHERE transid = '$transid'";
$result = mysqli_query($con,$query);
if ($result=!false) {
  header("location:transreport.php");

}
?>