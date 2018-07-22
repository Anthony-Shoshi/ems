<?php

include 'lib/header.php';
?>

<?php

if ($_POST) {
  $fquality = $_POST['fquality'];
  $ftime = $_POST['ftime'];
  $b = implode(",", $ftime);
  if (isset($_POST['submit'])) {
    $con = mysqli_connect("localhost","root","","event_management");
    $query = "INSERT INTO food VALUES ('','$fquality','$b')";
    $result = mysqli_query($con,$query);
    header("location:fooditem.php");
  }

 
}

?>
<?php

 if (isset($_POST['fskip'])) {

    echo "<div class = 'msg'><center><b>You Booked your event without Food Facility.<br/>Thank you</b></center></div>";
    header("location:invoice.php");
  }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Others Facility</title>
	<link rel="stylesheet" type="text/css" href="inc/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="food">
<div class="panel panel-default">
  <div class="panel-header">
     <center><h2>Food Facility</h2></center>
  </div>
   <div class="panel-body">
   <div style="max-width:600px; margin:0 auto">
	<form action="food.php" method="POST">
  <div class="form-group">
    <label for="fquality"><b>Food Quality : </b></label>
    <input type="radio" id="fquality" name="fquality" value="Normal" checked>Normal
    <input type="radio" id="fquality" name="fquality" value="Medium">Medium
    <input type="radio" id="fquality" name="fquality" value="Premier">Premier
  </div>
  <div class="form-group">
    <label for="ftime"><b>Meal Time : </b></label>
    <input type="checkbox" name="ftime[]" value="Breakfast">Breakfast
    <input type="checkbox" name="ftime[]" value="Launch" checked="">Launch
    <input type="checkbox" name="ftime[]" value="Dinner">Dinner
  </div>
   <button type="submit" class="btn btn-success" name="submit">Submit</button>
  <div class="back"><button type="submit" class="btn btn-primary" name="fskip">Skip</button></div>
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