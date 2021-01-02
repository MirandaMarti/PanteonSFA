<?php
//============================================================+
// File name   : contratocompraventacontado.php
// Begin       : 2021-01-8
// Last Update : 2013-01-15
//
// Description : Contrato de compra-venta para compra contado
//
// Author: Martín Bárcenas Miranda
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
 * @abstract TCPDF - Example: Default Header and Footer
 * @author Martín Bárcenas Miranda
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('H. Ayuntamiento de Temixco');
$pdf->SetTitle('Contrato compra-venta contado');
$pdf->SetSubject('TCPDF');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.'', PDF_HEADER_STRING, array(0,0,0), array(0,64,128));
$pdf->setFooterData(array(0,64,0), array(0,64,128));

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

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 10, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

// Set some content to print
$html = <<<EOD


<p>CONTRATO DE COMPRAVENTA DIRECTA RESPECTO A LA ADQUISICIÓN DE UNA PERPETUIDAD DENTRO DEL PANTEON “SAN FRANCISCO DE ASIS”, UBICADO EN EL EJIDO Y POBLADO DE PUEBLO VIEJO, DEL MUNICIPIO DE TEMIXCO, MORELOS, QUE CELEBRAN POR UNA PARTE, EL AYUNTAMIENTO CONSTITUCIONAL DE TEMIXCO, MORELOS; REPRESENTADO EN ESTE ACTO POR SU PRESIDENTA MUNICIPAL CONSTITUCIONAL, LA LIC. EN E.S. JAZMIN JUANA SOLANO LOPEZ; A QUIEN EN LO SUCESIVO Y PARA LOS EFECTOS DEL PRESENTE CONTRATO, SE LE DENOMINARÁ “EL AYUNTAMIENTO Y/O EL VENDEDOR” Y POR LA OTRA PARTE, “EL COMPRADOR”, A QUIEN EN LO SUCESIVO Y PARA LOS EFECTOS DEL PRESENTE CONTRATO, SE DIRÁ “LAS PARTES”, MISMAS QUE SE SUJETAN AL TENOR DE LAS DECLARACIONES Y CLÁUSULAS SIGUIENTES:</p>

<p style="text-align:center;">D E C L A R A C I O N E S</p>

<p>I. DECLARA “EL AYUNTAMIENTO Y/O VENDEDOR”:</p>

<p>I.1. El Ayuntamiento Constitucional de Temixco, Morelos, es una entidad investida de personalidad jurídica propia, base de la división territorial y de la organización política y administrativa del Estado de Morelos, en los términos de los artículos 115 de la Constitución Política de los Estados Unidos Mexicanos; artículos 112 y 113 de la Constitución Política del Estado de Morelos; así como los artículos 2, 5 y 38 de la Ley Orgánica Municipal del Estado de Morelos; y 1,2,5,19 y 20 del Bando de Policía y Buen Gobierno del Municipio de Temixco, Morelos. </p>

<p>I.2.- La Lic. en E.S. Jazmín Juana Solano López, Presidenta Municipal de Temixco, se encuentra facultada para celebrar y firmar todos los acuerdos, convenios y actos jurídicos que fueran necesarios, de conformidad con lo establecido por los artículos 1, 2, 3, 4, 5, 38 fracción IX y 41 fracciones VII y IX de la Ley Orgánica Municipal del Estado de Morelos, así como en lo dispuesto por los artículos 5, 21, 22, 26, 34 del Reglamento de Gobierno y de la Administración Pública del Municipio de Temixco, Morelos; así como lo previsto en el artículo 20 y 23 del Bando de Policía y Buen Gobierno del Municipio de Temixco, Morelos y demás relativos y aplicables, y tiene facultades suficientes para celebrar todos aquellos actos, contratos e instrumentos jurídicos necesarios, para el buen desempeño de los negocios administrativos del municipio y la eficaz prestación de los servicios públicos municipales, durante el presente periodo de gestión.</p>

<p>I.3.- La Lic. en E.S. Jazmín Juana Solano López, Presidenta Municipal Constitucional de Temixco, Morelos, tiene plena capacidad legal de representatividad, para celebrar el presente convenio, en virtud de la constancia de mayoría que le fue expedida el día 05 de julio del año 2018, por el Consejo Municipal Electoral de Temixco, Morelos, del Instituto Morelense de Procesos Electorales y Participación Ciudadana.</p>

