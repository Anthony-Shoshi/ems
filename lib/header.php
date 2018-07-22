<?php
 session_start();
  if($_SESSION['userType'] !='user' && $_SESSION['userType'] !='admin'){
  header('location:index.php');
  }else{
    $userName = $_SESSION['userName'];
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>ABC Events</title>
	<link rel="stylesheet" type="text/css" href="inc/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="inc/web-fonts-with-css/css/fa-brands.min.css">
  <link rel="stylesheet" type="text/css" href="inc/web-fonts-with-css/css/fa-regular.min.css">
  <link rel="stylesheet" type="text/css" href="inc/web-fonts-with-css/css/fa-solid.min.css">
  <link rel="stylesheet" type="text/css" href="inc/web-fonts-with-css/css/fontawesome-all.min.css">
  <link rel="stylesheet" type="text/css" href="inc/web-fonts-with-css/css/fontawesome.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="inc/bootstrap.min.js"></script>
</head>
<body>
	<!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="index.php">
    <img src="img/logo1.png" width="33" height="30" class="d-inline-block align-top" alt="">
    Events
  </a>
</nav>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
    <?php
      if ($_SESSION['userType'] == 'user') {
      
      echo "

      <li class='nav-item active'>
        <a class='nav-link' href='home.php'><i class = 'fa fa-home'></i>Home<span class='sr-only'>(current)</span></a>
      </li>
       <li class='nav-item'>
        <a class='nav-link' href='profile.php'><i class='far fa-address-card'></i>Profile</a>
      </li>
      <li class='nav-item'>
        <a class='nav-link' href='about.php'><i class = 'fa fa-book'></i>About us</a>
      </li>
      <li class='nav-item'>
        <a class='nav-link' href='service.php'><i class='fas fa-hand-holding-heart'></i>Our Services</a>
      </li>
      <li class='nav-item'>
        <a class='nav-link' href='bookevent.php'><i class='far fa-handshake'></i>Booking Event</a>
      </li>
      <li class='nav-item'>
        <a class='nav-link' href='contactus.php'><i class = 'fa fa-envelope'></i>Contact us</a>
      </li>
      <li class='nav-item'>
        <a class='nav-link' href='progressreport.php'><i class='fas fa-arrow-alt-circle-right'></i>Progress Report</a>
      </li>
    <li class='nav-item'>
        <a class='nav-link' href='logout.php'><i class='far fa-arrow-alt-circle-left'></i>Logout</a>
      </li>

        ";

      }
      else {
          echo "

    <li class='nav-item active'>
        <a class='nav-link' href='home.php'><i class = 'fa fa-home'></i>Home <span class='sr-only'>(current)</span></a>
      </li>
      <li class='nav-item'>
        <a class='nav-link' href='profile.php'><i class='far fa-address-card'></i>Profile</a>
      </li>
      <li class='nav-item'>
        <a class='nav-link' href='about.php'><i class = 'fa fa-book'></i>About us</a>
      </li>
      <li class='nav-item dropdown'>
    <a class='nav-link dropdown-toggle' data-toggle='dropdown' href='#' role='button' aria-haspopup='true' aria-expanded='false'><i class='fas fa-globe'></i>Administration</a>
    <div class='dropdown-menu'>
      <a class='dropdown-item' href='addevent.php'>Add Event</a>
      <a class='dropdown-item' href='addtheme.php'>Add Theme</a>
      <a class='dropdown-item' href='adduser.php'>Add User</a>
      <a class='dropdown-item' href='addtrans.php'>Add Transport</a>
      <a class='dropdown-item' href='addfooditem.php'>Add Food Items</a>
    </div>
  </li>
  <li class='nav-item dropdown'>
    <a class='nav-link dropdown-toggle' data-toggle='dropdown'href='#' role='button' aria-haspopup='true' aria-expanded='false'><i class='far fa-chart-bar'></i>Reports</a>
    <div class='dropdown-menu'>
      <a class='dropdown-item' href='eventreport.php'>Event Report</a>
      <a class='dropdown-item' href='themereport.php'>Theme Report</a>
      <a class='dropdown-item' href='userreport.php'>User Report</a>
      <a class='dropdown-item' href='transreport.php'>Transport Report</a>

    </div>
  </li>
   <li class='nav-item'>
        <a class='nav-link' href='contactus.php'><i class = 'fa fa-envelope'></i>Contact us</a>
      </li>
  <li class='nav-item'>
        <a class='nav-link' href='logout.php'><i class='far fa-arrow-alt-circle-left'></i>Logout</a>
      </li>

          ";

      }
    ?>
  </nav>
    </ul>
  </div>
</nav>
</nav>