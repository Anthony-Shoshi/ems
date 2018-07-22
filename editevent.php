<?php

include 'lib/header.php';

?>
<?php
if (isset($_GET['eid'])){
  $eid = $_GET['eid']; 
}
//$thid = $_SESSION['id'];
$con = mysqli_connect("localhost","root","","event_management");
$query = "SELECT * FROM addevent WHERE id = '$eid'";
$result = mysqli_query($con,$query);

$row = mysqli_fetch_array($result);

$id = $row['id'];
$etitle = $row['etitle'];
$etheme = $row['etheme'];
$guestnum = $row['guestnum'];
$edate = $row['edate'];
$stime = $row['stime'];
$etime = $row['etime'];
$edes = $row['edes'];


?>

<?php

if ($_SERVER["REQUEST_METHOD"]=="POST") {

$etitle = $_POST['etitle'];
$etheme = $_POST['etheme'];
$guestnum = $_POST['guestnum'];
$edate = $_POST['edate'];
$stime = $_POST['stime'];
$etime = $_POST['etime'];
$edes = $_POST['edes'];

$query = "UPDATE addevent SET etitle = '$etitle', etheme = '$etheme', guestnum = '$guestnum', edate = '$edate', stime = '$stime', etime = '$etime', edes = '$edes' WHERE id = '$eid'";
$result = mysqli_query($con,$query);
if ($result=!false) {
  echo "<center><b>Updated Successfuly!!!</b></center>";
}
//}
}

?>

<?php 

if (isset($_POST['back'])) {
  header("location:themereport.php");
}

?>


<div class="addevent">
<div class="panel panel-default">
  <div class="panel-header">
     <center><h2>Edit Event</h2></center>
  </div>
   <div class="panel-body">
   <div style="max-width:600px; margin:0 auto">
  <form action="" method="POST">
  <div class="form-group">
    <label for="etitle">Event Title</label>
    <input type="text" class="form-control" id="etitle" name="etitle" placeholder="Enter Event Title" value="<?php echo $etitle;?>">
  </div>
  <div class="form-group">
    <label for="etheme">Event Theme</label></br>
    <select id="etheme" name="etheme" required="">
    <?php 

      $con = mysqli_connect("localhost","root","","event_management");
      $query = "SELECT * FROM addtheme";
      $result = mysqli_query($con,$query);
      while ($row = mysqli_fetch_array($result)) {

    ?>

      <option><?php echo $row["ttitle"]; ?></option>

    <?php 

    }

    ?>
    </select>
  </div>
  <div class="form-group">
    <label for="guestnum">Number of Guest</label>
    <input type="number" class="form-control" id="guestnum"  name="guestnum" placeholder="Enter Number of Guest" value="<?php echo $guestnum;?>">
  </div>
  <div class="form-group">
    <label for="edate">Event Date</label>
    <input type="date" class="form-control" id="edate" name="edate" value="<?php echo $edate;?>">
  </div>
  <div class="form-group">
    <label for="stime">Event Start Time</label>
    <input type="time" class="form-control" id="stime" name="stime" value="<?php echo $stime;?>">
  </div>
  <div class="form-group">
    <label for="etime">Event End Time</label>
    <input type="time" class="form-control" id="etime" name="etime" value="<?php echo $etime;?>">
  </div>
  <div class="form-group">
    <label for="edes">Description</label>
    <textarea class="form-control" rows="6" name="edes" placeholder="Write description . . ." required="" value="<?php echo $edes;?>"></textarea>
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

include 'lib/footer.php';

?>

<?php