<p>I.4.- Para los efectos legales del presente instrumento, señala como su domicilio el ubicado en Avenida Emiliano Zapata No. 16, Col Centro, Temixco, Morelos, C.P. 62580, Estado de Morelos.</p>

<p></p>
<p></p>

<p>II. DECLARA “EL COMPRADOR”:</p>

<p>II.1. Que es una persona física, en pleno uso y goce de sus facultades físicas y mentales y con capacidad legal, de conformidad con la legislación mexicana.</p>

<p>II.2. Que tiene la necesidad de adquirir, mediante la presente celebración del Contrato de Compraventa directa de una perpetuidad, dentro del Panteón “SAN FRANCISCO DE ASIS”, ubicado en el Ejido y Poblado de Pueblo Viejo del Municipio de Temixco, Morelos, y cumplir puntual y cabalmente, con toda la normatividad, así como los lineamientos internos que regulan la venta, organización funcionamiento, del panteón que le hace del conocimiento “EL AYUNTAMIENTO Y/O EL VENDEDOR”. </p>

<p>II.3 Que señala como su domicilio legal, para los efectos de este contrato, lo es el ubicado en Temixco, Morelos.</p>

<p>III. DECLARAN “LAS PARTES”:</p>

<p>III.1. Que es su deseo, la celebración voluntaria del presente contrato y que ambas se reconocen la personalidad jurídica con la que se ostentan y reconocen que, en el presente contrato, no existe coacción alguna y que el mismo no es contrario a la ley, a la moral ni a las buenas costumbres.</p>

<p>III.2. Que el presente Contrato de Compraventa Directa, se encuentra regulado por lo dispuesto en los artículos 1729, 1730, 1764, 1775, 1781 y demás relativos y aplicables del Código Civil vigente para el Estado de Morelos. </p>

<p>En mérito de las declaraciones que anteceden, “LAS PARTES” sujetan el presente Contrato, a las siguientes:</p>

<p style="text-align:center;">C L Á U S U L A S</p>

<p>PRIMERA.- OBJETO DEL CONTRATO.- “LAS PARTES” suscriben el presente Contrato de Compraventa Directa, mediante el cual “EL VENDEDOR Y/O EL AYUNTAMIENTO” vende “AL COMPRADOR” y éste recibe la adquisición de una perpetuidad, dentro del Panteón “SAN FRANCISCO DE ASIS”, ubicado en la Calle Sin Nombre del Ejido de Pueblo Viejo y en particular en la Colonia Pueblo Viejo, del Municipio de Temixco, Morelos; con base a los Lineamientos y el Reglamento Interno del Panteón antes referido, mismo que le es entregado conforme a la organización interna que tiene el administrador del citado “AYUNTAMIENTO Y/O VENDEDOR”, bajo la organización del mismo.</p>

<p>SEGUNDA. - COSTO DE LA PERPETUIDAD. - “LAS PARTES” convienen que el precio de la perpetuidad, así como los demás conceptos o servicios que se proporcionan dentro del panteón “SAN FRANCISCO DE ASIS”, estará estipulado en la Ley de Ingresos Municipal, y también estará precisado en el presente Contrato, razón por la cual el precio que se fija por la cantidad de $32,473.13, misma cantidad que deberá de cubrirse por “EL COMPRADOR”. </p>

<p></p>

<p>Siendo importante precisar, que la cantidad descrita en el párrafo en mención se encontrará vigente solo para el presente ejercicio fiscal 2020, toda vez que dichas cantidades, serán actualizadas una vez que se actualicen las Unidades de Medidas de Actualización, así como la Ley de Ingresos para el Municipio de Temixco, correspondiente.</p>

<p>Así mismo, las partes acuerdan que no habrá ningún tipo de descuento, manifestación que de común acuerdo se hace, para todos los efectos legales a que haya lugar.</p>

<p>TERCERA. - FORMA DE PAGO. - “LAS PARTES” convienen que la forma de pago se realizará por parte de “EL COMPRADOR”, en efectivo que será depositada en las oficinas de ingresos del “EL AYUNTAMIENTO Y/O VENDEDOR”; con los siguientes datos bancarios:</p>

 	<p>BENEFICIARIO: MUNICIPIO DE TEMIXCO.<br> 
 	NUMERO DE CUENTA: 0113753867<br>
	BANCO: BBVA<br>
	CLAVE INTERBANCARIA: 012540001137538675</p>

 <p>Mismos pagos que podrán realizarse también mediante depósito bancario, trasferencia electrónica, pago con tarjeta de crédito y/o debido, por la cantidad convenida utilizando los datos bancarios ya señalados; así mismo se compromete “EL COMPRADOR” a no realizar pago alguno a ninguna persona ajena a la dependencia ya mencionada, mediante la contra entrega del recibo oficial correspondiente, que justifique la operación de compraventa celebrada.</p>


