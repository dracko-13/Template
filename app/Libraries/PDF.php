<?php

namespace App\Libraries;

use Fpdf\Fpdf;

class PDF extends FPDF {

	function Header() {
		$this->Image('fpdf.gif', 10, 10, 30);
		$this->SetFont('Arial', 'B', 15);
		$this->Cell(80);
		$this->Cell(30, 10, 'Title', 0, 0, 'C');
		$this->Ln(20);
	}

	function Footer() {
		$this->SetY(-15);
		$this->SetFont('Arial', 'I', 8);
		$this->Cell(0, 10, utf8_decode('Página ' . $this->PageNo()) . '/{nb}', 0, 0, 'R');
	}

}
