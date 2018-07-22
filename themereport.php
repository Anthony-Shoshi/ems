<?php

include 'lib/header.php';

?>

<table class="table table-bordered table-hover table-dark theme">
  <thead>
    <tr>
      <th scope="col">Theme ID</th>
      <th scope="col">Theme Name</th>
      <th scope="col">Theme Description</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <?php
$con = mysqli_connect("localhost","root","","event_management");
$query = "SELECT * FROM addtheme";
$result = mysqli_query($con,$query);
$thid = 0;
while ($row = mysqli_fetch_array($result)) {
	echo "<tr>";
	echo "<td>";
	echo $row['id'];
	$thid = $row['id'];
	echo "</td>";
	echo "<td>";
	echo $row['ttitle'];
	echo "</td>";
	echo "<td>";
	echo $row['tdes'];
	?>
	 </td>
	 <td><a class="theme" href = 'edittheme.php?thid=<?php echo $row['id']; ?>'>Edit</a></td>
	 <td><a class="theme" href = 'deletetheme.php?thid=<?php echo $row['id']; ?>'>Delete</a></td>
	 </tr>
	<?php } ?> 
 </table>
<?php 

$_SESSION['id'] = $thid;

?>


