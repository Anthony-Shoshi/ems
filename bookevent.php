<?php

include 'lib/header.php';

?>

<?php
if ($_POST) {
$con = mysqli_connect("localhost","root","","event_management");
$etitle = $_POST['etitle'];
$etheme = $_POST['etheme'];
$guestnum = $_POST['guestnum'];
$edate = $_POST['edate'];
$stime = $_POST['stime'];
$etime = $_POST['etime'];
$edes = $_POST['edes'];

if (isset($_POST['submit'])) {

  $con = mysqli_connect("localhost","root","","event_management");
  $query = "INSERT INTO addevent VALUES ('','$etitle','$etheme','$guestnum','$edate','$stime','$etime','$edes')";
  $result = mysqli_query($con,$query);
}

header("location:other.php");

}

?>
<div class="addevent">
<div class="panel panel-default">
  <div class="panel-header">
     <center><h2>Book Event</h2></center>
  </div>
   <div class="panel-body">
   <div style="max-width:600px; margin:0 auto">
	<form action="bookevent.php" method="POST">
  <div class="form-group">
    <label for="etitle">Event Title</label>
    <input type="text" class="form-control" id="etitle" name="etitle" placeholder="Enter Event Title" required="">
  </div>
  <div class="form-group">
    <label for="etheme">Event Theme</label></br>
    <select id="etheme" name="etheme">
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
    <input type="number" class="form-control" id="guestnum"  name="guestnum" placeholder="Enter Number of Guest" required="">
  </div>
  <div class="form-group">
    <label for="edate">Event Date</label>
    <input type="date" class="form-control" id="edate" name="edate" required="">
  </div>
  <div class="form-group">
    <label for="stime">Event Start Time</label>
    <input type="time" class="form-control" id="stime" name="stime" required="">
  </div>
  <div class="form-group">
    <label for="etime">Event End Time</label>
    <input type="time" class="form-control" id="etime" name="etime" required="">
  </div>
  <div class="form-group">
    <label for="edes">Description</label>
    <textarea class="form-control" rows="6" name="edes" placeholder="Write description . . ." required=""></textarea>
  </div>
  <button type="submit" class="btn btn-success" name="submit">Book Now!</button>
  <div class="reset"><button type="reset" class="btn btn-primary" name="back">Reset</button></div>
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