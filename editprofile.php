<?php

include 'lib/header.php';

$con = mysqli_connect("localhost","root","","event_management");

?>


<?php 

  if (isset($_GET["id"]) AND $_GET["id"] !=NULL) {
    $id=$_GET["id"];
  }else{
    echo "<script>window.location='profile.php'</script>";
  }

 ?>

<?php 
if ($_SERVER["REQUEST_METHOD"]=="POST") {
$fullName = $_POST['fullName'];
$userName = $_POST['userName'];
$email = $_POST['email'];
$pCode = $_POST['pCode']; 
$Fnamber = $_POST['Fnamber'];
$dateBirth = $_POST['dateBirth'];
$gender = $_POST['gender'];




  $query = "UPDATE user SET fullName = '$fullName', userName = '$userName', email = '$email', pCode = '$pCode', Fnamber = '$Fnamber', dateBirth = '$dateBirth', gender = '$gender' WHERE id = '$id' ";
  $result = mysqli_query($con,$query);
  if ($result!=false) {
    header("location:profile.php");
  }
}






 ?>


<div class="edituser">
<div class="panel panel-default">
  <div class="panel-header">
     <center><h2>Edit Profile</h2></center>
  </div>
   <div class="panel-body">
   <div style="max-width:600px; margin:0 auto">
    <?php 
    $query = "SELECT * FROM user where id ='$id'";
    $result = mysqli_query($con,$query);

      if ($result) {
        while ($value=mysqli_fetch_array($result)) {
 ?>
  <form action="" method="post" enctype="multipart/data-form">
 
  <div class="form-group">
    <label for="fname">First Name</label>
    <input type="text" class="form-control" id="fname" name="fullName" placeholder="Enter Full Name" required="" value="<?php echo $value['fullName']?>">
  </div>
  <div class="form-group">
    <label for="lname">Last Name</label>
    <input type="text" class="form-control" id="lname" name="userName" placeholder="Enter User Name" required="" value="<?php echo $value['userName']?>">
  </div>
  <div class="form-group">
    <label for="uname">User Name</label>
    <input type="email" class="form-control" id="uname"  name="email" placeholder="Enter email Name" required="" value="<?php echo $value['email']?>">
  </div>
  <div class="form-group">
    <label for="dob">Date of Birth</label>
    <input type="text" class="form-control" id="dob" name="pCode" placeholder="Enter Post Code" required="" value="<?php echo $value['pCode']?>">
  </div>
  <div class="form-group">
    <label for="pnumber">Phone Number</label>
    <input type="text" class="form-control" id="pnumber" name="Fnamber" placeholder="Enter Faverate name" required="" value="<?php echo $value['Fnamber']?>">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="date" class="form-control" id="email" name="dateBirth" placeholder="Enter Date of birth" required="" value="<?php echo $value['dateBirth']?>">
  </div>
   <div class="form-group">
    <label for="ucity">City</label>
    <input type="text" class="form-control" id="ucity" name="gender" placeholder="Enter your gendar" required="" value="<?php echo $value['gender']?>">
  </div>
  <button type="submit" class="btn btn-success" name="update">Update</button>
  <div class="back"><button type="submit" class="btn btn-primary" name="back">Back</button></div>
</form>
<?php }} ?>
</div>
</div>
</div>
</div>
</body>
</html>

<?php 



?>

<?php

include 'lib/footer.php';

?>