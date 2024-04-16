<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register a new Profile</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">

				<form class="login100-form validate-form" action="registersingle.php" method="POST">
					<span class="login100-form-title p-b-43">
						Register a new record.
					</span>
<?php
									
									If (isset($_POST['submit'] )){
						
						?>
										<center>
										<div>	
										<a style="font-size:20px;color:green;">A new record has been created.</a>
										<br>
										</div>
										</center>
						<?php
						include 'connection.php';
						$name=$_POST['name'];
						$age=$_POST['age'];
						$contact=$_POST['contact'];
						$address=$_POST['address'];
						$query = "INSERT INTO details(Name, Age, ContactNo, Address) VALUES ( '".$name."', '".$age."', '".$contact."', '".$address."')"; 
					    mysqli_query($db, $query); 
					    $check_query = "SELECT * FROM details ORDER BY Code DESC LIMIT 1";
            			$result = mysqli_query($db, $check_query);
           			    $data= mysqli_fetch_assoc($result);
                        $code=$data['Code'];
                        echo "<script>window.open('singleprint.php?code=$code')</script>";
					}
?>
					
					<div class="wrap-input100 validate-input" data-validate = "Name is required.">
						<input class="input100" type="text" name="name">
						<span class="focus-input100"></span>
						<span class="label-input100">Name</span>
					</div>
					<br>
				
					<div class="wrap-input100 validate-input" data-validate="Age is required. ">
						<input class="input100" type="number" name="age" min="0" max="150">
						<span class="focus-input100"></span>
						<span class="label-input100">Age</span>
					</div>
					<br>

					<div class="wrap-input100 validate-input" data-validate="Contact No. is required.">
						<input class="input100" type="number" name="contact">
						<span class="focus-input100"></span>
						<span class="label-input100">Contact No.</span>
					</div>
					<br>

					<div class="wrap-input100 validate-input" data-validate="Address is required">
						<input class="input100" type="text" name="address">
						<span class="focus-input100"></span>
						<span class="label-input100">Address</span>
					</div>	
					<br>
					


					<style>
					.button-confirm {
					  background-color: #4CAF50; /* Green */
					  border: none;
					  padding: 16px 32px;
					  text-align: center;
					  text-decoration: none;
					  display: inline-block;
					  font-size: 16px;
					  margin: 4px 2px;
					  transition-duration: 0.4s;
					  cursor: pointer; 
					  color: white; 
					  border-radius: 6px;
					}

					.button-confirm:hover {
					  background-color: #355e3b;
					  color: white;
					}

				    </style>
					<div align="center">
						<button type="submit" name="submit" class="button-confirm">
							Confirm
						</button>
					</div>
					<br><br>
					<div class="container-login100-form-btn">
						<a href="index.php" class="login100-form-btn">
							Back
						</a>
					</div>
					
					
				</form>

				<div class="login100-more" style="background-image: url('images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>