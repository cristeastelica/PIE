<?php
if (!file_exists('fpdf.php')) {
    echo " Place fpdf.php file in this directory before using this page. ";
    exit;
}

require('fpdf.php');
require('connection.php');
$database= new Connection();
$db=$database->openConnection();
$count="select * from rezultate";
ob_end_clean(); //    the buffer and never prints or returns anything.
ob_start(); // it starts buffering
$pdf = new FPDF();
$pdf = new FPDF();
$pdf->AddPage('L');
$width_cell = array(30, 30, 30, 30, 30,30,30,30,30);
$pdf->SetFont('Arial', 'B', 16);
$pdf->SetFillColor(193, 229, 252); // Background color of header
// Header starts /// 
//$pdf->Cell($width_cell[0], 10, 'Cod', 1, 0, 'C', true); // First header column
$pdf->Cell($width_cell[0], 10, 'Nume', 1, 0, 'C', true); // Second header column
$pdf->Cell($width_cell[1], 10, 'Prenume', 1, 0, 'C', true); // Third header column
$pdf->Cell($width_cell[2], 10, 'Clasa', 1, 0, 'C', true); // Fourth header column
$pdf->Cell($width_cell[3], 10, 'Scoala', 1, 0, 'C', true); // Third header column
$pdf->Cell($width_cell[4], 10, 'Judet', 1, 0, 'C', true);
$pdf->Cell($width_cell[5], 10, 'Localitate', 1, 0, 'C', true);
$pdf->Cell($width_cell[6], 10, 'Proba1', 1, 0, 'C', true);
$pdf->Cell($width_cell[7], 10, 'Proba2', 1, 0, 'C', true);
$pdf->Cell($width_cell[8], 10, 'Proba3', 1, 1, 'C', true);
//// header ends ///////
$pdf->SetFont('Arial', '', 12);
$pdf->SetFillColor(235, 236, 236); // Background color of header
$fill = false; // to give alternate background fill color to rows
/// each record is one row  ///
foreach ($db->query($count) as $row) {
   // $pdf->Cell($width_cell[0], 10, $row['cod'], 1, 0, 'C', $fill);
    $pdf->Cell($width_cell[0], 10, $row['nume_candidati'], 1, 0, 'C', $fill);
    $pdf->Cell($width_cell[1], 10, $row['prenume_candidati'], 1, 0, 'C', $fill);
    $pdf->Cell($width_cell[2], 10, $row['clasa_candidati'], 1, 0, 'C', $fill);
    $pdf->Cell($width_cell[3], 10, $row['scoala_candidati'], 1, 0, 'C', $fill);
    $pdf->Cell($width_cell[4], 10, $row['judet_candidati'], 1, 0, 'C', $fill);
    $pdf->Cell($width_cell[5], 10, $row['localitate_candidati'], 1, 0, 'C', $fill);
     $pdf->Cell($width_cell[6], 10, $row['localitate_candidati'], 1, 0, 'C', $fill);
      $pdf->Cell($width_cell[7], 10, $row['localitate_candidati'], 1, 0, 'C', $fill);
     $pdf->Cell($width_cell[8], 10, $row['localitate_candidati'], 1, 1, 'C', $fill);
    $fill = !$fill; // to give alternate background fill  color to rows
}
$currentyear = date("Y");
$currentmonth = date('M');
$filename="rezultate_$currentmonth$currentyear.pdf";
$pdf->Output($filename,'D');
ob_end_flush(); 
?>