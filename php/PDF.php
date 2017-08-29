<?php
	require("fpdf/fpdf.pht");
	$ejemplo=new PDF();
	$ejemplo->AddPage();
	$ejemplo->SetFont("Times","I",18);
	$ejemplo->SetTextColor(32,45,87);
	$ejemplo->Cell(80,10,utf8_decode("ITQ"),1);
	$ejemplo->SetTextColor(0,0,0);
	$ejemplo->Cell(80,10,utf8_decode("Ingeniería en Sistemas"),1,1);
	$ejemplo->Cell(80,10,utf8_decode("Programacion Web II"),1);
	$ejemplo->OutPut();
	
    //Cabecera
	function Header()
    {
    // Logo
    $this->Image('logo_pb.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'Title',1,0,'C');
    // Salto de línea
    $this->Ln(20);
    }
	/ Creación del objeto de la clase heredada
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont('Times','',12);
	for($i=1;$i<=40;$i++)
	    $pdf->Cell(0,10,'Imprimiendo línea número '.$i,0,1);
	$pdf->Output();
	

?>

