<!DOCTYPE html>
<html lang="en">
<head>
	<title>Profile Details</title>
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
	<style>
					
					.btn-group .button {
					  background-color: #4CAF50; /* Green */
					  border: none;
					  color: white;
					  padding: 15px 32px;
					  text-align: center;
					  text-decoration: none;
					  display: inline-block;
					  font-size: 16px;
					  cursor: pointer;
					  float: left;
					  transition-duration: 0.4s;
					  border-radius: 1px;
					}

					.btn-group .button:hover {
					  background-color: #3e8e41;
					}

					.button1 {
					  background-color: #4CAF50; /* Green */
					  border: none;
					  color: white;
					  padding: 15px 32px;
					  text-align: center;
					  text-decoration: none;
					  display: inline-block;
					  font-size: 16px;
					  margin: 4px 2px;
					  cursor: pointer;
					  -webkit-transition-duration: 0.4s; /* Safari */
					  transition-duration: 0.4s;
					  border-radius: 4px;
					}
					.button1:hover {
					  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
					}
					select {
				    display: block;
				    font-size: 16px;
				    font-family: sans-serif;
				    font-weight: 700;
				    color: #444;
				    line-height: 1.3;
				    padding: .6em 1.4em .5em .8em;
				    width: 100%;
				    max-width: 100%; /* useful when width is set to anything other than 100% */
				    box-sizing: border-box;
				    margin: 0;
				    border: 1px solid #aaa;
				    box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
				    border-radius: .5em;
				    -moz-appearance: none;
				    -webkit-appearance: none;
				    appearance: none;
				    background-color: #fff;
				   }
</style>
<?php					

					include 'connection.php';
					$code = mysqli_real_escape_string($db, $_GET['code']);	
					   $check_query = "SELECT * FROM details WHERE Code='".$code."' LIMIT 1";
					   $result = mysqli_query($db, $check_query);
					   $data= mysqli_fetch_assoc($result);
					   $datacode=$data['Code'];
					   $dataname=$data['Name'];
					   $dataage=$data['Age'];
					   $datacontact=$data['ContactNo'];
					   $dataaddress=$data['Address'];
					     
		
?>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="details.php?code=<?php echo $datacode;?>" method="post">
					<span class="login100-form-title p-b-43">
						Details
					</span>

					<?php require "vendor/autoload.php";

                            $Bar = new Picqer\Barcode\BarcodeGeneratorHTML();
                            $code = $Bar->getBarcode($datacode, $Bar::TYPE_CODE_128);
                            ?>
                            <center><label><?php echo $code;?></label></center>
					<br>
					<div class="wrap-input100">
						<input class="input100" type="text" name="name" value="<?php echo $dataname;?>" disabled>
						<span class="focus-input100"></span>
					</div>
					<br>
					<div class="wrap-input100">
						<input class="input100" type="text" name="age" value="<?php echo $dataage;?>" disabled>
						<span class="focus-input100"></span>
					</div>
					<br>
					<div class="wrap-input100">
						<input class="input100" type="text" name="contact" value="<?php echo $datacontact;?>" disabled>
						<span class="focus-input100"></span>
					</div>
					<br>
					<div class="wrap-input100">
						<input class="input100" type="text" name="address" value="<?php echo $dataaddress;?>" disabled>
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div>
							<a href="singleprint.php?code=<?php echo $datacode;?>" target="_blank" class="txt1">
								Reprint the Barcode?
							</a>
						</div>
					</div>

					<br>
