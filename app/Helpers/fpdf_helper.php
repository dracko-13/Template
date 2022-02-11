<?php

use Faker\Factory;

use App\ThirdParty\FPDF\FPDF;

function test_fpdf() {
	$db = \Config\Database::connect('default');

	$response = \Config\Services::response();

	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(40,10,'Hola mundo!');
	$response->setHeader('Content-Type', 'application/pdf');
	$pdf->Output();
}
