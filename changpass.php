<!-- <?php
//	session_start();
//	if($_SESSION['userType'] !='user' && $_SESSION['userType'] !='admin'){
//	header('location:index.php');
//	}else{
		//echo "Welcome " .$_SESSION['userName'];
//	}
?> -->
<?php
	$currnpass = $newpass = $retypass = $message = "";
	if(isset($_POST['Save'])){
		$currnpass = $_POST['currnpass'];
		$newpass = $_POST['newpass'];
		$retypass = $_POST['retypass'];
		$username = $_SESSION['userName'];
		if(empty($currnpass)){
				$message = "<span style=color:red;>Please input your current password</span>";
		}elseif(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])(?=.*[!@#$%])[0-9A-Za-z!@#$%]{6,15}$/', $currnpass)){
			$message = "<span style=color:red;>Password must 6 characters, letters, numbers at least one special character</span>";
		}elseif(empty($newpass)){
				$message = "<span style=color:red;>Please input your new password</span>";
		}elseif(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])(?=.*[!@#$%])[0-9A-Za-z!@#$%]{6,15}$/', $newpass)){
			$message = "<span style=color:red;>New password must 6 characters letters, numbers at least one special character</span>";
		}elseif(empty($retypass)){
				$message = "<span style=color:red;>Please Confirm your New Password</span>";
		}elseif(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])(?=.*[!@#$%])[0-9A-Za-z!@#$%]{6,15}$/', $retypass)){
			$message = "<span style=color:red;>Retype password must 6 characters letters, numbers at least one special character</span>";
		}else{
		$connect=mysqli_connect("localhost","root","","eco_f_car");
		$query = "select password from user where userName='$username'";
		$result = mysqli_query($connect,$query);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$dbpass = $row['password'];
		 if($currnpass != $dbpass){
			$message = "<span style=color:red;>Current password is wrong input right password</span>";
		 }else{
			if($newpass !=$retypass){
				$message = "<span style=color:red;>Password mismatched input right password</span>";
			}else{
				$connect=mysqli_connect("localhost","root","","eco_f_car");
				$query = "update user set password='$newpass' where userName='$username'";
				$result = mysqli_query($connect,$query);
				if($result){
					$message = "<span style='color:green;'>Successfully</span>";
					header( "refresh:0.1;url=index.php" );
				}else{
					echo mysqli_error($connect);
				}
			}
		}
	  }
	}		
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<link rel="stylesheet" type="text/css" href="inc/style-changepass.css">
</head>
<body>
	<div class="cng-pass">
		<div class="cng-top">
			<div class="cng-login">
			<a href="logout.php">Login</a></div>
		</div>
		<div class="cng-body">
			<div class="cng-part1">
				<div class="cng-h3"><h3>Change Password</h3></div>
				<div class="cng-p"><h6>It's a good idea to use a strong password that you don't use elsewhere</h6></div>
			</div>
			<div class="cng-part2">
				<div class="cng-part4"></div>
			</div>
			<div class="cng-error">
				<?php
					echo $message;
				?>
			</div>
            <div class="cng-mainpaet">
            	<form action="" method="post">
            	  <div class="cng-form">
            		<div class="cng-form-1">
            		<input type="password" name="currnpass" placeholder="Current password" value="<?php echo $currnpass; ?>"></div>
            		<div class="cng-form-1">
            		<input type="password" name="newpass" placeholder="New password" value="<?php echo $newpass; ?>"></div>
            		<div class="cng-form-1">
            		<input type="password" name="retypass" placeholder="Retype new password" value="<?php echo $retypass; ?>"></div>
            	  </div>
            </div>
            	<div class="cng-underline1"></div>
            <div class="cng-submit">
                    <input type="Submit" name="Save" value="Save Changes"></div>
            </form>
		</div>
		<div class="cng-footer">
			<div class="cng-close">
			<a href="profile.php">Close</a></div>
		</div>
	</div>
</body>
</html>