<?php
					$today=date("l jS \of F Y ");
					If (isset($_POST['7am'] )){
						$seat = $_POST['seat'];
						$yesorno = $_POST['yesorno'];
						
						if(empty($_POST['cough'])){
							$cough="NO";
						}else{
							$cough="YES";
						}

						If(empty($_POST['colds'])){
							$colds="NO";
						}else{
							$colds="YES";
						}

						If(empty($_POST['fever'])){
							$fever="NO";
						}else{
							$fever="YES";
						}

						If(empty($_POST['sorethroat'])){
							$sorethroat="NO";
						}else{
							$sorethroat="YES";
						}						

						If(empty($_POST['shortnessofbreath'])){
							$shortnessofbreath="NO";
						}else{
							$shortnessofbreath="YES";
							
						}


						?>
										<center>
										<div>	
										<a style="font-size:20px;color:green;">The attendance in 7AM has been recorded.</a>
										<br><br>
										<a style="font-size:30px;">Your Seat is in <font color="red"><?php echo $seat;?></font>.</a>
										<br><br>
										<a style="font-size:20px;color:black;">Date Recorded:<br><?php echo $today;?></a>
										</div>
										</center>
										<br><br><br><br>
						<?php

						$query = "INSERT INTO datesevenam (No, Date, Seat) VALUES ('".$datacode."', '".$today."', '".$seat."')"; 
					    mysqli_query($db, $query);  
					    $query2 = "INSERT INTO history (No, Date, Cough, Colds, Fever, SoreThroat, ShortnessOfBreath, YorN) VALUES ('$datacode', '$today', '$cough', '$colds', '.$fever', '$sorethroat', '$shortnessofbreath', '$yesorno')"; 
					    mysqli_query($db, $query2);  
						}elseIf (isset($_POST['9am'])){  
						$seat = $_POST['seat'];
						$yesorno = $_POST['yesorno'];
						if(empty($_POST['cough'])){
							$cough="NO";
						}else{
							$cough="YES";
						}

						If(empty($_POST['colds'])){
							$colds="NO";
						}else{
							$colds="YES";
						}

						If(empty($_POST['fever'])){
							$fever="NO";
						}else{
							$fever="YES";
						}

						If(empty($_POST['sorethroat'])){
							$sorethroat="NO";
						}else{
							$sorethroat="YES";
						}						

						If(empty($_POST['shortnessofbreath'])){
							$shortnessofbreath="NO";
						}else{
							$shortnessofbreath="YES";
						}
					   ?>
										<center>
										<div>	
										<a style="font-size:20px;color:green;">The attendance in 9AM has been recorded.</a>
										<br><br>
										<a style="font-size:30px;">Your Seat is in <font color="red"><?php echo $seat;?></font>.</a>
										<br><br>
										<a style="font-size:20px;color:black;">Date Recorded:<br><?php echo $today;?></a>
										</div>
										</center>
										<br><br><br><br>
					   <?php
					   $query = "INSERT INTO datenineam (No, Date, Seat) VALUES ('".$datacode."', '".$today."', '".$seat."')"; 
					    mysqli_query($db, $query);
					   $query2 = "INSERT INTO history (No, Date, Cough, Colds, Fever, SoreThroat, ShortnessOfBreath, YorN) VALUES ('$datacode', '$today', '$cough', '$colds', '.$fever', '$sorethroat', '$shortnessofbreath', '$yesorno')"; 
					    mysqli_query($db, $query2);     
					}elseIf (isset($_POST['5pm'] )){
						$seat = $_POST['seat'];
						$yesorno = $_POST['yesorno'];
						if(empty($_POST['cough'])){
							$cough="NO";
						}else{
							$cough="YES";
						}

						If(empty($_POST['colds'])){
							$colds="NO";
						}else{
							$colds="YES";
						}

						If(empty($_POST['fever'])){
							$fever="NO";
						}else{
							$fever="YES";
						}

						If(empty($_POST['sorethroat'])){
							$sorethroat="NO";
						}else{
							$sorethroat="YES";
						}						

						If(empty($_POST['shortnessofbreath'])){
							$shortnessofbreath="NO";
						}else{
							$shortnessofbreath="YES";
						}
						?>  
										<center>
										<div>	
										<a style="font-size:20px;color:green;">The attendance in 5PM has been recorded.</a>
										<br><br>
										<a style="font-size:30px;">Your Seat is in <font color="red"><?php echo $seat;?></font.></a>
										<br><br>
										<a style="font-size:20px;color:black;">Date Recorded:<br><?php echo $today;?></a>
										</div>
										</center>
										<br><br><br><br>
						<?php
						$query = "INSERT INTO datefivepm (No, Date, Seat) VALUES ('".$datacode."', '".$today."', '".$seat."')"; 
					    mysqli_query($db, $query);  
						$query2 = "INSERT INTO history (No, Date, Cough, Colds, Fever, SoreThroat, ShortnessOfBreath, YorN) VALUES ('$datacode', '$today', '$cough', '$colds', '.$fever', '$sorethroat', '$shortnessofbreath', '$yesorno')"; 
					    mysqli_query($db, $query2);   
					}else{
					?>
					<span class="login100-form-title p-b-15">
						History or Symptoms
					</span>
					<style>
					table {
					  border-collapse: collapse;
					  width: 100%;

					}

					th, td {
					  text-align: left;
					  padding: 8px;
					}

					tr:nth-child(even){ background-color: #f2f2f2}

					th {
					  background-color: #4CAF50;
					  color: white;
					}
					</style>
					<center>
					<table>
						<tr><th><p style="color: white;" align="center">Are you experiencing any of the following? <b>Check all that apply</b></p></th>
						    <th><p style="color: white;" align="center">Have you been in contact with COVID-19 suspect, probable, or positive case in the past 14 days?</p><br></th>
						</tr>
						
						<tr>
							<td><p>&nbsp<input type="checkbox" name="cough"> Cough</p></td>
							<td><p>&nbsp<input type="radio" name="yesorno" value="YES" required> Yes</p> </td>
						</tr>
						<tr>
							<td><p>&nbsp<input type="checkbox" name="colds"> Colds</p></td>
							<td><p>&nbsp<input type="radio" name="yesorno" value="NO">No</p> </td>
						</tr>
						<tr>
							<td><p>&nbsp<input type="checkbox" name="fever"> Fever</p></td>
							<td></td>
						</tr>
						<tr>
							<td><p>&nbsp<input type="checkbox" name="sorethroat"> Sore Throat</p></td>
							<td></td>
						</tr>
						<tr>
							<td><p>&nbsp<input type="checkbox" name="shortnessofbreath"> Shortness of Breath</p></td>
							<td></td>
						</tr>
					</table>
					</center>
					<br><br>
					<!-- Seat -->
					<center>
					<select name="seat" required>
					  <option value='' selected disabled>Select a Seat</option>
					  <OPTGROUP  label="D Section">
					  <?php
					    for($x=1; $x<= 20;$x++){
					  	ECHO "<option value='D".$x."'>D".$x."</option>";
					    }

					  ?>
					  </OPTGROUP>
					  <OPTGROUP  label="C Section">
					  <?php
					    for($x=1; $x<= 20;$x++){
					  	ECHO "<option value='C".$x."'>C".$x."</option>";
					    }
					    
					  ?>
					  </OPTGROUP>
					  <OPTGROUP  label="B Section">
					  <?php
					    for($x=1; $x<= 20;$x++){
					  	ECHO "<option value='B".$x."'>B".$x."</option>";
					    }
					    
					  ?>
					  </OPTGROUP>
					  <OPTGROUP  label="A Section">
					  <?php
					    for($x=1; $x<= 20;$x++){
					  	ECHO "<option value='A".$x."'>A".$x."</option>";
					    }
					    
					  ?>
					  </OPTGROUP>
					</select>
					</center>
					<!-- Image -->
					<div>
					<img src="images/map.jpg" width="100%">
					</div>

					<br>
					<!-- Button -->
					<div class="btn-group">
					  <button name="7am" class="button" id="button">7am Mass </button>
					  <button name="9am" class="button" id="btn1">9am Mass </button>
					  <button name="5pm" class="button" id="btn2">5pm Mass </button>	
					</div>
					<br><br><br><br><br><br>
<?php } ?>
					
					<!-- Back Button -->	
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