<p>CUARTA. - CONFORMIDAD. - “EL COMPRADOR” manifiesta su conformidad con la forma de pago que se describe en la Cláusula Segunda y Tercera, en consecuencia “EL AYUNTAMIENTO Y/O VENDEDOR” se da en el momento en que se liquide, por pagado de todos y cada una de las cláusulas del Contrato de Compraventa Directa celebrado por las partes. </p>

<p>QUINTA. - OCUPACION DE MANERA ANTICIPADA. - “LAS PARTES” convienen que la cripta a perpetuidad tipo III, podrá disponer de ella “EL COMPRADOR” si así lo requiere, a partir de la fecha que le sea designada, por la autoridad municipal competente. </p>

<p>SEXTA .- DESIGNACION DE AVAL O RESPONSABLE SOLIDARIO.- “EL COMPRADOR” tiene el derecho de designar a una persona , bajo el carácter de AVAL O RESPONSABLE SOLIDARIO, que en caso de ausencia del “COMPRADOR”, tendrá el derecho  de ocupar la cripta que se adquiere; del mismo modo y solo para el caso de que “EL COMPRADOR”, con posterioridad a la celebración del presente contrato, por circunstancias extraordinarias, decida cambiar de Aval o Responsable Solidario, dicho cambio generará un costo, el cual deberá de ajustarse a lo establecido en la Ley de Ingresos vigente del “EL VENDEDOR Y/O EL AYUNTAMIENTO”. </p>

<p></p>
<p></p>

<p>Lo mismo acontece, para el caso de que el Aval o Responsable Solidario, cuando ya no esté vivo “EL COMPRADOR”, decida por circunstancias extraordinarias, ocupar la titularidad del presente contrato, deberá de realizar previo el procedimiento y pago respectivo el cambio que se solicite, ajustándose a lo establecido en la Ley de Ingresos.</p>

<p>Las partes acuerdan que, por cuanto al cambio de titular, dicho trámite deberá de sujetarse a lo dispuesto en la Ley de Ingresos.</p>

<p>SEPTIMA. - MANTENIMIENTO DEL LOTE. - “LAS PARTES” convienen que “EL COMPRADOR”, pagará a la administración del panteón “SAN FRANCISCO DE ASIS”, la cantidad correspondiente a la limpieza y mantenimiento de manera anual o conforme a los periodos que se les requiera, y deberá de realizar este pago al inicio de cada año.</p>

<p>OCTAVA. - 	OBLIGACIONES “DEL COMPRADOR”. Las partes acuerdan que le corresponden a “EL COMPRADOR”, el cumplimiento de las siguientes obligaciones:</p>

<p>
-	La suscripción del presente contrato no exime ni libera a “EL COMPRADOR” de realizar los trámites que sean necesarios y cumplir con los requisitos que se le soliciten ante las oficinas de Servicios Públicos y en particular ante la Oficina de Panteones del “AYUNTAMIENTO y/o VENDEDOR”;<br><br>
-	A realizar todos los pagos, que con motivo del presente contrato se generen directamente en las oficinas de “EL VENDEDOR Y/O AYUNTAMIENTO”, en particular en la Secretaria de Servicios Públicos y/o Oficina de Panteones dependiente de ésta última y a no realizar pago alguno, a ninguna persona ajena a la dependencia ya mencionada;<br><br>
-	A notificar al Administrador del Panteón, cualquier daño o desperfecto que reciba en base a su espacio adquirido;<br><br>   
-	A cumplir con los Lineamientos que Regulan el Funcionamiento del Panteón Municipal “San Francisco de Asís de Temixco”, así como el Reglamento para la Prestación del Servicio Público de Panteones del Municipio de Temixco.<br><br>
-	Así mismo a instalar cruces, monumentos, mausoleos, construcciones, en las criptas ya que ésta deberá de ser adecuada las especificaciones que la administración del panteón le sugiera al momento del contrato;<br><br>
-	A realizar cualquier otra acción, situación o problema que genere y afecte el buen funcionamiento y organización del panteón, ya que de hacerlo será consignado a las autoridades correspondientes. 
</p>

