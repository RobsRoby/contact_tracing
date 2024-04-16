<?php
include 'connection.php';
$output = '';
$today=date("Y-m-d");
if(isset($_POST["exportsingle"]))
{
 $code = $_POST['code'];
 $query = "SELECT * FROM details WHERE Code='".$code."' ";
 $result = mysqli_query($db, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" border="1px">    
                    <tr>  
                 <th>Code</th>  
                 <th>Name</th>
                 <th>Age</th>  
       					 <th>Contact No.</th>
       					 <th>Address</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                        <td>'.$row["Code"].'</td>  
       					<td>'.$row["Name"].'</td>  
       					<td>'.$row["Age"].'</td>
                <td>'.$row["ContactNo"].'</td>
                <td>'.$row["Address"].'</td>
    </tr>
   ';
  }
}
 $query = "SELECT * FROM history WHERE No='".$code."' ";
 $result = mysqli_query($db, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
                <tr></tr>  
                <tr><th>History</th></tr>  
                    <tr>  
                 <th>Date</th>  
                 <th>Cough</th>
                 <th>Colds</th>
                 <th>Fever</th>
                 <th>Sore Throat</th>
                 <th>Shortness of breath</th>
                 <th>Contacted with a COVID suspect</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                <td>'.$row["Date"].'</td>  
                <td>'.$row["Cough"].'</td>
                <td>'.$row["Colds"].'</td>
                <td>'.$row["Fever"].'</td>
                <td>'.$row["SoreThroat"].'</td>
                <td>'.$row["ShortnessOfBreath"].'</td>
                <td>'.$row["YorN"].'</td>
    </tr>
   ';
  } 

 }

 $query = "SELECT * FROM datefivepm WHERE No='".$code."' ";
 $result = mysqli_query($db, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
                <tr></tr>  
                <tr><th>5PM Mass</th></tr>  
                    <tr>  
                 <th>Date</th>  
                 <th>Seat</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                <td>'.$row["Date"].'</td>  
                <td>'.$row["Seat"].'</td>
    </tr>
   ';
  } 

 }
 $query = "SELECT * FROM datenineam WHERE No='".$code."' ";
 $result = mysqli_query($db, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
                <tr></tr>
                <tr><th>9AM Mass</th></tr>  
                    <tr>  
                 <th>Date</th>  
                 <th>Seat</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                <td>'.$row["Date"].'</td>  
                <td>'.$row["Seat"].'</td>
    </tr>
   ';
  } 

 }
  $query = "SELECT * FROM datesevenam WHERE No='".$code."' ";
 $result = mysqli_query($db, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
                <tr></tr>
                <tr><th>7AM Mass</th></tr>     
                    <tr>  
                 <th>Date</th>  
                 <th>Seat</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                <td>'.$row["Date"].'</td>  
                <td>'.$row["Seat"].'</td>
    </tr>
   ';
  } 

 }


  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename='.$today.' No.'.$code.' Record.xls');
  echo $output;
 
}







if(isset($_POST["exportall"]))
{
 $query = "SELECT * FROM details";
 $result = mysqli_query($db, $query);
 if(mysqli_num_rows($result) > 0)
 {
   while($row = mysqli_fetch_array($result))
  {
   $code= $row['Code'];
   $output .= '
    <table class="table" border="1px">  
                    <tr>  
                 <th>Code</th>  
                 <th>Name</th>
                 <th>Age</th>  
                 <th>Contact No.</th>
                 <th>Address</th>
                    </tr>
    <tr>  
                        <td>'.$row["Code"].'</td>  
                <td>'.$row["Name"].'</td>  
                <td>'.$row["Age"].'</td>
                <td>'.$row["ContactNo"].'</td>
                <td>'.$row["Address"].'</td>
    </tr>
   ';
  

 $query1 = "SELECT * FROM history WHERE No='".$code."' ";
 $result1 = mysqli_query($db, $query1);
 if(mysqli_num_rows($result1) > 0)
 {
  $output .= '
                <tr></tr>  
                <tr><th>History</th></tr>  
                    <tr>  
                 <th>Date</th>  
                 <th>Cough</th>
                 <th>Colds</th>
                 <th>Fever</th>
                 <th>Sore Throat</th>
                 <th>Shortness of breath</th>
                 <th>Contacted with a COVID suspect</th>
                    </tr>
  ';
  while($row1 = mysqli_fetch_array($result1))
  {
   $output .= '
    <tr>  
                <td>'.$row1["Date"].'</td>  
                <td>'.$row1["Cough"].'</td>
                <td>'.$row1["Colds"].'</td>
                <td>'.$row1["Fever"].'</td>
                <td>'.$row1["SoreThroat"].'</td>
                <td>'.$row1["ShortnessOfBreath"].'</td>
                <td>'.$row1["YorN"].'</td>
    </tr>
   ';
  } 

 }

 $query2 = "SELECT * FROM datefivepm WHERE No='".$code."' ";
 $result2 = mysqli_query($db, $query2);
 if(mysqli_num_rows($result2) > 0)
 {
  $output .= '
                <tr></tr>  
                <tr><th>5PM Mass</th></tr>  
                    <tr>  
                 <th>Date</th>  
                 <th>Seat</th>
                    </tr>
  ';
  while($row2 = mysqli_fetch_array($result2))
  {
   $output .= '
    <tr>  
                <td>'.$row2["Date"].'</td>  
                <td>'.$row2["Seat"].'</td>
    </tr>
   ';
  } 

 }
 $query3 = "SELECT * FROM datenineam WHERE No='".$code."' ";
 $result3 = mysqli_query($db, $query3);
 if(mysqli_num_rows($result3) > 0)
 {
  $output .= '
                <tr></tr>
                <tr><th>9AM Mass</th></tr>  
                    <tr>  
                 <th>Date</th>  
                 <th>Seat</th>
                    </tr>
  ';
  while($row3 = mysqli_fetch_array($result3))
  {
   $output .= '
    <tr>  
                <td>'.$row3["Date"].'</td>  
                <td>'.$row3["Seat"].'</td>
    </tr>
   ';
  } 

 }
  $query4 = "SELECT * FROM datesevenam WHERE No='".$code."' ";
 $result4 = mysqli_query($db, $query4);
 if(mysqli_num_rows($result4) > 0)
 {
  $output .= '
                <tr></tr>
                <tr><th>7AM Mass</th></tr>     
                    <tr>  
                 <th>Date</th>  
                 <th>Seat</th>
                    </tr>
  ';
  while($row4 = mysqli_fetch_array($result4))
  {
   $output .= '
    <tr>  
                <td>'.$row4["Date"].'</td>  
                <td>'.$row4["Seat"].'</td>
    </tr>
   ';
  } 

}

$output .= '
    <tr></tr>
    <tr></tr>
   ';

}

}
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename='.$today.' ALL Records.xls');
  echo $output;
 
}
?>