<?php

include 'lib/header.php';

?>
<?php
if ($_POST) {
$con = mysqli_connect("localhost","root","","event_management");
$item_name = $_POST['item_name'];
$item_type = $_POST['item_type'];

if (isset($_POST['submit'])) {
	$con = mysqli_connect("localhost","root","","event_management");
	$query = "INSERT INTO fooditemlist VALUES ('','$item_name','$item_type')";
	$result = mysqli_query($con,$query);
  if ($result) {
    echo "<center><p><b>Food Items Added Successfully!!!</b></p></center>";
  }
}

}

?>
<div class="addfooditem">
<div class="panel panel-default">
  <div class="panel-header">
     <center><h2>Add Food Items</h2></center>
  </div>
   <div class="panel-body">
   <div style="max-width:600px; margin:0 auto">
	<form action="" method="POST">
  <div class="form-group">
    <label for="item_name">Food Item Name</label>
    <input type="text" class="form-control" id="item_name" name="item_name" placeholder="Food Item Name" required="">
  </div>
   
  <div class="form-group">
    <label for="item_type">Food Item type</label>
    <select id="item_type" name="item_type" >
      <?php 

      $con = mysqli_connect("localhost","root","","event_management");
      $query = "SELECT * FROM fooditemtype";
      $result = mysqli_query($con,$query);
      while ($row = mysqli_fetch_array($result)) {

    ?>

      <option><?php echo $row["fooditemtype_name"]; ?></option>

    <?php 

    }

    ?>
    </select>
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