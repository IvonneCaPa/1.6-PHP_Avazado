<?php

require_once 'vendor/autoload.php';

// Crea una nueva instancia de TCPDF
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Establece la información del documento
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Tu nombre');
$pdf->SetTitle('Ejemplo de PDF con TCPDF');
$pdf->SetSubject('Ejemplo de PDF');
$pdf->SetKeywords('TCPDF, PDF, ejemplo');

// Establece los márgenes
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

// Establece la fuente
$pdf->SetFont('helvetica', '', 12);

// Añade una página
$pdf->AddPage();

// Escribe contenido en el PDF
$pdf->WriteHTML('<h1>¡Hola, mundo!</h1><p>Este es un ejemplo de PDF generado con TCPDF.</p>');

// Genera el PDF y lo envía al navegador
$pdf->Output('ejemplo.pdf', 'I'); // 'I' para mostrar en el navegador, 'D' para descargar
?>