<?php

include 'lib/header.php';

?>

<table class="table table-bordered table-hover table-dark theme">
  <thead>
    <tr>
      <th scope="col">Event ID</th>
      <th scope="col">Event Title</th>
      <th scope="col">Event Theme</th>
      <th scope="col">Event Guest Number</th>
      <th scope="col">Event Date</th>
      <th scope="col">Event Start Time</th>
      <th scope="col">Event End Time</th>
      <th scope="col">Event Description</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <?php

$con = mysqli_connect("localhost","root","","event_management");
$query = "SELECT * FROM addevent";
$result = mysqli_query($con,$query);
$eid = 0;
while ($row = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>";
		echo $row['id'];
		$eid = $row['id'];
		echo "</td>";
		echo "<td>";
		echo $row['etitle'];
		echo "</td>";
		echo "<td>";
		echo $row['etheme'];
		echo "</td>";
		echo "<td>";
		echo $row['guestnum'];
		echo "</td>";
		echo "<td>";
		echo $row['edate'];
		echo "</td>";
		echo "<td>";
		echo $row['stime'];
		echo "</td>";
		echo "<td>";
		echo $row['etime'];
		echo "</td>";
		echo "<td>";
		echo $row['edes'];
		echo "</td>";
		?>
	 
		<td><a href="editevent.php?eid=<?php echo $row['id']; ?>">Edit</a></td>
		<td><a href="deleteevent.php?eid=<?php echo $row['id']; ?>">Cancle Event</a></td>

	</tr>

<?php } ?>

 <?php 

$_SESSION['id'] = $eid;

 ?>

</table>

