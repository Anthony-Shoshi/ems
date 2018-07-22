<?php

include 'lib/header.php';

?>

<table class="table table-bordered table-hover table-dark theme">
  <thead>
    <tr>
      <th scope="col">Transport ID</th>
      <th scope="col">Transport Name</th>
      <th scope="col">Transport Description</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <?php
$con = mysqli_connect("localhost","root","","event_management");
$query = "SELECT * FROM transport";
$result = mysqli_query($con,$query);
$transid = 0;
while ($row = mysqli_fetch_array($result)) {
	echo "<tr>";
	echo "<td>";
	echo $row['transid'];
	$thid = $row['transid'];
	echo "</td>";
	echo "<td>";
	echo $row['transname'];
	echo "</td>";
	echo "<td>";
	echo $row['transdes'];
	?>
	 </td>
	 <td><a class="theme" href = 'edittrans.php?transid=<?php echo $row['transid']; ?>'>Edit</a></td>
	 <td><a class="theme" href = 'deletetrans.php?transid=<?php echo $row['transid']; ?>'>Delete</a></td>
	 </tr>
	<?php } ?> 
 </table>
<?php 

$_SESSION['transid'] = $transid;

?>

