<?php

include 'lib/header.php';

?>

<?php
if ($_POST) {
$con = mysqli_connect("localhost","root","","event_management");
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$uname = $_POST['uname'];
$dob = $_POST['dob'];
$pnumber = $_POST['pnumber'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
$uphoto = basename($_FILES['uphoto']['name']);
$target_file = "img/user_image/$uphoto";
move_uploaded_file($_FILES['uphoto']['tmp_name'], $target_file);
$ucity = $_POST['ucity'];
$ustate = $_POST['ustate'];
$ucountry = $_POST['ucountry'];

$con = mysqli_connect("localhost","root","","event_management");
$query = "SELECT * FROM user WHERE email = '$email'";
$result = mysqli_query($con,$query);

$num = mysqli_num_rows($result);
if ($num > 0) {
  echo "<p><center><b>This user already exist.</b></center></p>";
}

else {
if ($pass == $cpass){
  $con = mysqli_connect("localhost","root","","event_management");
  $query = "INSERT INTO user VALUES ('','$fname','$lname','$uname','$dob','$pnumber','$email','$pass','$uphoto','$ucity','$ustate','$ucountry','user')";
  $result = mysqli_query($con,$query);
  if ($result) {
    echo "<p><center><b>User successfully added.</b></center><p>";
  }
}
else {
    echo "<center><b>Password mismatch.Please <a href='adduser.php'>Try</a> again.</b></center>";
  }

}

}


?>

<div class="adduser">
<div class="panel panel-default">
  <div class="panel-header">
     <center><h2>Add User</h2></center>
  </div>
   <div class="panel-body">
   <div style="max-width:600px; margin:0 auto">
  <form action="adduser.php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="fname">First Name</label>
    <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter First Name" required="">
  </div>
  <div class="form-group">
    <label for="lname">Last Name</label>
    <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name" required="">
  </div>
  <div class="form-group">
    <label for="uname">User Name</label>
    <input type="text" class="form-control" id="uname"  name="uname" placeholder="Enter User Name" required="">
  </div>
  <div class="form-group">
    <label for="dob">Date of Birth</label>
    <input type="date" class="form-control" id="dob" name="dob" placeholder="Enter Date of Birth" required="">
  </div>
  <div class="form-group">
    <label for="pnumber">Phone Number</label>
    <input type="text" class="form-control" id="pnumber" name="pnumber" placeholder="Enter Phone Number" required="">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="">
  </div>
  <div class="form-group">
    <label for="pass">Password</label>
    <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" required="">
  </div>
  <div class="form-group">
    <label for="cpass">Confirm Password</label>
    <input type="password" class="form-control" id="cpass" name="cpass" placeholder="Confirm Password" required="">
  </div>
  <div class="form-group">
    <label for="uphoto">Photo</label>
    <input type="file" class="form-control" id="uphoto" name="uphoto" placeholder="Enter Phone Number">
  </div>
   <div class="form-group">
    <label for="ucity">City</label>
    <input type="text" class="form-control" id="ucity" name="ucity" placeholder="Enter Phone Number" required="">
  </div>
  <div class="form-group">
    <label for="ustate">State</label>
    <input type="text" class="form-control" id="ustate" name="ustate" placeholder="Enter Phone Number" required="">
  </div>
  <div class="form-group">
    <label for="ucountry">Country</label>
    <input type="text" class="form-control" id="ucountry" name="ucountry" placeholder="Enter Phone Number" required="">
  </div>
  <button type="submit" class="btn btn-success" name="submit">Submit</button>
  <div class="back"><button type="reset" class="btn btn-primary" name="back">Reset</button></div>
</form>
</div>
</div>
</div>
</div>
</body>
</html>


<?php

//$_SESSION['email'] = $email;
include 'lib/footer.php';

?>