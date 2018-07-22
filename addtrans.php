<?php

include 'lib/header.php';

?>
<?php

$con = mysqli_connect("localhost","root","","event_management");

if ($_POST) {

$transname = $_POST['transname'];
$transdes = $_POST['transdes'];

if (isset($_POST['submit'])) {
  $con = mysqli_connect("localhost","root","","event_management");
  $query = "INSERT INTO transport VALUES ('','$transname','$transdes')";
  $result = mysqli_query($con,$query);
  if ($result) {
    echo "<center><p><b>Transport Added Successfully!!!</b></p></center>";
  }
}
}
?>
<div class="addtrans">
<div class="panel panel-default">
  <div class="panel-header">
     <center><h2>Add Transport</h2></center>
  </div>
   <div class="panel-body">
   <div style="max-width:600px; margin:0 auto">
	<form action="" method="POST">
  <div class="form-group">
    <label for="transname">Vehicle Name</label>
    <input type="text" class="form-control" id="transname" name="transname" placeholder="Enter Vehicle Name" required="">
  </div>
   <div class="form-group">
    <label for="transdes">Description</label>
    <textarea class="form-control" rows="6" name="transdes" placeholder="Write description . . ." required=""></textarea>
  </div>
  <button type="submit" class="btn btn-success" name="submit">Submit</button>
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
