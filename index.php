<?php 
    session_start(); 
    $connect=mysqli_connect("localhost","root","","event_management");
     $userName = $password = $email = $message = "";
    if (isset($_POST['login'])) {
      $userName = $_POST['userName'];
      $password = $_POST['password'];

      if (empty($userName)) {
        $message = "<span style=color:red;>Please input your Username</span>";
      }elseif(strlen($userName) < 6) {
        $message = "<span style=color:red;>Username is too short, minimum is 6 characters</span>"; 
      }elseif(empty($password)){
        $message = "<span style=color:red;>Please input your Password</span>";
      }elseif(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])(?=.*[!@#$%])[0-9A-Za-z!@#$%]{6,15}$/', $password)){
        $message = "<span style=color:red>Password must 6 characters of letters, numbers & one special character</span>";
      }else{
        $username = "select * from user where userName = '$userName'";
        $query = mysqli_query($connect,$username);
        $num = mysqli_num_rows($query);
        if($num<1){
        $message = '<span style=color:red>Invalid username please input a valid username</span>';
      }else{
        $row = mysqli_fetch_array($query,MYSQLI_ASSOC);
        $dbpass = $row['password'];
        $attempts = $row['attempts'];
        $time_Stamp = $row['time_Stamp'];
        $userType = $row['userType'];
        if(time()>$time_Stamp){
          if ($password != $dbpass) {
            $message = '<span style=color:red>Invalid password & please a valid password</span>';
            $attempts =$row['attempts'];
            $attempts = $attempts +1;
            $query = "update user set attempts = $attempts where userName = '$userName'";
            $result = mysqli_query($connect, $query);
            if ($attempts>3) {
              $time_Stamp = time() + 300;
              $query = "update user set time_Stamp = $time_Stamp where userName = '$userName'";
              $result = mysqli_query($connect, $query);
              $message =  "<span style=color:red>You have input wrong password three times, So you are locked for 5 minutes.</span>";
            }
          }else{
           $_SESSION['userName'] = $userName;
           $_SESSION['login'] = true;
           $_SESSION['userType'] = $userType;
           $attempts = 0;
           $time_Stamp = 0;
           $query = "update user set attempts = $attempts, time_Stamp = $time_Stamp where email = '$email'";
           $result = mysqli_query($connect, $query);
            if($userType == 'user'){
               header( "refresh:0.1;url=home.php" );
            }else{
               header( "refresh:0.1;url=home.php" );
            }
         }
        }else{
             $message =  "<span style=color:red>You are locked 5 minit & Try after few munites</span>";
          }
       }
     }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
      <link rel="stylesheet" href="inc/lonin-index-style.css">
</head>
<body>
          <div class="cont_login">
             <div class="header">
                 <div class="header-left">
                  <div class="header-left2">
                   <p>Event Management System</p></div>
                 </div>
             </div>
          <div class="cont_info_log_sign_up">
            <div class="signin-click">
            <a href="registration.php">Sign-Up</a></div>
          <div class="col_md_sign_up">

          <div class="cont_ba_opcitiy">
            <div class="h2-header">
              <h2>Log In</h2>
            </div>
            <div class="error">
              <?php
                echo $message;
              ?>
            </div>
            <div class="login-main-from">
              <form action="" method="post">
                <div class="padding">
                <input type="text" placeholder="User Name" name="userName" value="<?php echo $userName; ?>"></div>
                <div class="padding">
                <input type="password" placeholder="Password" name="password" value="<?php echo $password; ?>"></div>
                <div class="login-submit">
                <input type="submit" name="login" value="LOG-IN"></div>
              </form>
              <div class="lpage_footer">
                <div class="lpage_footer2">
                <a href="changpass.php">Forgot password?</a></div>
                <div class="lpage_footer3">
                <p>Not registered yet? Then <a href="registration.php">Sign-Up</a></p></div>
              </div>
            </div>
         </div>
         </div>
       </div>
           <div class="cont_back_info">
           <div class="cont_img_back_grey">
           <img src="image/login-bg.jpg" alt="" />
           </div> 
       </div>
       <div class="foother">
          <div class="copy-right">
            <p>&copy; <?php echo date("Y") ?> 'EMS' All Rights Reserved.</p>
        </div>
      </div>
     </div>
</body>
</html>
