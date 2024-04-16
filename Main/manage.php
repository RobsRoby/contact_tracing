<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Profiles</title>
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

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
   
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <style>
          .button-confirm {
            background-color: #6675df; /* Green */
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
            text-decoration:none;
           
          }

          .button-confirm:hover {
            background-color: black;
            color: #6675df;
            text-decoration:none;
          }

            </style>
          <div align="center">
            <a href="index.php" class="button-confirm">
              Back
            </a>

            
          </div>
          <!-- Sidebar Toggle (Topbar) -->
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Records List</h1>
          <div class="row">
            <div class="col-lg-9">
          <!-- DataTales Example -->
          <div class="card shadow mb-3">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
            <style>
                .dataTables tr{
                    cursor: pointer;transition: all .25s ease-in-out;
                }
                .dataTables tr:hover{background-color: #ddd;}
            </style>
              <table class="table table-bordered dataTables" name="dataTables" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                  <thead>
                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 57px;">No.</th><th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 57px;">Name</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 62px;">Age</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 51px;">Contact No.</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 51px;">Address</th></tr>
                  </thead>
                  <tbody>
 
       <?php
      include 'connection.php';     
          $sql = "SELECT * FROM details  ORDER BY Name ASC";
          $search_Result = mysqli_query($db, $sql);
      ?>
      <?php while ($row=mysqli_fetch_assoc($search_Result)){ ?>                     
                        
                        <tr>
                            
                            <td><?php echo $row['Code']; ?></td>
                            <td><?php echo $row['Name']; ?></td>
                            <td><?php echo $row['Age']; ?></td>
                            <td><?php echo $row['ContactNo']; ?></td>
                            <td><?php echo $row['Address']; ?></td>           
                          </tr>
      <?php } ?> 
                        </tbody>
                      </table>
      <BR><BR><BR>
      <CENTER>
        <style>
          .btn-group .button {
            background-color: #cc8400; /* Green */
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
            background-color: #996300;
            color: white;
          }

          .btn-group .button2 {
            background-color: #B22222; /* Green */
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

          .btn-group .button2:hover {
            background-color: #800000 ;
            color: white;


          }

          .btn-group .button3 {
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

          .btn-group .button3:hover {
            background-color: #355e3b;
            color: white;
          }

          .blue {
            background-color: #2980B9; 
            border: none;
            color: white;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            float: left;
            transition-duration: 0.4s;
            border-radius: 1px;
          }

          .blue:hover {
            background-color: #154360;
            color: white;
          }

          </style>

<?php
		include 'connection.php';
		If (isset($_POST['update'] )){
  		  
		    $code= $_POST['code'];
			$name=$_POST['name'];
			$age=$_POST['age'];
			$contact=$_POST['contact'];
			$address=$_POST['address'];
			$query = "UPDATE details SET Name='$name', Age='$age' , ContactNo='$contact', Address='$address' WHERE Code='$code' "; 
			mysqli_query($db, $query); 
			echo "<meta http-equiv='refresh' content='0'>";
					
       }
          If (isset($_POST['delete'] )){
  		  
  		  $code= $_POST['code'];
          $query = "DELETE FROM details WHERE Code='$code' "; 
            mysqli_query($db, $query);  
            $query = "DELETE FROM datesevenam WHERE Code='$code' "; 
            mysqli_query($db, $query);  
            $query = "DELETE FROM datenineam WHERE Code='$code' "; 
            mysqli_query($db, $query);  
            $query = "DELETE FROM datefivepm WHERE Code='$code' "; 
            mysqli_query($db, $query); 
            $query = "DELETE FROM history WHERE No='$code' "; 
            mysqli_query($db, $query);  
		  
		  echo "<meta http-equiv='refresh' content='0'>";

		  } 

          If (isset($_POST['deleteall'] )){
  
  ?>
          <center>
          <div> 
          <a style="font-size:20px;color:red;">All records have been deleted.</a>
          <br>
          </div>
          </center>
<?php
          $query = "DELETE FROM details"; 
            mysqli_query($db, $query);  
            $query = "DELETE FROM datesevenam"; 
            mysqli_query($db, $query);  
            $query = "DELETE FROM datenineam"; 
            mysqli_query($db, $query);  
            $query = "DELETE FROM datefivepm"; 
			      mysqli_query($db, $query);
			      $query = "DELETE FROM history"; 
            mysqli_query($db, $query);
      
          echo "<meta http-equiv='refresh' content='0'>";   
} ?>
      <form action="manage.php" method="POST">    
      <div class="btn-group">
            <a target="_BLANK" href="multipleprint.php" name="printall" class="button" id="btn"  onclick="return confirm('All records are about to print.')">Print All</a>
            <button name="deleteall" class="button2" id="btn1"  onclick="return confirm('Are you sure you want to delete these records?')">Delete All</button>
      </div>
      </form>
      </CENTER>
      <br><br>
      <?PHP
      $sql = "SELECT * FROM details  ORDER BY Name ASC";
      $result = mysqli_query($db, $sql);
      $numRow = mysqli_num_rows($result);
             if($numRow > 0){ ?>      
      <form action="export.php" method="POST" target="_BLANK">
            <button type="submit" class="blue" name="exportall">
              Generate .xls for all records
            </button>
            <input type="hidden" name="code" value="<?php echo $code; ?>">
      </form>
      <?PHP } ?>
       <script>
                var table = document.getElementById('dataTable');
                
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                      document.getElementById("code").value = this.cells[0].innerHTML;
                      document.getElementById("datacode").submit();
                    };
                }
       </script>

               <form  method="POST" id="datacode" action="manage.php">  
                  <input type="hidden" name="code" id="code">
                  <input type="hidden" name="data" value="data" id="data">
                </form>
                
      <br><br>
              </div>
            </div>
         </div>

        <?php  If (isset($_POST['data'] )){
                  $code = $_POST['code'];  
                 ?>
            <div class="card shadow mb-3">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">History</h6>
                </div>
                
            <div class="card-body">
              <div class="table-responsive">
              <table class="table table-bordered dataTable" name="dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                  <thead>
                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 57px;">No.</th><th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 57px;">Date</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 62px;">Cough</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 51px;">Colds</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 51px;">Fever</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 51px;">Sore Throat</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 51px;">Shortness of Breath</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 51px;">Contacted with a COVID Suspect</th></tr>
                  </thead>
                  <tbody>
 
       <?php
      include 'connection.php';     
          $sql = "SELECT * FROM history WHERE No=".$code." ORDER BY Date ASC";
          $search_Result = mysqli_query($db, $sql);
      ?>
      <?php while ($row=mysqli_fetch_assoc($search_Result)){ ?>                     
                        
                        <tr>
                            
                            <td><?php echo $row['No']; ?></td>
                            <td><?php echo $row['Date']; ?></td>
                            <td><?php echo $row['Cough']; ?></td>
                            <td><?php echo $row['Colds']; ?></td>
                            <td><?php echo $row['Fever']; ?></td>
                            <td><?php echo $row['SoreThroat']; ?></td>
                            <td><?php echo $row['ShortnessOfBreath']; ?></td>
                            <td><?php echo $row['YorN']; ?></td>           
                          </tr>
      <?php } ?> 
                        </tbody>
                      </table>
              </div>
            </div>
         </div>
      <?php } ?> 
      

   <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Edit Profile:</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <?php         

          include 'connection.php';
          If (isset($_POST['data'] )){
             $code = mysqli_real_escape_string($db, $_POST['code']);  
             $check_query = "SELECT * FROM details WHERE Code='".$code."' LIMIT 1";
             $result = mysqli_query($db, $check_query);
             $data= mysqli_fetch_assoc($result);
             $datacode=$data['Code'];
             $dataname=$data['Name'];
             $dataage=$data['Age'];
             $datacontact=$data['ContactNo'];
             $dataaddress=$data['Address'];
          
    
?>
            
                 <form action="manage.php" method="POST">
                 <input type="hidden" name="code" value="<?php echo $datacode;?>">
                 <div class="wrap-input100 validate-input" data-validate = "Name is required.">
            <input class="input100"  type="text" name="name" value="<?php echo $dataname;?>">
            <span class="focus-input100">Name</span>
          </div>
          <br>
         <div class="wrap-input100 validate-input" data-validate="Age is required. ">
            <input class="input100" type="number" name="age" min="0" max="150" value="<?php echo $dataage;?>">
            <span class="focus-input100">Age</span>
          </div>
          <br>
          <div class="wrap-input100 validate-input" data-validate="Contact No. is required. ">
            <input class="input100" type="number" name="contact" value="<?php echo $datacontact;?>">
            <span class="focus-input100">Contact No.</span>
          </div>
          <br>
         <div class="wrap-input100 validate-input" data-validate="Address is required. ">
            <input class="input100" type="text" name="address" value="<?php echo $dataaddress;?>">
            <span class="focus-input100">Address</span>
          </div>
    
            <center>
          <div class="btn-group" align="center">
            <button type="submit" class="button3" name="update" onclick="return confirm('You are about to update this record.')" >
              Update
            </button>
            <button type="submit" class="button2" name="delete"  onclick="return confirm('Are you sure you want to delete this record?')" >
              Delete
            </button>
            
          </div>
			</center>
      <br><br>

      
               </form>
      <form action="export.php" method="POST" target="_BLANK">
            <button type="submit" class="blue" name="exportsingle">
              Generate .xls
            </button>
            <input type="hidden" name="code" value="<?php echo $code; ?>">
      </form>
            <br><br>

<?php } else{ ?>

 <div align="center">
            <a>Select a Profile to get started.</a>          
  </div>
<?php } ?>
                </div>
              
              </div>





          </div>
  <div class="col-lg-3">

         <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <?php  If (isset($_POST['data'] )){
                  $code = $_POST['code'];  
                 ?>
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Attendance List</h6>
                </div>
                <div class="card-body">
                  <h6 class="m-0 font-weight-bold text-primary">7am Mass</h6>
                    <table class="table table-bordered dataTable" name="dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                  <thead>
                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 57px;">Date</th><th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 57px;">Seat</th></tr>
                  </thead>
                  <tbody>
 
                   <?php
                  
                  include 'connection.php';   
                      $sql = "SELECT * FROM datesevenam WHERE No='".$code."' ORDER BY Date ASC";
                      $resultdatesix = mysqli_query($db, $sql);
                      
                  ?>
                  <?php while ($row=mysqli_fetch_assoc($resultdatesix)){ ?>                     
                                    <tr>
                                        <td><?php echo $row['Date']; ?></td>
                                        <td><?php echo $row['Seat']; ?></td>
                                      </tr>
                  <?php }
                   ?> 
                  </tbody>
                    </table>
                   <br><br>

                  <h6 class="m-0 font-weight-bold text-primary">9am Mass</h6>
                    <table class="table table-bordered dataTable" name="dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                  <thead>
                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 57px;">Date</th><th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 57px;">Seat</th></tr>
                  </thead>
                  <tbody>
 
                   <?php
                  include 'connection.php';   
                      $sql = "SELECT * FROM datenineam WHERE No='".$code."' ORDER BY Date ASC";
                      $resultdatenine = mysqli_query($db, $sql);
                      
                  ?>
                  <?php while ($row=mysqli_fetch_assoc($resultdatenine)){ ?>                     
                                    <tr>
                                        <td><?php echo $row['Date']; ?></td>
                                        <td><?php echo $row['Seat']; ?></td>
                                      </tr>
                  <?php }
                   ?> 
                  </tbody>
                    </table>
                    <br><br>
                    <h6 class="m-0 font-weight-bold text-primary">5pm Mass</h6>
                  <table class="table table-bordered dataTable" name="dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                  <thead>
                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 57px;">Date</th><th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 57px;">Seat</th></tr>
                  </thead>
                  <tbody>
 
                   <?php
                  include 'connection.php';   
                      $sql = "SELECT * FROM datefivepm WHERE No='".$code."' ORDER BY Date ASC";
                      $resultdatefive = mysqli_query($db, $sql);
                      
                  ?>
                  <?php while ($row=mysqli_fetch_assoc($resultdatefive)){ ?>                     
                                    <tr>
                                        <td><?php echo $row['Date']; ?></td>
                                        td><?php echo $row['Seat']; ?></td>
                                      </tr>
                  <?php }
                  }
                   ?> 
                  </tbody>
                    </table>
                </div>
              </div>

              




                 

              </div>

              
           
              
               


            </div>




        </div>

        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
