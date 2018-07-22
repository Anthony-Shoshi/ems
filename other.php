<?php

include 'lib/header.php';

?>
<?php

if ($_POST) {

  $dj = $_POST['dj'];
  $photo = $_POST['photo'];
  $bar = $_POST['bar'];
  $transport = $_POST['transport'];
  $tsystem = $_POST['tsystem'];
  $vnum = $_POST['vnum'];

  if (isset($_POST['submit'])) {
    $con = mysqli_connect("localhost","root","","event_management");
    $query = "INSERT INTO other VALUES ('','$dj','$photo','$bar','$transport','$tsystem','$vnum')";
    $result = mysqli_query($con,$query);

    header("location:food.php");
  }

  if (isset($_POST['oskip'])) {
    header("location:food.php");
  }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Others Facility</title>
	<link rel="stylesheet" type="text/css" href="inc/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="style.css">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</head>
<body>
<div class="other">
<div class="panel panel-default">
  <div class="panel-header">
     <center><h2>Others Facility</h2></center>
  </div>
   <div class="panel-body">
   <div style="max-width:600px; margin:0 auto">
	<form action="other.php" method="POST">
  <div class="form-group">
    <label for="dj"><b>DJ : </b></label>
    <input type="radio" onchange="showPrice()" id="djY" name="dj" value="Yes" checked>Yes
    <input type="radio" id="djN" onchange="showPrice()" name="dj" value="No">No
    <input type="label" id="lblPrice" value="13000">
  </div>
  <div class="form-group">
    <label for="photo"><b>Photographer : </b></label>
    <input type="radio" id="photo" name="photo" value="Yes" checked>Yes
    <input type="radio" id="photo" name="photo" value="No">No
  </div>
  <div class="form-group">
    <label for="bar"><b>Bar facility : </b></label>
    <input type="radio" id="bar" name="bar" value="Yes">Yes
    <input type="radio" id="bar" name="bar" value="No" checked>No
  </div>
  <div class="form-group">
    <label for="transport"><b>Transport service : </b></label>
    <input type="radio" id="transport" name="transport" value="Yes" checked>Yes
    <input type="radio" id="transport" name="transport" value="No">No
  </div>
  <div class="form-group">
    <label for="tsystem"><b>Transport System (if transport selected) : </b></label>
    <select id="tsystem" name="tsystem">
      <?php
        $con = mysqli_connect("localhost","root","","event_management");
        $query = "SELECT * FROM transport";
        $result = mysqli_query($con,$query);

        while ($row = mysqli_fetch_array($result)) {
      ?>
      <option><?php echo $row['transname']; ?></option>
      <?php

      }

      ?>    
    </select>
  </div>
  <div class="form-group">
    <label for="vnum"><b>Number of Vehicle</b></label>
    <input type="number" class="form-control" id="vnum"  name="vnum" placeholder="Enter Number of Vehicle">
  </div>
   <button type="submit" class="btn btn-success" name="submit">Submit</button>
  <div class="back"><button type="submit" class="btn btn-primary" name="oskip">Skip</button></div>
</form>
</div>
</div>
</div>

<script type="text/javasript">
  function showPrice(){
  var y= $('#djY').prop('checked');
  var n= $('#djN').prop('checked');

  if(y == true){
  $('#lblPrice').show();
}
  if(n == true){
 $('#lblPrice').hide(); 
}
}
  </script>
</div>
</body>
</html>
<?php

include 'lib/footer.php';

?>