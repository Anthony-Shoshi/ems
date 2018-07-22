<?php

include 'lib/header.php';

?>

<?php
if (isset($_GET['uid'])) {
  $uid = $_GET['uid'];

}
$con = mysqli_connect("localhost","root","","event_management");
$query = "SELECT * FROM user WHERE uid = $uid";
$result = mysqli_query($con,$query);

$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

$uid = $row['uid'];
$fname = $row['fname'];
$lname = $row['lname'];
$uname = $row['uname'];
$dob = $row['dob'];
$pnumber = $row['pnumber'];
$email = $row['email'];
$uphoto = $row['uphoto'];
$ucity = $row['ucity'];
$ustate = $row['ustate'];
$ucountry = $row['ucountry'];

?>

<div class="edituser">
<div class="panel panel-default">
  <div class="panel-header">
     <center><h2>Edit User</h2></center>
  </div>
   <div class="panel-body">
   <div style="max-width:600px; margin:0 auto">
  <form action="" method="post" enctype="multipart/data-form">
  <div class="form-group">
    <label for="fname">First Name</label>
    <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter First Name" required="" value="<?php echo "$fname";?>">
  </div>
  <div class="form-group">
    <label for="lname">Last Name</label>
    <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name" required="" value="<?php echo "$lname";?>">
  </div>
  <div class="form-group">
    <label for="uname">User Name</label>
    <input type="text" class="form-control" id="uname"  name="uname" placeholder="Enter User Name" required="" value="<?php echo "$uname";?>">
  </div>
  <div class="form-group">
    <label for="dob">Date of Birth</label>
    <input type="date" class="form-control" id="dob" name="dob" placeholder="Enter Date of Birth" required="" value="<?php echo "$dob";?>">
  </div>
  <div class="form-group">
    <label for="pnumber">Phone Number</label>
    <input type="text" class="form-control" id="pnumber" name="pnumber" placeholder="Enter Phone Number" required="" value="<?php echo "$pnumber";?>">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="" value="<?php echo "$email";?>">
  </div>
   <div class="form-group">
    <label for="uphoto">Photo</label>
    <input type="file" class="form-control" id="uphoto" name="uphoto" placeholder="Enter Phone Number" required="" value="<?php echo "$uphoto";?>">
  </div>
   <div class="form-group">
    <label for="ucity">City</label>
    <input type="text" class="form-control" id="ucity" name="ucity" placeholder="Enter Phone Number" required="" value="<?php echo "$ucity";?>">
  </div>
  <div class="form-group">
    <label for="ustate">State</label>
    <input type="text" class="form-control" id="ustate" name="ustate" placeholder="Enter Phone Number" required="" value="<?php echo "$ustate";?>">
  </div>
  <div class="form-group">
    <label for="ucountry">Country</label>
    <input type="text" class="form-control" id="ucountry" name="ucountry" placeholder="Enter Phone Number" required="" value="<?php echo "$ucountry";?>">
  </div>
  <button type="submit" class="btn btn-success" name="update">Update</button>
  <div class="back"><button type="submit" class="btn btn-primary" name="back">Back</button></div>
</form>
</div>
</div>
</div>
</div>
</body>
</html>

<?php 

if ($_POST) {
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$uname = $_POST['uname'];
$udob = $_POST['dob'];
$pnumber = $_POST['pnumber'];
$uemail = $_POST['email'];
$uphoto = $_POST['uphoto'];
$ucity = $_POST['ucity'];
$ustate = $_POST['ustate'];
$ucountry = $_POST['ucountry'];

if (isset($_POST['update'])) {

  $con = mysqli_connect("localhost","root","","event_management");
  $query = "UPDATE user SET fname = '$fname', lname = '$lname', uname = '$uname', dob = '$dob', pnumber = '$pnumber', email = '$email', uphoto = '$uphoto', ucity = '$ucity', ustate = '$ustate', ucountry = '$ucountry' WHERE uid = '$uid' ";
  $result = mysqli_query($con,$query);
}

}

?>

<?php

include 'lib/footer.php';

?>