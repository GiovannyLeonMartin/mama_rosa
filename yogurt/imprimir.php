<?php /////////////////////////////////pdf///////////////////////////////////////// ?>
<?php
require('fpdf/fpdf.php');

/*************************************segundofpdf*********************************************/
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('img/logo.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'PEDIDOS',0,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pag'.$this->PageNo().'/{nb}',0,0,'C');
}
}

/*****************************************************************************/
/*/////////////////////////////traer base de datos//////////////////////////////////////////////*/
require 'cn.php';
$consulta = "SELECT * FROM pedidos";
$resultado = $mysqli -> query($consulta);
/*////////////////////////////////////////////////////////////////////*/
$pdf = new PDF('L','mm','A4');
$pdf -> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

while ($row = $resultado -> fetch_assoc()) {
/*      $pdf-> cell(ANCHO,ALTO,imprimir el texto,borde,salto de linea,donde estara justificado,relleno)      */
  $pdf->Cell(20,10,utf8_decode('Numero de pedido:'),0,0);
  $pdf-> cell(70,10,$row['id'],0,1,'C',0);
$pdf->Cell(20,10,utf8_decode('Nombre:'),0,0);
  $pdf-> cell(100,10,$row['nombre'],0,0,'C',0);
$pdf->Cell(20,10,utf8_decode('correo:'),0,0);
  $pdf-> cell(70,10,$row['correo'],0,1,'C',0);
$pdf->Cell(20,10,utf8_decode('Direccion:'),0,1);
  $pdf-> cell(250,10,$row['direccion'],0,1,'C',0);
$pdf->Cell(20,10,utf8_decode('Referencia:'),0,1);
    $pdf-> cell(250,10,$row['referencia'],0,1,'C',0);
$pdf->Cell(20,10,utf8_decode('Hora deseada de entrega:'),0,0);
  $pdf-> cell(120,10,$row['hora'],0,0,'C',0);
$pdf->Cell(20,10,utf8_decode('Fecha deseada de entrega:'),0,0);
  $pdf-> cell(140,10,$row['fecha'],0,0,'C',0);
$pdf->Cell(20,10,utf8_decode('Numero de contacto:'),0,0);
  $pdf-> cell(100,10,$row['numero'],0,1,'C',0);
$pdf->Cell(20,10,utf8_decode('Durazno de litro:'),0,0);
  $pdf-> cell(70,10,$row['dlitro'],0,1,'C',0);
$pdf->Cell(20,10,utf8_decode('Durazno de medio:'),0,0);
  $pdf-> cell(70,10,$row['dmedio'],0,0,'C',0);
$pdf->Cell(20,10,utf8_decode('Fresa de litro:'),0,0);
  $pdf-> cell(70,10,$row['flitro'],0,0,'C',0);
$pdf->Cell(20,10,utf8_decode('Fresa de medio:'),0,0);
  $pdf-> cell(70,10,$row['fmedio'],0,1,'C',0);
$pdf->Cell(20,10,utf8_decode('Guayaba de litro:'),0,0);
  $pdf-> cell(70,10,$row['glitro'],0,0,'C',0);
$pdf->Cell(20,10,utf8_decode('Guayaba de medio:'),0,0);
  $pdf-> cell(70,10,$row['gmedio'],0,0,'C',0);
$pdf->Cell(20,10,utf8_decode('Nuez de litro'),0,0);
  $pdf-> cell(70,10,$row['nlitro'],0,1,'C',0);
$pdf->Cell(20,10,utf8_decode('Nuez de medio:'),0,0);
  $pdf-> cell(70,10,$row['nmedio'],0,0,'C',0);
$pdf->Cell(20,10,utf8_decode('Piña de litro:'),0,0);
  $pdf-> cell(70,10,$row['plitro'],0,0,'C',0);
$pdf->Cell(20,10,utf8_decode('Piña de medio:'),0,0);
  $pdf-> cell(70,10,$row['pmedio'],0,1,'C',0);

  $pdf->Cell(20,10,utf8_decode('-------------------------------------------------------------------------------------------------------------------------------'),0,1);
    $pdf->Cell(20,30,utf8_decode(''),0,1);
}
$pdf->Output();
?>
<?php ////////////////////////////////////////////////////////////////////////////////// ?>
