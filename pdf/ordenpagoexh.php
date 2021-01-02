<?php
//============================================================+
// File name   : example_004.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 004 for TCPDF class
//               Cell stretching
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Cell stretching
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 004');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 004', PDF_HEADER_STRING);
$pdf->setPrintHeader(false);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

$pdf->SetFont('helvetica', '', 12);

// add a page
$pdf->AddPage();

$txt = 'Concepto: Pago de exhumación.';
$pdf->Write(0, $txt, '', 0, '', true, 0, false, false, 0);

$txt = '';
$pdf->Write(0, $txt, '', 0, '', true, 0, false, false, 0);

$txt = '';
$pdf->Write(0, $txt, '', 0, '', true, 0, false, false, 0);

$txt = '';
$pdf->Write(0, $txt, '', 0, '', true, 0, false, false, 0);

$txt = '';
$pdf->Write(0, $txt, '', 0, '', true, 0, false, false, 0);

$txt = '';
$pdf->Write(0, $txt, '', 0, '', true, 0, false, false, 0);

$txt = '';
$pdf->Write(0, $txt, '', 0, '', true, 0, false, false, 0);

$txt = 'Cuenta                       Descripción                        Importe                       Monto';
$pdf->Write(0, $txt, '', 0, '', true, 0, false, false, 0);

$txt = '';
$pdf->Write(0, $txt, '', 0, '', true, 0, false, false, 0);

$txt = '4303020000             Pago para realizar              $0000.00                     $000.00
                                 una exhumación';
$pdf->Write(0, $txt, '', 0, '', true, 0, false, false, 0);

$txt = '';
$pdf->Write(0, $txt, '', 0, '', true, 0, false, false, 0);

$txt = 'Cero pesos 32/100 M.N.                                                                         $000.00';
$pdf->Write(0, $txt, '', 0, '', true, 0, false, false, 0);

$txt = '';
$pdf->Write(0, $txt, '', 0, '', true, 0, false, false, 0);

$txt = '';
$pdf->Write(0, $txt, '', 0, '', true, 0, false, false, 0);

$txt = '';
$pdf->Write(0, $txt, '', 0, '', true, 0, false, false, 0);

$txt = '';
$pdf->Write(0, $txt, '', 0, '', true, 0, false, false, 0);

$txt = '                       Formuló:                                                        Autorizó:';
$pdf->Write(0, $txt, '', 0, '', true, 0, false, false, 0);


$txt = '';
$pdf->Write(0, $txt, '', 0, '', true, 0, false, false, 0);

$txt = '';
$pdf->Write(0, $txt, '', 0, '', true, 0, false, false, 0);

$txt = '______________________________               _________________________';
$pdf->Write(0, $txt, '', 0, '', true, 0, false, false, 0);

$txt = '                 MARIO ALBERTO                                            ANA LAURA ';
$pdf->Write(0, $txt, '', 0, '', true, 0, false, false, 0);

$txt = '                 GOMEZ NOCELO                                      RENDON RAMIREZ';
$pdf->Write(0, $txt, '', 0, '', true, 0, false, false, 0);  
/*
 * setAlpha() gives transparency support. You can set the
 * alpha channel from 0 (fully transparent) to 1 (fully
 * opaque). It applies to all elements (text, drawings,
 * images).
 */

$pdf->SetLineWidth(2);


// set alpha to semi-transparency
$pdf->SetAlpha(0.3);


$pdf->Image('TCPDF-main/examples/images/temixco.jfif', 30, 20, 150, 150, '', 'http://www.tcpdf.org', '', true, 72);

$pdf->SetAlpha(1);

$pdf->Image('TCPDF-main/examples/images/logo.PNG', 10, 10, 20, 20, '', 'http://www.tcpdf.org', '', true, 72);

$pdf->SetAlpha(1);

$pdf->Image('TCPDF-main/examples/images/1.PNG', 80, 5, 50, 20, '', 'http://www.tcpdf.org', '', true, 72);

$pdf->SetAlpha(1);

$pdf->Image('TCPDF-main/examples/images/2.PNG', 110, 25, 100, 5, '', 'http://www.tcpdf.org', '', true, 72);

// restore full opacity
$pdf->SetAlpha(1);

// set font
$pdf->SetFont('times', '', 11);

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_004.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
