<?php 

require 'lib/header.php';

?>
<?php

	$con = mysqli_connect("localhost","root","","event_management");
	$query = "SELECT 
					etitle,
					etheme,
					edate,
					guestnum,
					dj,
					bar,
					transport,
					fquality,
					ftime,
					bitems,
					litems,
					ditems
				FROM 
					addevent, other, food, fooditem 
				WHERE 
					addevent.id = other.oid = food.fid = fooditem.fiid ";
	$result = mysqli_query($con,$query);

	while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {

	$etitle = $row['etitle'];
	$etheme = $row['etheme'];
	$guestnum = $row['guestnum'];
	$edate = $row['edate'];
	$dj = $row['dj'];
	$bar = $row['bar'];
	$transport = $row['transport'];
	$fquality = $row['fquality'];
	$ftime = $row['ftime'];
	$bitems = $row['bitems'];
	$litems = $row['litems'];
	$ditems = $row['ditems'];
}
	
?>
<div class="Userinformation">
<table>
	<tr>
    <th colspan="2">Booked Details</th>
    </tr>
	<tr>
	<td>Event Name</td>
	<td><?php echo $etitle; ?></td>
	</tr>
	<tr>
	<td>Event Theme</td>
	<td><?php echo $etheme; ?></td>
	</tr>
	<tr>
	<td>Event Guest</td>
	<td><?php echo $guestnum; ?></td>
	</tr>
	<tr>
	<td>Event Date</td>
	<td><?php echo $edate; ?></td>
	</tr>
	<tr>
	<td>DJ</td>
	<td><?php echo $dj; ?></td>
	</tr>
	<tr>
	<td>Bar</td>
	<td><?php echo $bar; ?></td>
	</tr>
	<tr>
	<td>Transport</td>
	<td><?php echo $transport; ?></td>
	</tr>
	<tr>
	<td>Food Quality</td>
	<td><?php echo $fquality; ?></td>
	</tr>
	<tr>
	<td>Food Time</td>
	<td><?php echo $ftime; ?></td>
	</tr>
	<tr>
	<td>Breakfast Item</td>
	<td><?php echo $bitems; ?></td>
	</tr>
	<tr>
	<td>Launch Item</td>
	<td><?php echo $litems; ?></td>
	</tr>
	<tr>
	<td>Dinner Item</td>
	<td><?php echo $ditems; ?></td>
	</tr>
</table>
</div>

<?php 

require 'lib/footer.php';

?>
