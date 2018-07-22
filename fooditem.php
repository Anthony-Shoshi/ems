<?php

include 'lib/header.php';
?>
<?php

if ($_POST) {

  $bitems = $_POST['bitems'];  
  $litems = $_POST['litems'];
  $ditems = $_POST['ditems'];

  if (isset($_POST['fisubmit'])) {
    $con = mysqli_connect("localhost","root","","event_management");
    $query = "INSERT INTO fooditem VALUES ('','$bitems','$litems','$ditems')";
    $result = mysqli_query($con,$query);
    echo "<center><b>Thank you for booking.</b></center>";
    header("location:invoice.php");
  }

}

  // if (isset($_POST['fiback'])) {
  //   header("location:food.php");
  // }
  //   $brackf1 = "Breakfast";
  //   $brackf2 = "Lunch";
  //   $brackf3 = "Dinner";
  //   $brackf4 = "Breakfast,Lunch";
  //   $brackf5 = "breakfast,lunch,dinner";
  //   $brackf6 = "Launch,Dinner";
  //   $bitem; 
  //   $litem;

  //     $con = mysqli_connect("localhost","root","","event_management");
  //     $query = "SELECT * FROM food";
  //     $result = mysqli_query($con,$query);
  //     $row = mysqli_fetch_array($result);
  //     $breakfaste = $row['ftime'];
  //     echo $breakfaste;
     
     

      // if ($breakfaste == ) {
          
      // }

      // $con = mysqli_connect("localhost","root","","event_management");
      // $query = "SELECT * FROM fooditemtype WHERE fooditemtype_id = 2";
      // $result = mysqli_query($con,$query);
      // $row = mysqli_fetch_array($result);
      // $lunch = $row['fooditemtype_name'];
      // echo $lunch;


      // $con = mysqli_connect("localhost","root","","event_management");
      // $query = "SELECT * FROM fooditemtype";
      // $result = mysqli_query($con,$query);
      // $row = mysqli_fetch_array($result);
      // $dinner = $row['fooditemtype_name'];

      // if ($dinner == "diner") {
      //   echo "Mamun";
      // }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Food Items</title>
	<link rel="stylesheet" type="text/css" href="inc/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="fooditem">
<div class="panel panel-default">
  <div class="panel-header">
     <center><h2>Food Items</h2></center>
  </div>
   <div class="panel-body">
   <div style="max-width:600px; margin:0 auto">
	<form action="fooditem.php" method="POST">

    <div class="form-group">
    <label for="etheme">Breakfast Item</label></br>
    <select id="etheme" name="etheme" required="">
    <?php 

      $con = mysqli_connect("localhost","root","","event_management");
      $query = "SELECT * FROM fooditemlist WHERE item_type = 'breakfast' ";
      $result = mysqli_query($con,$query);
      while ($row = mysqli_fetch_array($result)) {

    ?>

      <option><?php echo $row["item_name"]; ?></option>

    <?php 

    }

    ?>
    </select>
  </div>

<div class="form-group">
    <label for="etheme">Lunch Item</label></br>
    <select id="etheme" name="etheme" required="">
    <?php 

      $con = mysqli_connect("localhost","root","","event_management");
      $query = "SELECT * FROM fooditemlist WHERE item_type = 'lunch' ";
      $result = mysqli_query($con,$query);
      while ($row = mysqli_fetch_array($result)) {

    ?>

      <option><?php echo $row["item_name"]; ?></option>

    <?php 

    }

    ?>
    </select>
  </div>
  <div class="form-group">
    <label for="etheme">Dinner Item</label></br>
    <select id="etheme" name="etheme" required="">
    <?php 

      $con = mysqli_connect("localhost","root","","event_management");
      $query = "SELECT * FROM fooditemlist WHERE item_type = 'dinner' ";
      $result = mysqli_query($con,$query);
      while ($row = mysqli_fetch_array($result)) {

    ?>

      <option><?php echo $row["item_name"]; ?></option>
    
    <?php 

    }

    ?>
    </select>
  </div>
  <button type="submit" class="btn btn-success" name="fisubmit">Submit</button>
  <div class="back"><button type="submit" class="btn btn-primary" name="fiback">Back</button></div>
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