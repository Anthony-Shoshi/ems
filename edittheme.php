<?php

include 'lib/header.php';

?>
<?php
if (isset($_GET['thid'])){
  $thid = $_GET['thid']; 
}
//$thid = $_SESSION['id'];
$con = mysqli_connect("localhost","root","","event_management");
$query = "SELECT * FROM addtheme WHERE id = '$thid'";
$result = mysqli_query($con,$query);

$row = mysqli_fetch_array($result);

$ttitle = $row['ttitle'];
$tdes = $row['tdes'];

?>

<?php

if ($_SERVER["REQUEST_METHOD"]=="POST") {

//$con = mysqli_connect("localhost","root","","event_management");
$ttitle = $_POST['ttitle'];
$tdes = $_POST['tdes'];

// if (isset($_POST['update'])) {

// $con = mysqli_connect("localhost","root","","event_management");
$query = "UPDATE addtheme SET ttitle = '$ttitle', tdes = '$tdes' WHERE id = '$thid'";
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


<div class="addtheme">
<div class="panel panel-default">
  <div class="panel-header">
     <center><h2>Edit Theme</h2></center>
  </div>
   <div class="panel-body">
   <div style="max-width:600px; margin:0 auto">
	<form action="" method="post">
  <div class="form-group">
    <label for="ttitle">Theme Title</label>
    <input type="text" class="form-control" id="ttitle" name="ttitle" placeholder="Enter Theme Title" required="" value="<?php echo $ttitle;?>">
  </div>
   <div class="form-group">
    <label for="tdes">Description</label>
    <textarea class="form-control" rows="6" name="tdes" placeholder="Write description . . ." required="" value="<?php echo $tdes;?>"></textarea>
  </div>
  <button type="submit" class="btn btn-success" name="update">Update</button>
  <div class="reset"><button type="submit" class="btn btn-primary" name="back">Back</button></div>
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
