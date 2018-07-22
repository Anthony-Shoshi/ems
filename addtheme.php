<?php

include 'lib/header.php';

?>

<?php

$con = mysqli_connect("localhost","root","","event_management");

if ($_POST) {

$ttitle = $_POST['ttitle'];
$tdes = $_POST['tdes'];

if (isset($_POST['submit'])) {
  $con = mysqli_connect("localhost","root","","event_management");
  $query = "INSERT INTO addtheme VALUES ('','$ttitle','$tdes')";
  $result = mysqli_query($con,$query);
  if ($result) {
    echo "<center><p><b>Theme Added Successfully!!!</b></p></center>";
  }
}
}

?>

<div class="addtheme">
<div class="panel panel-default">
  <div class="panel-header">
     <center><h2>Add Theme</h2></center>
  </div>
   <div class="panel-body">
   <div style="max-width:600px; margin:0 auto">
	<form action="addtheme.php" method="POST">
  <div class="form-group">
    <label for="ttitle">Theme Title</label>
    <input type="text" class="form-control" id="ttitle" name="ttitle" placeholder="Enter Theme Title" required="">
  </div>
   <div class="form-group">
    <label for="tdes">Description</label>
    <textarea class="form-control" rows="6" name="tdes" placeholder="Write description . . ." required=""></textarea>
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

