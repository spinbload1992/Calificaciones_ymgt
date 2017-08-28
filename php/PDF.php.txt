<?php
	require("fpdf/fpdf.pht");
	$ejemplo=new FPDF();
	$ejemplo->AddPage();
	$ejemplo->SetFont("Times","I",18);
	$ejemplo->SetTextColor(32,45,87);
	$ejemplo->Cell(80,10,utf8_decode("ITQ"),1);
	$ejemplo->SetTextColor(0,0,0);
	$ejemplo->Cell(80,10,utf8_decode("Ingeniería en Sistemas"),1,1);
	$ejemplo->Cell(80,10,utf8_decode("Programacion Web II"),1);
	$ejemplo->OutPut();
?>