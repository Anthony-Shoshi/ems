 <?php
    $connect=mysqli_connect("localhost","root","","event_management");
    $fullName=$userName=$email=$password=$cPassword=$pAddress=$pCode=$yFnamber=$dateBirth=$gender=$message="";
    if ($_POST) {
    $fullName = $_POST['fullName'];
    $userName = $_POST['userName'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $cPassword= $_POST['cPassword'];
    $pAddress = $_POST['pAddress'];
    $pCode    = $_POST['pCode'];
    $yFnamber  = $_POST['yFnamber'];
    $dateBirth= $_POST['dateBirth'];
    $gender   = $_POST['gender'];
    //======age calculate start=======//
     date_default_timezone_set('Asia/Dhaka');
          $date = date('m/d/Y');
          $bday = new DateTime($dateBirth);
          $today = new Datetime(date($date));
          $diff = $today->diff($bday);
          $age = "$diff->y";    
    //======age calculate start=======//
         if ($password == $cPassword) {
           $connect=mysqli_connect("localhost","root","","event_management");
           $query = "INSERT INTO user values('','$fullName','$userName','$email','$password','$pAddress','$pCode','$yFnamber','$dateBirth','$age','$gender',0,0,'user')";
           $result = mysqli_query($connect, $query); 
           if ($result) {
             $message = "<span style=color:green;>Registration Done Successfully</span>";
             header( "refresh:0.1;url=index.php" );
           }else{
             $message = "<span style=color:red;>Error</span>" .mysqli_error($connect);
           }
         }else{
             $message = "<span style=color:red;>Passwords mismatched, Please enter same password while</span>";
         }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>From..!!</title>
	<link rel="stylesheet" type="text/css" href="inc/bootstrap.reg.css">
	<script>
			function validate (){
				var FullName = document.getElementById('fullName').value;
				var UserName = document.getElementById('userName').value;
				var Email = document.getElementById('email').value;
				var Password = document.getElementById('password').value;
				var CPassword = document.getElementById('cPassword').value;
				var PAddress = document.getElementById('pAddress').value;
				var PCode = document.getElementById('pCode').value;
				var YFnamber = document.getElementById('yFnamber').value;
				var DateBirth = document.getElementById('dateBirth').value;
				var Gender = document.getElementById('gender').value;
				var alpha = /^[a-zA-Z]+$/;
                var alphanum = /^(?=.*\d)(?=.*[A-Za-z])(?=.*[!@#$%])[0-9A-Za-z!@#$%]{6,15}$/;
				// Full Name validation //
				if (FullName.length == 0) {
					var errors = document.getElementById('errors');
					errors.style.color = "red";
					errors.innerHTML = "You must input your Full Name";
					FullName2 = document.getElementById('fullName');
					FullName2.style.backgroundColor="LIGHTCORAL";
					return false;
				}else{
					if (!alpha.test(FullName)) {
					var errors = document.getElementById('errors');
					errors.style.color = "red";
					errors.innerHTML = "Invalid full name Only Alphabet is allowed";
					FullName2 = document.getElementById('fullName');
					FullName2.style.backgroundColor="LIGHTCORAL";
					return false;
					}
				}
				// User Name validation //
				if (UserName.length == 0) {
					var errors = document.getElementById('errors');
					errors.style.color = "red";
					errors.innerHTML = "You must enter a user name";
					UserName2 = document.getElementById('userName');
					UserName2.style.backgroundColor="LIGHTCORAL";
					return false;
				}else{
					if (UserName.length < 6) {
					var errors = document.getElementById('errors');
					errors.style.color = "red";
					errors.innerHTML = "User name must contain 6 character";
					UserName2 = document.getElementById('userName');
					UserName2.style.backgroundColor="LIGHTCORAL";
					return false;
					}
				}
				// Email address validation //
				if (Email.length == 0) {
					var errors = document.getElementById('errors');
					errors.style.color = "red";
					errors.innerHTML = "Input your email address";
					Email2 = document.getElementById('email');
					Email2.style.backgroundColor="LIGHTCORAL";
					return false;
				}else{
					var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
					if (!re.test(Email)) {
					var errors = document.getElementById('errors');
					errors.style.color = "red";
					errors.innerHTML = "You must input your valid email address";
					Email2 = document.getElementById('email');
					Email2.style.backgroundColor="LIGHTCORAL";
					return false;
					}
				}
				// Password validation //
                if (Password.length == 0) {
					var errors = document.getElementById('errors');
					errors.style.color = "red";
					errors.innerHTML = "You must input a Password";
					Password2 = document.getElementById('password');
					Password2.style.backgroundColor="LIGHTCORAL";
					return false;
				}else{
					if (Password.length < 6) {
					var errors = document.getElementById('errors');
					errors.style.color = "red";
					errors.innerHTML = "Password must contain 6 character";
					Password2 = document.getElementById('password');
					Password2.style.backgroundColor="LIGHTCORAL";
					return false;
					}
				}
				if(!alphanum.test(Password)){
					var errors = document.getElementById('errors');
					errors.style.color = "red";
					errors.innerHTML = "Password must 6 characters of letters, numbers at least one special character";
					Password2 = document.getElementById('password');
					Password2.style.backgroundColor="LIGHTCORAL";
					return false;
				}
				// Confirm Password validation //
				if (CPassword.length == 0) {
					var errors = document.getElementById('errors');
					errors.style.color = "red";
					errors.innerHTML = "You must input a Confirm Password";
					CPassword2 = document.getElementById('cPassword');
					CPassword2.style.backgroundColor="LIGHTCORAL";
					return false;
				}else{
					if (CPassword.length < 6) {
					var errors = document.getElementById('errors');
					errors.style.color = "red";
					errors.innerHTML = "Confirm Password must contain 6 character";
					CPassword2 = document.getElementById('cPassword');
					CPassword2.style.backgroundColor="LIGHTCORAL";
					return false;
					}
				}
				if(!alphanum.test(CPassword)){
					var errors = document.getElementById('errors');
					errors.style.color = "red";
					errors.innerHTML = "Confirm password must 6 characters letters, numbers least one special character";
					CPassword2 = document.getElementById('cPassword');
					CPassword2.style.backgroundColor="LIGHTCORAL";
					return false;
				}
				//Password Matched checked//
				if(Password.length != CPassword.length){
					var errors = document.getElementById('errors');
					errors.style.color = "red";
					errors.innerHTML = "Passwords mismatched, Please enter same password";
					Password2 = document.getElementById('password');
					Password2.style.backgroundColor="LIGHTCORAL";
					return false;
				}
				//Postal Address validation//
				if (PAddress.length == 0) {
					var errors = document.getElementById('errors');
					errors.style.color = "red";
					errors.innerHTML = "Input your postal address";
					PAddress2 = document.getElementById('pAddress');
					PAddress2.style.backgroundColor="LIGHTCORAL";
					return false;
				}else{
					if (!alpha.test(PAddress)) {
					var errors = document.getElementById('errors');
					errors.style.color = "red";
					errors.innerHTML = "Invalid postal address Only Alphabet is allowed";
					PAddress2 = document.getElementById('pAddress');
					PAddress2.style.backgroundColor="LIGHTCORAL";
					return false;
					}
				}
				//Post Code validation//
				if (PCode.length == 0) {
					var errors = document.getElementById('errors');
					errors.style.color = "red";
					errors.innerHTML = "Input your post code address";
					PCode2 = document.getElementById('pCode');
					PCode2.style.backgroundColor="LIGHTCORAL";
					return false;
				}else{
					if (alpha.test(PCode)) {
					var errors = document.getElementById('errors');
					errors.style.color = "red";
					errors.innerHTML = "Invalid post code Only number is allowed";
					PCode2 = document.getElementById('pCode');
					PCode2.style.backgroundColor="LIGHTCORAL";
					return false;
					}
				}
				//Favorite Name validation//
				if (YFnamber.length == 0) {
					var errors = document.getElementById('errors');
					errors.style.color = "red";
					errors.innerHTML = "Input Your Favorite name";
					YFnamber2 = document.getElementById('yFnamber');
					YFnamber2.style.backgroundColor="LIGHTCORAL";
					return false;
				}else{
					if (!number.test(YFnamber)) {
					var errors = document.getElementById('errors'); 
					errors.style.color = "red";
					errors.innerHTML = "Invalid Favorite name Only Alphabet is allowed";
					YFnamber2 = document.getElementById('yFnamber');
					YFnamber2.style.backgroundColor="LIGHTCORAL";
					return false;
					}
				}
				//Date of Birth validation//
				if (DateBirth.length == 0) {
					var errors = document.getElementById('errors');
					errors.style.color = "red";
					errors.innerHTML = "Input your Date of Birth";
					DateBirth2 = document.getElementById('dateBirth');
					DateBirth2.style.backgroundColor="LIGHTCORAL";
					return false;
				}
			}
		</script>
</head>
<body>
	<div class="reg-main-content">
		<div class="reg-header">
		<h3>Registration From</h3>
        <div class="error-msg">
		<div id="errors">
			<?php echo $message; ?>
		</div></div>
	</div>
	<div class="container">
		<form id="form" method="post" action="registration.php" onSubmit="return validate();">
			<div class="form-group">
		    <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Full Name" value="<?php echo $fullName; ?>">
		    </div>
		    <div class="form-group">
		    <input type="text" class="form-control" id="userName" name="userName" placeholder="User Name" value="<?php echo $userName; ?>">
		    </div>
			<div class="form-group">
		    <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" value="<?php echo $email; ?>">
		    </div>
		    <div class="form-group">
		    <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?php echo $password; ?>">
		    </div>
		     <div class="form-group">
		    <input type="password" class="form-control" id="cPassword" name="cPassword" placeholder="Confirm Password" value="<?php echo $cPassword; ?>">
		    </div>
		    <div class="form-group">
		    <input type="text" class="form-control" id="pAddress" name="pAddress" placeholder="Postal Address" value="<?php echo $pAddress; ?>">
		    </div>
		    <div class="form-group">
		    <input type="text" class="form-control" id="pCode" name="pCode" placeholder="Post Code" value="<?php echo $pCode; ?>">
		    </div>
		    <div class="form-group">
		    <input type="text" class="form-control" id="yFnamber" name="yFnamber" placeholder="Phone Number" value="<?php echo $yFnamber; ?>">
		    </div>
		    <div class="dobgen">
		    	<div class="left">
		    		<div class="form-inline">
				    <div class="form-group">
				    	<label>Date of Birth</label>
				        <input type="Date" class="form-control" id="dateBirth" name="dateBirth" value="<?php echo $dateBirth; ?>">
				    </div></div>
		    	</div>
		    	<div class="right">
		    		<label>Gender</label>
		    		<label class="radio-inline">
				    <input type="radio" name="gender" value="male" id="gender" checked>Male
				    </label>
				    <label class="radio-inline">
				      <input type="radio" name="gender" value="female" id="gender">Female
				    </label>
		    	</div>
		    </div>
		    <div class="form-group">
		    <div class="submt-btn">
		    <input type="Submit" id="Submit" name="Submit" value="Sign Up"></div>
		</form>
		<div class="r_link">
	        <p>Already registered? Then <a href="index.php">Log-In</a></p>
	      </div>
		
	  </div>
   </div>
</body>
</html>