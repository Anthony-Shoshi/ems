<?php

include 'lib/header.php';

?>
<?php
if (isset($_GET['transid'])){
  $transid = $_GET['transid']; 
}
//$thid = $_SESSION['id'];
$con = mysqli_connect("localhost","root","","event_management");
$query = "SELECT * FROM transport WHERE transid = '$transid'";
$result = mysqli_query($con,$query);

$row = mysqli_fetch_array($result);

$transname = $row['transname'];
$transdes = $row['transdes'];

?>

<?php

if ($_SERVER["REQUEST_METHOD"]=="POST") {

//$con = mysqli_connect("localhost","root","","event_management");
$transname = $_POST['transname'];
$transdes = $_POST['transdes'];

// if (isset($_POST['update'])) {

// $con = mysqli_connect("localhost","root","","event_management");
$query = "UPDATE transport SET transname = '$transname', transdes = '$transdes' WHERE transid = '$transid'";
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
     <center><h2>Edit Transport</h2></center>
  </div>
   <div class="panel-body">
   <div style="max-width:600px; margin:0 auto">
	<form action="" method="post">
  <div class="form-group">
    <label for="transname">Transport Name</label>
    <input type="text" class="form-control" id="transname" name="transname" placeholder="Enter Transport Name" required="" value="<?php echo $transname;?>">
  </div>
   <div class="form-group">
    <label for="transdes">Description</label>
    <textarea class="form-control" rows="6" name="transdes" placeholder="Write description . . ." required="" value="<?php echo $transdes;?>"></textarea>
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
