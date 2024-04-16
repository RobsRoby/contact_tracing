<?php
require('fpdf/fpdf.php');


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
  
					$rawunbarcode= $_GET['code'];
					include 'connection.php';	
					   $check_query = "SELECT * FROM details WHERE Code='".$rawunbarcode."' LIMIT 1";
					   $result = mysqli_query($db, $check_query);
					   $data= mysqli_fetch_assoc($result);
					   $datacode=$data['Code'];
					   $dataname=$data['Name'];
					   $dataage=$data['Age'];
					   $datacontact=$data['ContactNo'];
					   $dataaddress=$data['Address'];







$pdf->SetFont('Arial','',14);
$pdf->Cell(0	,5,"$datacode",0,0,'C');
$pdf->Cell(0	,27,'',0,1);
$pdf->SetFont('Arial','',14);
$pdf->Cell(0	,0,"$dataname",0,0,'C');
$generator = new Picqer\Barcode\BarcodeGeneratorJPG();
file_put_contents('barcode\ '.$rawunbarcode.'.jpg', $generator->getBarcode("$rawunbarcode", $generator::TYPE_CODE_128));
$pdf->Image('C:\xampp\htdocs\Profile\main\barcode\ '.$rawunbarcode.'.jpg',69,40,70,0,'JPG');
$pdf->Cell(0	,20,'',0,1);


$pdf->SetFont('Arial','',14);
$pdf->Cell(0	,5,"$datacode",0,0,'C');
$pdf->Cell(0	,27,'',0,1);
$pdf->SetFont('Arial','',14);
$pdf->Cell(0	,0,"$dataname",0,0,'C');
$generator = new Picqer\Barcode\BarcodeGeneratorJPG();
file_put_contents('barcode\ '.$rawunbarcode.'.jpg', $generator->getBarcode("$rawunbarcode", $generator::TYPE_CODE_128));
$pdf->Image('C:\xampp\htdocs\Profile\main\barcode\ '.$rawunbarcode.'.jpg',69,87,70,0,'JPG');
$pdf->Cell(0	,20,'',0,1);



$pdf->SetFont('Arial','',14);
$pdf->Cell(0	,5,"$datacode",0,0,'C');
$pdf->Cell(0	,27,'',0,1);
$pdf->SetFont('Arial','',14);
$pdf->Cell(0	,0,"$dataname",0,0,'C');
$generator = new Picqer\Barcode\BarcodeGeneratorJPG();
file_put_contents('barcode\ '.$rawunbarcode.'.jpg', $generator->getBarcode("$rawunbarcode", $generator::TYPE_CODE_128));
$pdf->Image('C:\xampp\htdocs\Profile\main\barcode\ '.$rawunbarcode.'.jpg',69,134,70,0,'JPG');
$pdf->Cell(0	,20,'',0,1);












$pdf->Output();
include 'deletefiles.php';
?>
