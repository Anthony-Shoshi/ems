<?php

include 'lib/header.php';

?>


<?php
//$email = $_SESSION['email'];
$id = $_SESSION['id'];

$con = mysqli_connect("localhost","root","","event_management");
$query = "SELECT * FROM user WHERE id = '$id'"; //email = '$email'
$result = mysqli_query($con,$query);

if ($result) {
  while ($row=mysqli_fetch_array($result)) {
    
?>
<div class="profile">
<table class="table table-dark">
  <thead>
    <tr>
      <th class="ptext" scope="col" colspan="2">Profile</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Full Name</td>
      <td><?php echo $row['fullName']; ?></td>
    </tr>
    <tr>
      <td>User Name</td>
      <td><?php echo $row['userName']; ?></td>
    </tr>
    <tr>
      <td>Email Address</td>
      <td><?php echo $row['email']; ?></td>
    </tr>
    <tr>
      <td>Post Code</td>
      <td><?php echo $row['pCode']; ?></td>
    </tr>
    <tr>
      <td>Faverate Name</td>
      <td><?php echo $row['Fnamber']; ?></td>
    </tr>
    <tr>
      <td>Date of Birth</td>
      <td><?php echo $row['dateBirth']; ?></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><?php echo $row['gender']; ?></td>
    </tr>
  </tbody>
</table>
</div>
<div class="btnupdate">
 <a class="btn btn-success" href="editprofile.php?id=<?php echo $row['id'] ?>">Update Info</a>
</div>
<?php }} ?>
<?php

include 'lib/footer.php';

?>
