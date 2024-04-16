<?php
require('fpdf/fpdf.php');
ini_set('max_execution_time', '300');


//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();

//set font to arial, bold, 14pt

//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(59	,5,'',0,1);//end of line

//set font to arial, regular, 12pt

$pdf->Cell(59	,5,'',0,1);//end of line

$pdf->Cell(130	,5,'',0,0);
$pdf->Cell(59	,5,'',0,1);//end of line

$pdf->Cell(59	,5,'',0,1);//end of line

$pdf->Cell(130	,5,'',0,0);
$pdf->Cell(25	,5,"",0,0);
$pdf->Cell(34	,5,'',0,1);//end of line

//add dummy cell at beginning of each line for indentation
require "vendor/autoload.php";
  
include 'connection.php';     
          $sql = "SELECT * FROM details  ORDER BY Name ASC";
          $search_Result = mysqli_query($db, $sql);
$x = 0;

while($row=mysqli_fetch_assoc($search_Result)) {
$name=$row['Name'];
$code=$row['Code'];

 $y=$x+=40;
 if ($y == 240 ){
 	$x=0;  

 $pdf->SetFont('Arial','',12);
$pdf->Cell(0	,5,"$code",0,0,'C');
$pdf->Cell(90	,5,'',0,1);
$pdf->Cell(90	,5,'',0,1);
$pdf->Cell(90	,5,'',0,1);
$pdf->Cell(90	,5,'',0,1);
$pdf->Cell(90	,5,'',0,1);
$pdf->Cell(90	,2,'',0,1);

$generator = new Picqer\Barcode\BarcodeGeneratorJPG();
file_put_contents('barcode\ '.$code.'.jpg', $generator->getBarcode("$code", $generator::TYPE_CODE_128));
$pdf->Image('C:\xampp\htdocs\Profile\main\barcode\ '.$code.'.jpg',70,$y,70,0,'JPG');
$pdf->SetFont('Arial','',14);
$pdf->Cell(0	,0,"$name",0,0,'C');  


$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,'',0,1);
$pdf->Cell(90	,5,'',0,1);
$pdf->Cell(90	,5,'',0,1);
$pdf->Cell(90	,5,'',0,1);
$pdf->Cell(90	,5,'',0,1);
$pdf->Cell(90	,5,'',0,1);
$pdf->Cell(90	,4,'',0,1);
$pdf->Cell(90	,1,'',0,1);
 }else{

$pdf->SetFont('Arial','',12);
$pdf->Cell(0	,5,"$code",0,0,'C');
$pdf->Cell(90	,5,'',0,1);
$pdf->Cell(90	,5,'',0,1);
$pdf->Cell(90	,5,'',0,1);
$pdf->Cell(90	,5,'',0,1);
$pdf->Cell(90	,5,'',0,1);
$pdf->Cell(90	,2,'',0,1);
$generator = new Picqer\Barcode\BarcodeGeneratorJPG();
file_put_contents('barcode\ '.$code.'.jpg', $generator->getBarcode("$code", $generator::TYPE_CODE_128));
$pdf->Image('C:\xampp\htdocs\Profile\main\barcode\ '.$code.'.jpg',70,$y,70,0,'JPG');
$pdf->SetFont('Arial','',14);
$pdf->Cell(0	,0,"$name",0,0,'C');  


$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,'',0,1);
$pdf->Cell(90	,5,'',0,1);
$pdf->Cell(90	,3,'',0,1);

 }
 
 






}

$pdf->Output();
include 'deletefiles.php';
?>
