<?php

use App\Libraries\PDF;

function test_fpdf() {
	$response = \Config\Services::response();

	$pdf = new PDF();

	# $pdf = new FPDF('P', 'mm', 'A4');
	# $pdf = new FPDF('L', 'mm', 'A4');

	$pdf->AliasNbPages();

	$pdf->AddPage();

	$pdf->SetFont('Times', '', 12);

	for($i = 1; $i <= 50; $i++):
		$pdf->Cell(0, 10, utf8_decode('Imprimiendo línea número ') . $i, 0, 1);
	endfor;

	$response->setHeader('Content-Type', 'application/pdf');
	
	$pdf->Output('I', 'Archivo.pdf', true);
}
