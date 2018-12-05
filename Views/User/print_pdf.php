<?php

$pdf = new \AppData\Config\libs\fpdf\fpdf();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,10,'Imagenes',0,0,'C');
$pdf->ln();
$pdf->ln();
$pdf->SetFont('Arial','B',12);
$pdf->Cell(35,7,'Turismo-DG',0,0,'C');
$pdf->Cell(70,7,'',0,0,'C');
$pdf->Cell(35,7,'fecha',1,0,'C');
$pdf->Cell(50,7,date('d/m/Y'),1,0,'C');
//$pdf->Cell(190,6,date('h:i:s'),0,1,'L');
$pdf->ln();
$pdf->Cell(35,7,'Reporte',0,0,'C');
$pdf->Cell(70,7,'',0,0,'C');
$pdf->Cell(35,7,'Hora',1,0,'C');
$pdf->Cell(50,7,date('h:i:s'),1,0,'C');
$pdf->ln();
$pdf->Cell(35,7,'Lista de imagenes',0,0,'C');
$pdf->Cell(70,7,'',0,0,'C');
$pdf->Cell(35,7,'Generada por',1,0,'C');
$pdf->Cell(50,7,$_SESSION["nombre"],1,0,'C');
$pdf->ln();
$pdf->ln();
$pdf->ln();

$pdf->Cell(40,10,'contenido',0,0,'C');
$pdf->ln();
$pdf->SetFillColor(0,0,255);
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Arial','B',11);
$pdf->SetX(10);
$pdf->Cell(45,10,utf8_decode('Nombre'),1,0,'C','true');
$pdf->Cell(25,10,utf8_decode('Fecha'),1,0,'C', 'true');
$pdf->Cell(120,10,utf8_decode('descripcion'),1,0,'C', 'true');
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','B',9);

while($row=mysqli_fetch_row($datos))
{
    $pdf->ln();
    $pdf->SetX(10);
    $pdf->Cell(45,10,utf8_decode($row[1]),1,0,'C');
    $pdf->Cell(25,10,utf8_decode($row[2]),1,0,'C');
    $pdf->Cell(120,10,utf8_decode($row[4]),1,0,'C');
}
$pdf->Output();

