<?php

include_once("connectdb.php");
$query = "SELECT id,name,class,email FROM infomation";
mysqli_query($conn,"SET NAMES 'UTF8'");
$result = mysqli_query($conn, $query) or die("database error:" . mysqli_error($conn));

ob_start();
define ('FPDF_FONTPATH','font/');
require('libs/fpdf/fpdf.php');
$pdf = new FPDF('P','mm','A4');
$pdf->SetMargins(25.0,20.0,20.0);
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);
while ($field_info = mysqli_fetch_field($result)) {
$pdf->Cell(45,10,$field_info->name,0);
}
while($rows = mysqli_fetch_assoc($result)) {
$pdf->SetFont('Helvetica','',10);
$pdf->Ln();
foreach($rows as $column) {
$pdf->Cell(45,10,$column,0);
}
}
$pdf->Output('danhsach.pdf','I');

?>