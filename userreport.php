<?php

include 'lib/header.php';

?>

<table class="table table-bordered table-hover table-dark theme">
  <thead>
    <tr>
      <th scope="col">User ID</th>
      <th scope="col">Full Name</th>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Address</th>
      <th scope="col">Post Code</th>
      <th scope="col">Faverate Name</th>
      <th scope="col">Dath Of Birth</th>
      <th scope="col">Age</th>
      <th scope="col">Gander</th>
      <th scope="col">User Type</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <?php
$con = mysqli_connect("localhost","root","","event_management");
$query = "SELECT * FROM user";
$result = mysqli_query($con,$query);
$uid = 0;
while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
	$id = $row['id'];
	$fname = $row['fullName'];
	$uname = $row['userName'];
	$dob = $row['email'];
	$usertype = $row['password'];
	$pnumber = $row['pAddress'];
	$email = $row['pCode'];
	$pass = $row['Fnamber'];
	$uphoto = $row['dateBirth'];
	$ucity = $row['age'];
	$ustate = $row['gender'];
	$ucountry = $row['userType'];

	echo "<tr>";
	echo "<td>";
	echo $row['id'];
	$id = $row['id'];
	echo "</td>";
	echo "<td>";
	echo $row['fullName'];
	echo "</td>";
	echo "<td>";
	echo $row['userName'];
	echo "</td>";
	echo "<td>";
	echo $row['email'];
	echo "</td>";
	echo "<td>";
	echo $row['password'];
	echo "</td>";
	echo "<td>";
	echo $row['pAddress'];
	echo "</td>";
	echo "<td>";
	echo $row['pCode'];
	echo "</td>";
	echo "<td>";
	echo $row['Fnamber'];
	echo "</td>";
	echo "<td>";
	echo $row['dateBirth'];
	echo "</td>";
	echo "<td>";
	echo $row['age'];
	echo "</td>";
	echo "<td>";
	echo $row['gender'];
	echo "</td>";
	echo "<td>";
	echo $row['userType'];
	echo "</td>";
	?>
	 </td>
	 <td><a class="theme" href = 'deleteuser.php?id=<?php echo $row['id']; ?>'>Delete</a></td>
	 </tr>
	<?php } ?> 
 </table>
<?php 

$_SESSION['id'] = $id;

?>