<p>NOVENA- LIBERACIÓN DE LA COMPRA. - “EL AYUNTAMIENTO Y/O VENDEDOR” manifiesta que una vez liquidado el total de la cantidad de la compra de la CRIPTA dentro del panteón “SAN FRANCISCO DE ASIS”, entregará el recibo oficial de pago, así como una copia certificada del contrato de compra venta directa.</p>

<p></p>

<p>DECIMA. - NORMATIVIDAD INTERNA DEL PANTEON. - “LAS PARTES” acuerdan que, para un correcto manejo, adecuado y organizado del panteón, implementó un reglamento interno, que a la firma del presente contrato se le ha dado a conocer, el cual se compromete a respetar y sujetarse a su estricto cumplimiento, bajo pena de que de no ajustarse se podrá dar por rescindido el presente contrato sin responsabilidad alguna para “EL AYUNTAMIENTO Y/O VENDEDOR”. </p>

<p>DECIMA PRIMERA.- CAUSALES DE RESCISION DEL CONTRATO.- “LAS PARTES” manifiestan que en caso de incumplimiento, tanto a las cláusulas del presente contrato o a las disposiciones establecidas en los Lineamientos de este Panteón, así como aquellas condicionantes o requisitos señalados por la autoridad municipal, se libera a “EL AYUNTAMIENTO Y/O VENDEDOR”, del cumplimiento del mismo, pudiendo éste disponer del lote de la manera que a éste mejor le convenga, sin necesidad de declaración judicial alguna, ni responsabilidad para éste último. </p>

<p>DECIMA SEGUNDA. - JURISDICCION Y COMPETENCIA. - “LAS PARTES” acuerdan que cualquier controversia que surja con la interpretación del presente contrato, se someten expresamente a la jurisdicción y competencia de los Juzgados Civiles de Primera Instancia del Octavo Distrito Judicial con sede en el Municipio de Xochitepec, Morelos. </p>

<h4>ESTANDO “LAS PARTES” DEBIDAMENTE ENTERADAS DEL ALCANCE Y CONTENIDO DEL PRESENTE CONTRATO Y MANIFESTANDO QUE NO EXISTEN DOLO, LESION O CUALQUIER OTRO VICIO DE LA VOLUNTAD O DEL CONSENTIMIENTO QUE PUDIERAN INVALIDARLO, TODO O EN PARTE, LO RATIFICAN Y FIRMAN DE CONFORMIDAD POR QUINTUPLICADO, AL DÍA_________________________________________. ------------------</h4>

<p></p>
<p></p>

<h4 style="text-align:center;">LAS PARTES</h4>

<h4 style="text-align:center;">“POR EL AYUNTAMIENTOY/O VENDEDOR”.<br>
LIC. EN E.S. JAZMIN JUANA SOLANO LOPEZ.<br>
 PRESIDENTA MUNICIPAL CONSTITUCIONAL<br> 
 DE TEMIXCO, MORELOS.
</h4>

<p></p>
<p></p>

<h4 style="text-align:center;">________________________</h4>

<p></p>

<h4 style="text-align:center;">“EL COMPRADOR” </h4>

<p></p>
<p></p>

<h4 style="text-align:center;">C.________________________</h4>

<p></p>
<p></p>

<p style="font-size: xx-small";>LA PRESENTE HOJA DE FIRMAS CORRESPONDE AL CONTRATO DE COMPRAVENTA DIRECTA RESPECTO A LA ADQUISICIÓN DE UNA CRIPTA A PERPETUIDAD TIPO III, DENTRO DEL PANTEON “SAN FRANCISCO DE ASIS”, UBICADO EN EL EJIDO Y POBLADO DE PUEBLO VIEJO DEL MUNICIPIO DE TEMIXCO, MORELOS, QUE CELEBRAN POR UNA PARTE, EL AYUNTAMIENTO CONSTITUCIONAL DE TEMIXCO, MORELOS; REPRESENTADO EN ESTE ACTO POR SU PRESIDENTE MUNICIPAL CONSTITUCIONAL LA LIC. EN E.S. JAZMIN JUANA SOLANO LOPEZ; A QUIEN EN LO SUCESIVO Y PARA LOS EFECTOS DEL PRESENTE CONTRATO SE LE DENOMINARÁ “EL AYUNTAMIENTO Y/O EL VENDEDOR” Y POR LA OTRA EL “EL COMPRADOR” A QUIEN EN LO SUCESIVO Y PARA LOS EFECTOS DEL PRESENTE CONTRATO SE DIRÁ “LAS PARTES”.</p>

EOD;


// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('contratocompraventacontado.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+