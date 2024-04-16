<!DOCTYPE html>
<html lang="en">
<head>
	<title>Scan the Code...</title>
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
				<form class="login100-form validate-form" action="index.php" method="post">
					<span class="login100-form-title p-b-43">
						Scan the barcode to get started...
					</span>
<?php					
					If (isset($_POST['submit'] )){  
					include 'connection.php';
					$code = mysqli_real_escape_string($db, $_POST['code']);	
					   $check_query = "SELECT * FROM details WHERE Code='".$code."' LIMIT 1";
					   $result = mysqli_query($db, $check_query);
					   $numRow = mysqli_num_rows($result);
					   if($numRow > 0){
					   $data= mysqli_fetch_assoc($result);
					   $datacode=$data['Code'];


						   IF($code == $datacode){
	    				   header("Location:details.php?code=$code");
						   }else{
								?>
								<a class="txt1" style="color:red;">
									The code you entered does not exist.
								</a>
								<br>				
								<?php
						   }


					    }else{
							?>
							<a class="txt1" style="color:red;">
								The code you entered does not exist.
							</a>
							<br>				
							<?php
					   } 
					}
?>
					<div class="wrap-input100 validate-input" data-validate = "Code is required.">
						<input class="input100" type="text" name="code" autofocus="">
						<span class="focus-input100"></span>
						<span class="label-input100">Code</span>
					</div>
					
					<input type="submit" name="submit" hidden>

					
					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div>
							<a href="registersingle.php" class="txt1">
								Register a new record?
							</a>
						</div>
					</div>
					

					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							
						</span>
					</div>


					<div class="container-login100-form-btn">
						<a href="manage.php" class="login100-form-btn">
							Manage the Records
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