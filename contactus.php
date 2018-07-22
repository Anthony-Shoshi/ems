<?php
include 'lib/header.php';
?>
<?php 
$con = mysqli_connect("localhost","root","","event_management");
if ($_POST) {
	$cname = $_POST['cname'];
	$cemail = $_POST['cemail'];
	$cphone = $_POST['cphone'];
	$cmes = $_POST['cmes'];
if (isset($_POST['submit'])) {
	$query = "INSERT INTO contact VALUES ('','$cname','$cemail','$cphone','$cmes')";
$result = mysqli_query($con,$query);

}
}



 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
</head>
<body>
<div class="container">
<div class="box">
	<div class="row">
		<div class="col-lg-12">
			<hr>
				<h2 class="intro-text text-center">Contact
					<strong>ABC Events</strong>
				</h2>
			</hr>
		</div>
		<div class="col-md-8">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.852030019328!2d90.38005961456177!3d23.752655484588256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8afb693ff75%3A0x32051f5a37ac6420!2sDaffodil+International+Academy!5e0!3m2!1sen!2sbd!4v1527579656375" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col-md-3">
			<p>Phone Number: 
				<strong> 01985177810</strong>
			</p>
			<p>Email Address: 
				<strong> 1000496@daffodil.ac</strong>
			</p>
			<p>Facebook: 
				<strong>www.facebook.com/abcevents</strong>
			</p>
			<p>Address:
				<strong> 19/Monipuripara,Farmgate
				<br/>Tejgaon,Dhaka
				</strong>
			</p>
				<strong>
					<a class="navbar-brand" href="https://accounts.google.com/ServiceLogin/signinchooser?flowName=GlifWebSignIn&flowEntry=ServiceLogin">Mail
   					<img src="img/gmail.png" width="30" height="30" class="d-inline-block align-top" alt="">
 					</a>
				</strong>
				<br/>
				<strong>
					<a class="navbar-brand" href="https://www.facebook.com/">Facebook
   					<img src="img/facebook.png" width="30" height="30" class="d-inline-block align-top" alt="">
 					</a>
				</strong>
		</div>
	</div>
</div>
<div class="box">
<div class="row">
<div class="col-lg-12">
	<hr>
		<h2 class="intro-text text-center">Contact
			<strong>Form</strong>
		</h2>
	</hr>
	<p>
	The tongue advertises inside the physicist. The injustice chalks? The curry originates? A church cries on top of an inconsistent reward. A tour flies.The inverse packet picks the misunderstood signal. The girlfriend steams? The blast expires before a mud. The camp angle achieves the directive.The disastrous aircraft chews opposite the universal. Around the assistance purges a susceptible prisoner. A smashing stiff scraps the wealthy spiral. A herd reckons near a disturbance.When can an independence balance the ritual inheritance? A beef collates its personal lamp. The recipe steams! A strength disables an intercourse. 
	</p>
	<form action="" method="post">
		<div class="row">
			<div class="form-group col-lg-4">
				<label for="cname">Name</label>
				<input type="text" id="cname" name = "cname" class="form-control">
			</div>
			<div class="form-group col-lg-4">
				<label>Email</label>
				<input type="email" name = "cemail" class="form-control">
			</div>
			<div class="form-group col-lg-4">
				<label>Phone Number</label>
				<input type="text" name = "cphone" class="form-control">
			</div>
			<div class="form-group col-lg-12">
				<label>Message</label>
				<textarea class="form-control" name = "cmes" rows="6"></textarea>
			</div>
			<div class="form-group col-lg-4">
				<input type="hidden" name="save" value="contact">
				<button type="submit" name="submit" class="btn btn-success">Submit</button>
			</div>
		</div>
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